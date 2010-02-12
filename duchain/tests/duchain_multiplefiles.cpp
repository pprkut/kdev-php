/* This file is part of KDevelop
    Copyright 2010 Niko Sams <niko.sams@gmail.com>

   This library is free software; you can redistribute it and/or
   modify it under the terms of the GNU Library General Public
   License version 2 as published by the Free Software Foundation.

   This library is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
   Library General Public License for more details.

   You should have received a copy of the GNU Library General Public License
   along with this library; see the file COPYING.LIB.  If not, write to
   the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
   Boston, MA 02110-1301, USA.
*/

#include "duchain_multiplefiles.h"

#include <QtTest/QtTest>

#include <qtest_kde.h>

#include <tests/autotestshell.h>
#include <interfaces/iprojectcontroller.h>
#include <interfaces/iproject.h>
#include <tests/testcore.h>
#include <shell/projectcontroller.h>

QTEST_KDEMAIN(Php::TestDUChainMultipleFiles, GUI)

namespace Php
{

class TestProject : public KDevelop::IProject
{
    Q_OBJECT
public:
    KDevelop::IProjectFileManager* projectFileManager() const { return 0; }
    KDevelop::IBuildSystemManager* buildSystemManager() const { return 0; }
    KDevelop::IPlugin* managerPlugin() const { return 0; }
    KDevelop::IPlugin* versionControlPlugin() const { return 0; }
    KDevelop::ProjectFolderItem* projectItem() const { return 0; }
    int fileCount() const { return 0; }
    KDevelop::ProjectFileItem* fileAt( int ) const { return 0; }
    QList<KDevelop::ProjectFileItem*> files() const { return QList<KDevelop::ProjectFileItem*>(); }
    QList<KDevelop::ProjectFileItem*> filesForUrl( const KUrl& ) const { return QList<KDevelop::ProjectFileItem*>(); }
    QList<KDevelop::ProjectFolderItem*> foldersForUrl( const KUrl& ) const { return QList<KDevelop::ProjectFolderItem*>(); }
    void reloadModel() { }
    KUrl projectFileUrl() const { return KUrl(); }
    KSharedConfig::Ptr projectConfiguration() const { return KGlobal::config(); }
    void addToFileSet( const KDevelop::IndexedString& file) { m_fileSet << file; }
    void removeFromFileSet( const KDevelop::IndexedString& file) { m_fileSet.remove(file); }
    QSet<KDevelop::IndexedString> fileSet() const { return m_fileSet; }
public Q_SLOTS:
    const KUrl folder() const { return KUrl(); }
    QString name() const { return "Test Project"; }
    KUrl relativeUrl(const KUrl& ) const { return KUrl(); }
    bool inProject(const KUrl &) const { return false; }
private:
    QSet<KDevelop::IndexedString> m_fileSet;
};


class TestProjectController : public KDevelop::ProjectController
{
    Q_OBJECT
public:
    TestProjectController(KDevelop::Core* core) : KDevelop::ProjectController(core) {}
    KDevelop::IProject* projectAt( int i ) const { return m_projects.at(i); }
    int projectCount() const { return m_projects.count(); }
    QList<KDevelop::IProject*> projects() const { return m_projects; }
public:
    void addProject(KDevelop::IProject* p) { p->setParent(this); m_projects << p; }

private:
    QList<KDevelop::IProject*> m_projects;
};

void TestDUChainMultipleFiles::init()
{
    AutoTestShell::init();
    m_core = new KDevelop::TestCore();
    m_core->initialize(KDevelop::Core::NoUi);
    m_projectController = new TestProjectController(m_core);
    m_core->setProjectController(m_projectController);
}

void TestDUChainMultipleFiles::cleanup()
{
    m_core->cleanup();
    delete m_core;
}

class TestFile : public QObject
{
    Q_OBJECT
public:
    TestFile(QByteArray contents, TestProject *project) : m_file("XXXXXX.php"), m_ready(false) {
        m_file.open();
        m_file.write(contents);
        m_file.close();
        project->addToFileSet(KDevelop::IndexedString(m_file.fileName()));
    }

    KDevelop::ReferencedTopDUContext parse(KDevelop::TopDUContext::Features features)
    {
        KDevelop::DUChain::self()->updateContextForUrl(KDevelop::IndexedString(m_file.fileName()), features, this);
        QTime t;
        t.start();
        while (!m_ready) {
            Q_ASSERT(t.elapsed() < 1000);
            QTest::qWait(10);
        }
        return m_topContext;
    }

public slots:
    void updateReady(KDevelop::IndexedString url, KDevelop::ReferencedTopDUContext topContext)
    {
        Q_ASSERT(url.str() == m_file.fileName());
        m_ready = true;
        m_topContext = topContext;
    }

private:
    QTemporaryFile m_file;
    bool m_ready;
    KDevelop::ReferencedTopDUContext m_topContext;
};


void TestDUChainMultipleFiles::testImportsGlobalFunction()
{
    KDevelop::TopDUContext::Features features = KDevelop::TopDUContext::VisibleDeclarationsAndContexts;

    TestProject* project = new TestProject;
    m_projectController->addProject(project);

    TestFile f1("<? function foo() {}", project);
    KDevelop::ReferencedTopDUContext t1 = f1.parse(features);
    DUChainReleaser releaseTop1(t1);

    TestFile f2("<? foo();", project);
    KDevelop::ReferencedTopDUContext t2 = f2.parse(features);
    DUChainReleaser releaseTop2(t2);

    KDevelop::DUChainWriteLocker lock(KDevelop::DUChain::lock());
    QVERIFY(t2->imports(t1, KDevelop::SimpleCursor(0, 0)));
}


}

#include "duchain_multiplefiles.moc"
#include "moc_duchain_multiplefiles.cpp"