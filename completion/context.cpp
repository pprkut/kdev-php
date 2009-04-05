/*
   Copyright 2007 David Nolden <david.nolden.kdevelop@art-master.de>
   Copyright 2008 Hamish Rodda <rodda@kde.org>
   Copyright 2008 Niko Sams <niko.sams@gmail.com>

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

#include "context.h"

#include "duchain/expressionparser.h"
#include "helpers.h"

#include "implementationitem.h"
#include "keyworditem.h"

#include <ktexteditor/view.h>
#include <ktexteditor/document.h>
#include <klocalizedstring.h>
#include <language/duchain/ducontext.h>
#include <language/duchain/duchain.h>
#include <language/duchain/classfunctiondeclaration.h>
#include <language/duchain/duchainlock.h>
#include <language/duchain/stringhelpers.h>
#include <language/duchain/types/identifiedtype.h>
#include <language/duchain/types/structuretype.h>
#include <language/interfaces/iproblem.h>
#include <util/pushvalue.h>
#include <language/duchain/codemodel.h>
#include <language/duchain/classdeclaration.h>

#include <interfaces/icore.h>
#include <interfaces/iprojectcontroller.h>
#include <interfaces/iproject.h>
#include <project/projectmodel.h>

#define LOCKDUCHAIN     DUChainReadLocker lock(DUChain::lock())

#define ifDebug(x) x

using namespace KDevelop;

namespace Php {

/// add keyword to list of completion items
#define ADD_KEYWORD(x) items << CompletionTreeItemPointer( new KeywordItem( x, KDevelop::CodeCompletionContext::Ptr(this) ) );

int completionRecursionDepth = 0;

CodeCompletionContext::CodeCompletionContext(DUContextPointer context, const QString& text, const QString& followingText, int depth)
  : KDevelop::CodeCompletionContext(context, text, depth)
  , m_memberAccessOperation(NoMemberAccess), m_parentAccess(false)
{

  m_valid = isValidPosition();
  if( !m_valid ) {
    log( "position not valid for code-completion" );
    return;
  }

  ifDebug( log( "non-processed text: " + m_text ); )

  m_text = clearComments( m_text );
  m_text = clearStrings( m_text );
  m_text = stripFinalWhitespace( m_text );

  ifDebug( log( "processed text: " + m_text ); )

  ///@todo template-parameters

  ///First: find out what kind of completion we are dealing with

  // if the parent context is a class, we can decide in completionItems
  // which kind of completion is applicable
  if ( m_duContext->type() == DUContext::Class ) {
    if ( m_text.endsWith( ')' ) ) {
      // TODO: add {...} according to chosen code style
      m_valid = false;
      return;
    } else if ( m_text.endsWith( "var", Qt::CaseInsensitive ) || m_text.endsWith( "const", Qt::CaseInsensitive ) ) {
      // nothing we can complete here
      m_valid = false;
      return;
    } else if ( m_text.endsWith( "extends", Qt::CaseInsensitive ) ) {
      // when we change the "extends" stuff of an existing class m_duContext will be a class
      // even though we are not inside it's {...} area
      m_memberAccessOperation = ClassExtendsChoose;
      // interfaces can only extend interfaces
      LOCKDUCHAIN;
      if ( ClassDeclaration* klass = dynamic_cast<ClassDeclaration*>(m_duContext->owner()) ) {
        if ( klass->classType() == ClassDeclarationData::Interface ) {
          m_memberAccessOperation = InterfaceChoose;
        }
      }
      forbidLastIdentifier( m_text, "extends" );
    } else if ( m_text.endsWith( "implements", Qt::CaseInsensitive ) ) {
      m_memberAccessOperation = InterfaceChoose;
      forbidLastIdentifier( m_text, "implements" );
    } else if ( m_text.endsWith(',')  ) {
      // check if we really try to add something to a list of interfaces
      if ( textEndsOnInterfaceList(m_text) ) {
        m_memberAccessOperation = InterfaceChoose;
      } else {
        m_valid = false;
        return;
      }
    } else {
      m_memberAccessOperation = ClassMemberChoose;
    }
    return;
  }

  if (m_text.endsWith( ';' ) || m_text.endsWith('}') || m_text.endsWith('{') || m_text.endsWith(')') ) {
    ///We're at the beginning of a new statement. General completion is valid.
    return;
  }

  if( m_text.endsWith("->") ) {
    m_memberAccessOperation = MemberAccess;
    m_text = m_text.left( m_text.length()-2 );
    ifDebug( log( "MemberAccess"); )
  }

  if( m_text.endsWith("::") ) {
    m_memberAccessOperation = StaticMemberAccess;
    m_text = m_text.left( m_text.length()-2 );
    ifDebug( log( "StaticMemberAccess"); )
  }

  if( m_text.endsWith('(') ) {
    QString m_text_copy = m_text.left( m_text.length()-1 ).trimmed();
    ifDebug( log( m_text_copy ); )
    if ( m_text_copy.endsWith("catch") ) {
      ifDebug( log( "ExceptionChoose"); )
      m_memberAccessOperation = ExceptionChoose;
      return;
    } else if ( m_text_copy.endsWith("array") ) {
      ifDebug( log ("NoMemberAccess"); )
      m_memberAccessOperation = NoMemberAccess;
      return;
    }

    if( depth == 0 ) {
      //The first context should never be a function-call context, so make this a NoMemberAccess context and the parent a function-call context.
      m_parentContext = new CodeCompletionContext( m_duContext, m_text, QString(), depth+1 );
      ifDebug( log( "NoMemberAccess (created parentContext)"); )
      return;
    }
    m_memberAccessOperation = FunctionCallAccess;
    m_text = m_text_copy;
    ifDebug( log( "FunctionCallAccess"); )

  }

  ///Now find out where the expression starts

  /**
   * Possible cases:
   * a = exp; - partially handled
   * ...
   * return exp;
   * emit exp;
   * throw exp;
   * new Class;
   * a=function(exp
   * a = exp(
   * ClassType instance(
   *
   * What else?
   *
   * When the left and right part are only separated by a whitespace,
   * expressionAt returns both sides
   * */
    m_expression = m_text.trimmed();
    
  int start_expr = expressionAt( m_text, m_text.length() );

  m_expression = m_text.mid(start_expr).trimmed();

  if(m_expression == "else")
    m_expression = QString();

  QString expressionPrefix = stripFinalWhitespace( m_text.left(start_expr) );
  ifDebug( log( "expressionPrefix: " + expressionPrefix ); )

  ///Handle beginning of a PHP block
  if ( expressionPrefix.endsWith("<?") && (m_expression.isEmpty() || m_expression.compare("php", Qt::CaseInsensitive) == 0) ) {
    return;
  }

  ///Handle lists of interfaces
  if ( expressionPrefix.endsWith(',') && m_duContext->type() != DUContext::Function &&
       textEndsOnInterfaceList(expressionPrefix) ) {
    m_memberAccessOperation = InterfaceChoose;
    return;
  }
  
  ///Handle recursive contexts(Example: "ret = function1(param1, function2(" )
  if( expressionPrefix.endsWith('(') || expressionPrefix.endsWith(',') ) {
    log( QString("Recursive function-call: Searching parent-context in \"%1\"").arg(expressionPrefix) );
    //Our expression is within a function-call. We need to find out the possible argument-types we need to match, and show an argument-hint.

    //Find out which argument-number this expression is, and compute the beginning of the parent function-call(parentContextLast)
    QStringList otherArguments;
    int parentContextEnd = expressionPrefix.length();
    
    skipFunctionArguments( expressionPrefix, otherArguments, parentContextEnd );

    QString parentContextText = expressionPrefix.left(parentContextEnd);
    
    if ( parentContextText == text ) {
      log ( QString("Endless recursion spotted, this doesn't seem to be a valid position for a code completion.") );
      m_valid = false;
      return;
    }
    
    log( QString("This argument-number: %1 Building parent-context from \"%2\"").arg(otherArguments.size()).arg(parentContextText) );
    
    m_parentContext = new CodeCompletionContext( m_duContext, parentContextText, QString(), depth+1 );
    
    if ( !m_parentContext->isValid() ) {
      m_parentContext = 0;
      m_valid = false;
      return;
    }
  }

  ///Now care about m_expression. It may still contain keywords like "new "
  bool isReturn = false;

  QString expr = m_expression.trimmed();

  if( expr.startsWith("return") )  {
    isReturn = true; //When isReturn is true, we should match the result against the return-type of the current context-function
    expr = expr.right( expr.length() - 6 );
  }
  if ( expr == "throw" )  {
    m_memberAccessOperation = ExceptionInstanceChoose;
    return;
  }
  if ( expr == "new" && expressionPrefix.endsWith("throw") ) {
    m_memberAccessOperation = ExceptionChoose;
    return;
  }
  if ( expr == "implements" || ( expr == "extends" && expressionPrefix.contains(QRegExp("interface\\s+\\S+$")) ) ) {
    m_memberAccessOperation = InterfaceChoose;
    forbidLastIdentifier( expressionPrefix );
    return;
  }
  if ( expr == "extends" ) {
    m_memberAccessOperation = ClassExtendsChoose;
    forbidLastIdentifier( expressionPrefix );
    return;
  }
  if ( expr == "new" ) {
    m_memberAccessOperation = NewClassChoose;
    return;
  }

  ifDebug( kDebug() << "expression: " << expr; )

  if (m_memberAccessOperation == StaticMemberAccess) {
    LOCKDUCHAIN;
    if ( expr == "self" || expr == "parent" ) {
      // self and parent are only accessible from within a member function of a class
      if ( DUContext* parent = context->parentContext() ) {
        ClassDeclaration* classDec = dynamic_cast<ClassDeclaration*>(parent->owner());
        if ( classDec ) {
          if ( expr == "parent" ) {
            FOREACH_FUNCTION(const BaseClassInstance& base, classDec->baseClasses) {
              if ( StructureType::Ptr classType = base.baseClass.type<StructureType>() ) {
                if ( ClassDeclaration* baseClass = dynamic_cast<ClassDeclaration*>(classType->declaration(context->topContext())) ) {
                  if ( baseClass->classType() == ClassDeclarationData::Class
                        && baseClass->classModifier() != ClassDeclarationData::Abstract ) {
                    ifDebug ( kDebug() << "correction: parent can do MemberAccess" );
                    m_parentAccess = true;
                    m_memberAccessOperation = MemberAccess;
                    m_expressionResult.setDeclaration(baseClass);
                    break;
                  }
                }
              }
            }
            if ( !m_parentAccess ) {
              ifDebug ( kDebug() << "class has no accessible parent class" );
              m_valid = false;
              return;
            }
          } else {
            m_expressionResult.setDeclaration(parent->owner());
          }
        }
      }
    } else {
      QualifiedIdentifier id(expr);
      m_expressionResult.setDeclarations(m_duContext->findDeclarations(id));
    }
    if (m_expressionResult.type()) {
      ifDebug( kDebug() << "expression type: " << m_expressionResult.type()->toString(); )
    } else {
      log( QString("expression \"%1\" could not be evaluated").arg(expr) );
      m_valid = false;
      return;
    }
  } else {

        ExpressionParser expressionParser(false);
    
        if( !expr.trimmed().isEmpty() ) {
            m_expressionResult = expressionParser.evaluateType( expr.toUtf8(), m_duContext );
            if (m_expressionResult.type()) {
                LOCKDUCHAIN;
                ifDebug( kDebug() << "expression type: " << m_expressionResult.type()->toString(); )
            } else {
                log( QString("expression \"%1\" could not be evaluated").arg(expr) );
                m_valid = false;
                return;
            }
        }
    }

  if ( m_memberAccessOperation == NoMemberAccess && !expr.trimmed().isEmpty() ) {
      //This should never happen, because the position-cursor should be chosen at the beginning of a possible completion-context(not in the middle of a string)
      log( QString("Cannot complete \"%1\" because there is an expression without an access-operation" ).arg(expr) );
      m_valid  = false;
  }
}

