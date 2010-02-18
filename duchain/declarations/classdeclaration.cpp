/***************************************************************************
 *   This file is part of KDevelop                                         *
 *   Copyright 2008 Milian Wolff <mail@milianw.de>                         *
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

#include "classdeclaration.h"

#include <language/duchain/duchainregister.h>
#include <completioncodemodel.h>

namespace Php {
REGISTER_DUCHAIN_ITEM(ClassDeclaration);

ClassDeclaration::ClassDeclaration(const ClassDeclaration& rhs)
        : KDevelop::ClassDeclaration(*new ClassDeclarationData(*rhs.d_func()))
{
    setSmartRange(rhs.smartRange(), DocumentRangeObject::DontOwn);
}

ClassDeclaration::ClassDeclaration(const KDevelop::SimpleRange& range, KDevelop::DUContext* context)
        : KDevelop::ClassDeclaration(*new ClassDeclarationData, range, context)
{
    d_func_dynamic()->setClassId(this);
    if (context) {
        setContext(context);
    }
}

ClassDeclaration::ClassDeclaration(ClassDeclarationData& data)
        : KDevelop::ClassDeclaration(data)
{
}

ClassDeclaration::ClassDeclaration(ClassDeclarationData& data, const KDevelop::SimpleRange& range, KDevelop::DUContext* context)
        : KDevelop::ClassDeclaration(data, range, context)
{
}

ClassDeclaration::~ClassDeclaration()
{
}

KDevelop::Declaration* ClassDeclaration::clonePrivate() const
{
    return new ClassDeclaration(*this);
}

QString ClassDeclaration::prettyName() const
{
    return d_func()->prettyName.str();
}

void ClassDeclaration::setPrettyName( const QString& name )
{
    bool wasInSymbolTable = d_func()->m_inSymbolTable;
    setInSymbolTable(false);
    d_func_dynamic()->prettyName = KDevelop::IndexedString(name);
    setInSymbolTable(wasInSymbolTable);
}

QString ClassDeclaration::toString() const
{
  QString ret;
  switch ( classModifier() ) {
    case ClassDeclarationData::None:
      //nothing
      break;
    case ClassDeclarationData::Abstract:
      ret += "abstract ";
      break;
    case ClassDeclarationData::Final:
      ret += "final ";
      break;
  }
  switch ( classType() ) {
    case ClassDeclarationData::Class:
      ret += "class ";
      break;
    case ClassDeclarationData::Interface:
      ret += "interface ";
      break;
    case ClassDeclarationData::Union:
      ret += "union ";
      break;
    case ClassDeclarationData::Struct:
      ret += "struct ";
      break;
  }
  return ret + prettyName();
}

void ClassDeclaration::setInSymbolTable(bool inSymbolTable)
{
    if(!d_func()->prettyName.isEmpty()) {
        if(!d_func()->m_inSymbolTable && inSymbolTable) {
            CompletionCodeModel::self().addItem(url(), qualifiedIdentifier(), d_func_dynamic()->prettyName, CompletionCodeModelItem::Unknown);
        } else if(d_func()->m_inSymbolTable && !inSymbolTable) {
            CompletionCodeModel::self().removeItem(url(), qualifiedIdentifier());
        }
    }
    KDevelop::ClassDeclaration::setInSymbolTable(inSymbolTable);
}

}
