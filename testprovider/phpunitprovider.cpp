/***************************************************************************
 *   This file is part of KDevelop PHP support                             *
 *   Copyright 2012 Miha Čančula <miha@noughmad.eu>                        *
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU Library General Public License as       *
 *   published by the Free Software Foundation; either version 2 of the    *
 *   License, or (at your option) any later version.                       *
 *                                                                         *
 *   This program is distributed in the hope that it will be useful,       *
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of        *
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         *
 *   GNU General Public License for more details.                          *
 *                                                                         *
 *   You should have received a copy of the GNU Library General Public     *
 *   License along with this program; if not, write to the                 *
 *   Free Software Foundation, Inc.,                                       *
 *   51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.         *
 ***************************************************************************/


#include "phpunitprovider.h"

#include "phpunittestsuite.h"
#include "testproviderdebug.h"

#include <interfaces/icore.h>
#include <interfaces/iprojectcontroller.h>
#include <interfaces/iproject.h>
#include <interfaces/ilanguagecontroller.h>
#include <interfaces/itestcontroller.h>
#include <project/projectmodel.h>

#include <language/backgroundparser/backgroundparser.h>
#include <language/duchain/duchainlock.h>
#include <language/duchain/duchain.h>
#include <language/duchain/declaration.h>
#include <language/duchain/classdeclaration.h>
#include <language/duchain/duchainutils.h>

#include <KPluginFactory>
#include <KPluginLoader>
#include <KAboutData>
#include <KLocalizedString>
#include <KStandardDirs>
#include <QVariant>
#include <QTimer>

using namespace KDevelop;

K_PLUGIN_FACTORY(PhpUnitProviderFactory, registerPlugin<PhpUnitProvider>(); )

PhpUnitProvider::PhpUnitProvider(QObject* parent, const QList< QVariant >& args)
    : IPlugin(QStringLiteral("kdevphpunitprovider"), parent)
{
    Q_UNUSED(args);

    QString file = KStandardDirs::locate("data", "kdevphpsupport/phpunitdeclarations.php");
    DUChain::self()->updateContextForUrl(IndexedString(file), KDevelop::TopDUContext::AllDeclarationsContextsAndUses, this, -10);

    connect (core()->languageController()->backgroundParser(), SIGNAL(parseJobFinished(KDevelop::ParseJob*)), SLOT(parseJobFinished(KDevelop::ParseJob*)));
}

void PhpUnitProvider::updateReady(const IndexedString& document, const ReferencedTopDUContext& context)
{
    Q_UNUSED(document);

    DUChainReadLocker lock;
    if (!context) {
        qCDebug(TESTPROVIDER) << "Recieved null context for file: " << document;
        return;
    }

    QVector<Declaration*> declarations = context.data()->localDeclarations();
    if (declarations.isEmpty())
    {
        qCDebug(TESTPROVIDER) << "Update of the internal test file found no suitable declarations";
        return;
    }
    m_testCaseDeclaration = IndexedDeclaration(declarations.first());

    qCDebug(TESTPROVIDER) << "Found declaration" << declarations.first()->toString();
    lock.unlock();


    foreach (const ReferencedTopDUContext& context, m_pendingContexts)
    {
        processContext(context);
    }
}

void PhpUnitProvider::parseJobFinished(KDevelop::ParseJob* job)
{
    ReferencedTopDUContext topContext = job->duChain();
    DUChainReadLocker lock;
    if (!m_testCaseDeclaration.isValid())
    {
        m_pendingContexts << topContext;
    }
    else
    {
        processContext(topContext);
    }
}


void PhpUnitProvider::processContext(ReferencedTopDUContext referencedContext)
{
    qCDebug(TESTPROVIDER);

    DUChainReadLocker locker;
    TopDUContext* context = referencedContext.data();

    if (!context) {
        qCDebug(TESTPROVIDER) << "context went away";
        return;
    }

    Declaration* testCase = m_testCaseDeclaration.data();
    if (!testCase) {
        qCDebug(TESTPROVIDER) << "test case declaration went away";
        return;
    }

    qCDebug(TESTPROVIDER) << "Number of declarations" << context->localDeclarations().size();

    foreach (Declaration* declaration, context->localDeclarations())
    {
        ClassDeclaration* classDeclaration = dynamic_cast<ClassDeclaration*>(declaration);
        if (!classDeclaration || classDeclaration->isAbstract() || !classDeclaration->internalContext())
        {
            continue;
        }

        if (classDeclaration->isPublicBaseClass(static_cast<ClassDeclaration*>(m_testCaseDeclaration.data()), context)) {
            processTestCaseDeclaration(declaration);
        }
    }
}

void PhpUnitProvider::processTestCaseDeclaration(Declaration* d)
{
    QString name = d->identifier().toString();
    QUrl url = d->url().toUrl();
    IProject* project = ICore::self()->projectController()->findProjectForUrl(url);
    qCDebug(TESTPROVIDER) << name << url << (project ? project->name() : "No project");
    if (!project)
    {
        return;
    }
    QStringList testCases;
    QHash<QString, IndexedDeclaration> testCaseDeclarations;
    ClassDeclaration* classDeclaration = dynamic_cast<ClassDeclaration*>(d);

    if (!classDeclaration)
    {
        return;
    }

    if (!classDeclaration->isAbstract())
    {
        foreach (Declaration* member, classDeclaration->internalContext()->localDeclarations())
        {
            qCDebug(TESTPROVIDER) << "Trying test case declaration" << member;
            if (member->isFunctionDeclaration() && member->identifier().toString().startsWith("test"))
            {
                const QString caseName = member->identifier().toString();
                testCases << caseName;
                testCaseDeclarations.insert(caseName, IndexedDeclaration(member));
            }
        }

        if (!testCaseDeclarations.isEmpty())
        {
            // NOTE: No declarations usually means the class in abstract
            // This should be resolved by the classDeclaration->isAbstract() check
            // But that always returns false.
            ICore::self()->testController()->addTestSuite(new PhpUnitTestSuite(name, url, IndexedDeclaration(classDeclaration), testCases, testCaseDeclarations, project));
            return;
        }
    }

    uint steps = 100;
    foreach (Declaration* inheriter, DUChainUtils::getInheriters(d, steps))
    {
        processTestCaseDeclaration(inheriter);
    }
}

#include "phpunitprovider.moc"
