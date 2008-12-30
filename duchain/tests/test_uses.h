/* This file is part of KDevelop
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

#ifndef TESTUSES_H
#define TESTUSES_H

#include "duchain/tests/duchaintestbase.h"

namespace Php
{
class TestUses : public DUChainTestBase
{
  Q_OBJECT

public:
  TestUses();

private slots:
  void newObject();
  void functionCall();
  void memberFunctionCall();
  void memberVariable();
  void variable();
  void varInString();
  void memberVarInString();
  void memberFunctionInString();
  void variableTwoDeclarations();
  void variableTwoDeclarationsInFunction();
  void classExtends();
  void classImplements();
  void classImplementsMultiple();
  void interfaceExtends();
  void interfaceExtendsMultiple();
  void staticMemberFunctionCall();
  void staticMemberVariable();
  void constant();
  void classConstant();
  void classParent();
  void classSelf();
  void objectWithClassName();
  void classAndConstWithSameName();
  void classAndFunctionWithSameName();
  void constAndVariableWithSameName();
};

}

#endif