bool CodeCompletionContext::textEndsOnInterfaceList( const QString& text ) {
  QRegExp matches("(?:interface\\s+([^\\s\\(\\[\\{,\\}\\]\\)]+)\\s+extends"
                    "|class\\s+[^\\s\\(\\[\\{,\\}\\]\\)]+\\s+"
                      "(?:extends\\s+[^\\s\\(\\[\\{,\\}\\]\\)]+\\s+)?"
                    "implements)"
                    "\\s+((?:[^\\s\\(\\[\\{,\\}\\]\\)]+\\s*,\\s*)+)$");
  matches.setCaseSensitivity(Qt::CaseInsensitive);

  if ( text.contains( matches ) ) {
    // make sure we don't try to implement the same interface twice
    if ( !matches.cap(1).isEmpty() ) {
      // add base interface
      m_forbiddenIdentifiers << Identifier(matches.cap(1)).index();
    }
    // add implemented interfaces
    foreach ( const QString &id, matches.cap(2).split(',', QString::SkipEmptyParts)) {
      m_forbiddenIdentifiers << Identifier(id.trimmed()).index();
    }
    return true;
  } else {
    return false;
  }
}

void CodeCompletionContext::forbidLastIdentifier( const QString &text, const QString &additionalPattern ) {
  // forbid current class
  QRegExp curIdentifier;
  if ( additionalPattern.isEmpty() ) {
    curIdentifier.setPattern("\\s+(\\S+)$");
  } else {
    curIdentifier.setPattern("\\s+(\\S+)\\s+" + additionalPattern + "$");
  }
  if ( text.contains(curIdentifier) ) {
    m_forbiddenIdentifiers << Identifier(curIdentifier.cap(1)).index();
  }
}

