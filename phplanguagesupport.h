/*****************************************************************************
 * Copyright (c) 2007 Piyush verma <piyush.verma@gmail.com>                  *
 * Copyright (c) 2009 Niko Sams <niko.sams@gmail.com>                        *
 * Copyright (c) 2010 Milian Wolff <mail@milianw.de>                         *
 *                                                                           *
 * This program is free software; you can redistribute it and/or modify      *
 * it under the terms of the GNU General Public License as published by      *
 * the Free Software Foundation; either version 2 of the License, or         *
 * (at your option) any later version.                                       *
 *                                                                           *
 * This program is distributed in the hope that it will be useful,           *
 * but WITHOUT ANY WARRANTY; without even the implied warranty of            *
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             *
 * GNU General Public License for more details.                              *
 *                                                                           *
 * You should have received a copy of the GNU General Public License         *
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.     *
 *****************************************************************************/

#ifndef KDEVPHPLANGUAGESUPPORT_H
#define KDEVPHPLANGUAGESUPPORT_H

#include <interfaces/iplugin.h>
#include <language/interfaces/ilanguagesupport.h>
#include <QtCore/QVariant>
#include <QReadWriteLock>

#include <language/duchain/indexedstring.h>

namespace KDevelop
{
class IDocument;
class IProject;
class CodeHighlighting;
class ReferencedTopDUContext;
class ParseJob;
}


namespace Php
{

class Highlighting;

/**
 * \brief Language Support plugin for PHP
 *
 * All internal PHP declarations can be found in a central document, hitherto called the
 * internal function file. See \p internalFunctionsFile(). To check whether the file was already
 * loaded, use \p internalFunctionsLoaded. If it has not yet loaded, you have two options:
 *
 * 1) Block thread and wait for job to finish:
 * \code
 * if ( phpLangSupport->internalFunctionsLoaded ) {
 *   QReadLocker(phpLangSupport->internalFunctionsLock());
 * }
 * // now you can get the ducontext
 * \endcode
 *
 * 2) Wait for job to finish and get notified via signal:
 * \code
 *  connect(ICore::self()->languageController()->backgroundParser(), SIGNAL(parseJobFinished(KDevelop::ParseJob*)),
 *           this, SLOT(slotParseJobFinished(KDevelop::ParseJob*)));
 *  ...
 *  void slotParseJobFinished(ParseJob* job) {
 *    if ( job->document() == internalFunctionsFile() )
 *      // now you can get the ducontext
 *  }
 * \endcode
 *
 * To access the DUContext, include duchain/helper.h and use:
 * \code
 *  DUChainWriteLocker lock(DUChain::lock());
 *  TopDUContext* ctx = DUChain::self()->chainForDocument(internalFunctionsFile());
 * \endcode
 *
 * To access the destination of the internal function file without linking against the LanguageSupport,
 * i.e. in the PHP-Docs plugin, use:
 * \code
 *  IndexedString url(KStandardDirs::locate("data", "kdevphpsupport/phpfunctions.php"));
 * \endcode
 */
class LanguageSupport : public KDevelop::IPlugin, public KDevelop::ILanguageSupport
{
    Q_OBJECT
    Q_INTERFACES(KDevelop::ILanguageSupport)

public:
    explicit LanguageSupport(QObject *parent, const QVariantList& args = QVariantList());
    virtual ~LanguageSupport();
    /*Name Of the Language*/
    QString name() const;
    /*Parsejob used by background parser to parse given Url*/
    KDevelop::ParseJob *createParseJob(const KUrl &url);
    /*the actual language object*/
    KDevelop::ILanguage *language();

    static LanguageSupport* self();
    /*the code highlighter*/
    const KDevelop::ICodeHighlighting* codeHighlighting() const;

    virtual QWidget* specialLanguageObjectNavigationWidget(const KUrl& url, const KDevelop::SimpleCursor& position);
    virtual KDevelop::SimpleRange specialLanguageObjectRange(const KUrl& url, const KDevelop::SimpleCursor& position);

    /// returns true, if the internal function file has been loaded
    /// to wait for it to finished, use a QReadLocker on the parse lock.
    /// @see internalFunctionsLock()
    bool internalFunctionsLoaded() const;
    /// returns a pointer to the internal functions lock, lock it for reading to wait for the
    /// internal functions to get loaded.
    /// @see internalFunctionsLoaded()
    QReadWriteLock* internalFunctionsLock();

public slots:
    /**
     * Get notified by background parser when internal function file was loaded.
     *
     * \see loadedInternalFunctions
     */
    void updateReady(KDevelop::IndexedString url, KDevelop::ReferencedTopDUContext topContext);

private slots:
    void updateInternalFunctions();

private:
    KDevelop::CodeHighlighting* m_highlighting;
    static LanguageSupport* m_self;
    bool m_internalFunctionsLoaded;
    QReadWriteLock m_internalFunctionsLock;

    QPair<QString, KDevelop::SimpleRange>  wordUnderCursor(const KUrl& url, const KDevelop::SimpleCursor& position);

};

}

#endif