CodeCompletionContext::~CodeCompletionContext() {
}

bool CodeCompletionContext::isValidPosition() const {
  if( m_text.isEmpty() )
    return true;
  //If we are in a string or comment, we should not complete anything
/*  QString markedText = Utils::clearComments(m_text, '$');
  markedText = Utils::clearStrings(markedText,'$');

  if( markedText[markedText.length()-1] == '$' ) {
    //We are within a comment or string
    kDebug() << "code-completion position is invalid, marked text: \n\"" << markedText << "\"\n unmarked text:\n" << m_text << "\n";
    return false;
  }*/
  return true;
}

CodeCompletionContext::MemberAccessOperation CodeCompletionContext::memberAccessOperation() const {
  return m_memberAccessOperation;
}

ExpressionEvaluationResult CodeCompletionContext::memberAccessContainer() const {
  return m_expressionResult;
}

CodeCompletionContext* CodeCompletionContext::parentContext() {
  return static_cast<CodeCompletionContext*>(KDevelop::CodeCompletionContext::parentContext());
}

QList<DUContext*> CodeCompletionContext::memberAccessContainers() const
{
    QList<DUContext*> ret;
    foreach (DeclarationId declarationId, m_expressionResult.allDeclarationIds()) {
        AbstractType::Ptr expressionTarget = m_expressionResult.type();
        const IdentifiedType* idType = dynamic_cast<const IdentifiedType*>(expressionTarget.unsafeData());
        Declaration* declaration = 0;
        if (idType) {
            declaration = idType->declaration(m_duContext->topContext());
        }
        DUContext* ctx = 0;
        if (declaration) {
            ctx = declaration->logicalInternalContext(m_duContext->topContext());
        }
        if (ctx) {
            ret << ctx;
        } else if (declaration) {
            //Print some debug-output
            kDebug() << "Could not get internal context from" << declaration->toString();
        } else {
            //Print some debug-output
            kDebug() << "Could not get declaration";
        }
    }
    return ret;
}

QList<CompletionTreeItemPointer> CodeCompletionContext::completionItems(const KDevelop::SimpleCursor& position, bool& abort, bool fullCompletion)
{
  LOCKDUCHAIN;
  
  QList<CompletionTreeItemPointer> items;
  
  if (!m_duContext)
    return items;
  
  typedef QPair<Declaration*, int> DeclarationDepthPair;

  #warning FIXME: m_storedItems is never filled - can be removed? or used for optimization?
  if(!m_storedItems.isEmpty()) {
    items = m_storedItems;
  
  } else {
    if ( memberAccessOperation() == ClassMemberChoose ) {
      // get current class
      if ( ClassDeclaration * currentClass = dynamic_cast<ClassDeclaration*>(m_duContext->owner()) ) {
        // whether we want to show a list of overloadable functions
        // i.e. not after we have typed one of the keywords var,const or abstract
        bool showOverloadable = true;
        // whether we want to remove static functions from the overloadable list
        // i.e. after we have typed "public function"
        bool filterStatic = false;
        // whether we want to remove non-static functions from the overloadable list
        // i.e. after we have typed "public static function"
        bool filterNonStatic = false;
        // private functions are always removed from the overloadable list
        // but when we type "protected function" only protected functions may be shown
        bool filterPublic = false;

        {
          // add typical keywords for class member definitions
          QStringList modifiers = getMethodTokens(m_text);
          
          // don't add keywords when "function" was already typed
          bool addKeywords = !modifiers.contains("function");
          
          if ( currentClass->classModifier() == ClassDeclarationData::Abstract ) {
            // abstract is only allowed in abstract classes
            if ( modifiers.contains("abstract") ) {
              // don't show overloadable functions when we are defining an abstract function
              showOverloadable = false;
            } else if ( addKeywords ) {
              ADD_KEYWORD("abstract");
            }
          } else {
            // final is only allowed in non-abstract classes
            if ( addKeywords && !modifiers.contains("final") ) {
              ADD_KEYWORD("final");
            }
          }
          
          if ( modifiers.contains("private") ) {
            // overloadable functions must not be declared private
            showOverloadable = false;
          } else if ( modifiers.contains("protected") ) {
            // only show protected overloadable methods
            filterPublic = true;
          } else if ( addKeywords && !modifiers.contains("public") ) {
            ADD_KEYWORD("public");
            ADD_KEYWORD("protected");
            ADD_KEYWORD("private");
          }
          
          if ( modifiers.contains("static") ) {
            filterNonStatic = true;
          } else {
            if ( addKeywords ) {
              ADD_KEYWORD("static");
            } else {
              filterStatic = true;
            }
          }
          
          if ( addKeywords ) {
            ADD_KEYWORD("function");
          }
            
          if ( modifiers.isEmpty() ) {
            // var and const may not have any modifiers
            ADD_KEYWORD("var");
            ADD_KEYWORD("const");
          }
        }
        kDebug() << showOverloadable;
        // complete overloadable methods from parents
        if ( showOverloadable ) {
          // TODO: use m_duContext instead of ctx
          // overloadable choose is only possible inside classes which extend/implement others
          if ( currentClass->baseClassesSize() ) {
            DUContext* ctx = currentClass->internalContext();
            if ( !ctx ) {
              kDebug() << "invalid class context";
              return items;
            }
            QList<uint> alreadyImplemented;
            //TODO: always add __construct, __destruct and maby other magic functions
            // get all visible declarations and add inherited to the completion items
            foreach ( const DeclarationDepthPair& decl, ctx->allDeclarations(ctx->range().end, m_duContext->topContext(), false ) ) {
              if ( decl.first->isFunctionDeclaration() ) {
                ClassFunctionDeclaration *method = dynamic_cast<ClassFunctionDeclaration*>(decl.first);
                if ( method ) {
                  if ( decl.second == 0 ) {
                    // this function is already implemented
                    alreadyImplemented << decl.first->indexedIdentifier().index;
                    continue;
                  }
                  // skip already implemented functions
                  if ( alreadyImplemented.contains(decl.first->indexedIdentifier().index) ) {
                    continue;
                  }
                  // skip non-static functions when requested
                  if ( filterNonStatic && !method->isStatic() ) {
                    continue;
                  }
                  // skip static functions when requested
                  if ( filterStatic && method->isStatic() ) {
                    continue;
                  }
                  // always skip private functions
                  if ( method->accessPolicy() == Declaration::Private ) {
                    continue;
                  }
                  // skip public functions when requested
                  if ( filterPublic && method->accessPolicy() == Declaration::Public ) {
                    // make sure no non-public base methods are added
                    alreadyImplemented << decl.first->indexedIdentifier().index;
                    continue;
                  }
                  // skip final methods
                  if ( method->isFinal() ) {
                    // make sure no non-final base methods are added
                    alreadyImplemented << decl.first->indexedIdentifier().index;
                    continue;
                  }
                  // make sure we inherit or implement the base class of this method
                  if ( !method->context() || !method->context()->owner() ) {
                    kDebug() << "invalid parent context/owner:" << method->toString();
                    continue;
                  }
                  if ( !currentClass->isPublicBaseClass( dynamic_cast<ClassDeclaration*>(method->context()->owner()),
                                                          m_duContext->topContext() ) ) {
                    continue;
                  }
                  
                  ImplementationItem::HelperType itype;
                  if ( method->isAbstract() ) {
                    itype = ImplementationItem::Implement;
                  } else {
                    itype = ImplementationItem::Override;
                  }
                  
                  items << CompletionTreeItemPointer( new ImplementationItem( itype, DeclarationPointer(decl.first),
                                                      KDevelop::CodeCompletionContext::Ptr(this), decl.second ) );
                  // don't add identical items twice to the completion choices
                  alreadyImplemented << decl.first->indexedIdentifier().index;
                }
              }
            }
          }
        } else {
          kDebug() << "invalid owner declaration for overloadable completion";
        }
      }
    } else if ( m_expressionResult.type() ) {
      QList<DUContext*> containers = memberAccessContainers();
      kDebug() << "containers: " << containers.count();
      if( !containers.isEmpty() ) {
        // get the parent class when we are inside a method declaration
        ClassDeclaration* currentClass = 0;
        if ( m_duContext->owner() && m_duContext->owner()->isFunctionDeclaration() &&
             m_duContext->parentContext() && m_duContext->parentContext()->owner() ) {
          currentClass = dynamic_cast<ClassDeclaration*>(m_duContext->parentContext()->owner());
        }
        
        bool filterAbstract = memberAccessOperation() == StaticMemberAccess || memberAccessOperation() == MemberAccess;
        
        foreach(DUContext* ctx, containers) {
          ClassDeclaration* accessedClass = dynamic_cast<ClassDeclaration*>(ctx->owner());
          if (abort)
            return items;

          foreach( const DeclarationDepthPair& decl, ctx->allDeclarations(ctx->range().end, m_duContext->topContext(), false ) ) {
              //If we have StaticMemberAccess, which means A::Bla, show only static members, except if we're within a class that derives from the container
              ClassMemberDeclaration* classMember = dynamic_cast<ClassMemberDeclaration*>(decl.first);
              if(memberAccessOperation() != StaticMemberAccess) {
                if(classMember && classMember->isStatic())
                  continue; //Skip static class members when not doing static access
              } else {
                if(!classMember || !classMember->isStatic())
                  continue; //Skip static class members when not doing static access
              }
              
              // check access policy
              if ( classMember && accessedClass ) {
                // by default only show public declarations
                Declaration::AccessPolicy ap = Declaration::Public;
                if ( currentClass ) {
                  // if we are inside a class, we might want to show protected or private members
                  ClassDeclaration* memberClass = dynamic_cast<ClassDeclaration*>(classMember->context()->owner());
                  if ( memberClass ) {
                    if ( currentClass == accessedClass ) {
                      if ( currentClass == memberClass ) {
                        // we can show all members of the current class
                        ap = Declaration::Private;
                      } else if ( currentClass->isPublicBaseClass( memberClass, m_duContext->topContext() ) ) {
                        // we can show all but private members of ancestors of the current class
                        ap = Declaration::Protected;
                      }
                    } else if ( currentClass->isPublicBaseClass( accessedClass, m_duContext->topContext() )
                            && ( accessedClass == memberClass ||
                                 accessedClass->isPublicBaseClass( memberClass, m_duContext->topContext() ) ) )
                    {
                      // we can show all but private members of ancestors of the current class
                      ap = Declaration::Protected;
                    }
                  }
                }
                if ( ap < classMember->accessPolicy() ) {
                  continue;
                }
              }
              
              // filter abstract methods
              if ( filterAbstract ) {
                ClassFunctionDeclaration* method = dynamic_cast<ClassFunctionDeclaration*>(decl.first);
                if ( method && method->isAbstract() ) {
                  continue;
                }
              }
              
              if(!decl.first->identifier().isEmpty())
                items << CompletionTreeItemPointer( new NormalDeclarationCompletionItem( DeclarationPointer(decl.first), KDevelop::CodeCompletionContext::Ptr(this), decl.second ) );
            }
        }
      } else {
        kDebug() << "setContext: no container-type";
      }

    } else {
      //Show all visible declarations
      QSet<uint> existingIdentifiers;
      QList<DeclarationDepthPair> decls = m_duContext->allDeclarations(m_duContext->type() == DUContext::Class ? m_duContext->range().end : position, m_duContext->topContext());
      QListIterator<DeclarationDepthPair> i(decls);
      i.toBack();
      while (i.hasPrevious()) {
        DeclarationDepthPair decl = i.previous();
        Declaration* dec = decl.first;
        if (dec->kind() == Declaration::Instance) {
            if (existingIdentifiers.contains(dec->indexedIdentifier().index)) continue;
            existingIdentifiers.insert(dec->indexedIdentifier().index);
        }
        if (abort)
          return items;
        if (!isValidCompletionItem(dec)) continue;
        items << CompletionTreeItemPointer( new NormalDeclarationCompletionItem(DeclarationPointer(dec), KDevelop::CodeCompletionContext::Ptr(this), decl.second ) );
      }
      uint count = 0;
      const CodeModelItem* foundItems = 0;
      foreach (QSet<IndexedString> urlSets, completionFiles()) {
        foreach (IndexedString url, urlSets) {
            CodeModel::self().items(url, count, foundItems);
            for (uint i=0; i < count; ++i) {
                if (foundItems[i].kind == CodeModelItem::Class) {
                    foreach(TopDUContext* top, DUChain::self()->chainsForDocument(url)) {
                        if (m_duContext->imports(top)) continue;
                        if (top->language() != IndexedString("Php")) continue;
                        QList<Declaration*> decls = top->findDeclarations(foundItems[i].id);
                        foreach (Declaration* decl, decls) {
                            if (abort) return items;
                            if (!isValidCompletionItem(decl)) continue;
                            items << CompletionTreeItemPointer(new NormalDeclarationCompletionItem(DeclarationPointer(decl), KDevelop::CodeCompletionContext::Ptr(this)));
                        }
                    }
                }
            }
        }
      }

      kDebug() << "setContext: using all declarations visible:" << decls.size();
    }
  }

  ///Find all recursive function-calls that should be shown as call-tips
  CodeCompletionContext::Ptr parentContext(this);
  do {
    if (abort)
      return items;

    parentContext = parentContext->parentContext();
    if( parentContext ) {
      if( parentContext->memberAccessOperation() == CodeCompletionContext::FunctionCallAccess ) {
        if (!parentContext->memberAccessContainer().allDeclarationIds().isEmpty()) {
            Declaration* decl = parentContext->memberAccessContainer().allDeclarationIds().first().getDeclaration(m_duContext->topContext());
            if (!isValidCompletionItem(decl)) continue;
            items << CompletionTreeItemPointer(new NormalDeclarationCompletionItem(DeclarationPointer(decl), KDevelop::CodeCompletionContext::Ptr::staticCast(parentContext)));
        }
      } else {
        kDebug() << "parent-context has non function-call access type";
      }
    }
  } while( parentContext );

  return items;
}

inline bool CodeCompletionContext::isValidCompletionItem(Declaration* dec)
{
    static ClassDeclaration* exceptionDecl;
    if (!exceptionDecl) {
        QList<Declaration*> decs = dec->context()->findDeclarations(QualifiedIdentifier("Exception"));
        Q_ASSERT(decs.count() == 1);
        exceptionDecl = dynamic_cast<ClassDeclaration*>(decs.first());
        Q_ASSERT(exceptionDecl);
    }

    if ( m_memberAccessOperation == ExceptionChoose
          || m_memberAccessOperation == NewClassChoose
          || m_memberAccessOperation == InterfaceChoose
          || m_memberAccessOperation == ClassExtendsChoose ) {
      // filter current class
      if ( !m_forbiddenIdentifiers.isEmpty() && m_forbiddenIdentifiers.contains(dec->identifier().index()) ) {
        return false;
      }
      ClassDeclaration* classDec = dynamic_cast<ClassDeclaration*>(dec);
      // filter non-classes
      if ( !classDec ) {
        return false;
      }
      // show non-interface and non-abstract
      else if ( m_memberAccessOperation == NewClassChoose ) {
        return !(classDec->classModifier() & ClassDeclarationData::Abstract)
                  && classDec->classType() == ClassDeclarationData::Class;
      }
      // filter non-exception classes
      else if ( m_memberAccessOperation == ExceptionChoose ) {
          return classDec->equalQualifiedIdentifier(exceptionDecl)
                  || classDec->isPublicBaseClass(exceptionDecl, m_duContext->topContext());
      }
      // show interfaces
      else if ( m_memberAccessOperation == InterfaceChoose ) {
        return classDec->classType() == ClassDeclarationData::Interface;
      }
      // show anything but final classes and interfaces
      else if ( m_memberAccessOperation == ClassExtendsChoose ) {
        return !(classDec->classModifier() & ClassDeclarationData::Final)
                && classDec->classType() == ClassDeclarationData::Class;
      }
    }
    if (m_memberAccessOperation == ExceptionInstanceChoose) {
      if (dec->kind() != Declaration::Instance) return false;
      StructureType::Ptr structType = dec->type<StructureType>();
      if (!structType) return false;
      ClassDeclaration* classDec = dynamic_cast<ClassDeclaration*>(structType->declaration(dec->topContext()));
      if (!classDec) return false;
      return classDec->isPublicBaseClass(exceptionDecl, m_duContext->topContext());
    }
    
    return true;
}

QList<QSet<IndexedString> > CodeCompletionContext::completionFiles()
{
    QList<QSet<IndexedString> > ret;
    if (ICore::self()) {
        foreach (IProject* project, ICore::self()->projectController()->projects()) {
            ret << project->fileSet();
        }
    }
    return ret;
}

}
