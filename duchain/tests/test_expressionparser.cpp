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

#include "test_expressionparser.h"

#include <QtTest/QtTest>

#include <language/duchain/parsingenvironment.h>
#include <language/duchain/duchain.h>
#include <language/duchain/duchainlock.h>
#include <language/duchain/topducontext.h>
#include <language/duchain/types/functiontype.h>
#include <language/duchain/types/structuretype.h>
#include <language/duchain/types/integraltype.h>

#include "expressionparser.h"

using namespace KTextEditor;
using namespace KDevelop;

QTEST_MAIN(Php::TestExpressionParser)

namespace Php
{

TestExpressionParser::TestExpressionParser()
{
}


void TestExpressionParser::newClass()
{
    //                 0         1         2         3         4         5         6         7
    //                 01234567890123456789012345678901234567890123456789012345678901234567890123456789
    QByteArray method("<? class A { function foo() {} } $i = new A();");

    TopDUContext* top = parse(method, DumpNone);
    DUChainWriteLocker lock(DUChain::lock());

    ExpressionParser p(false, true);
    ExpressionEvaluationResult res = p.evaluateType(QByteArray("$i"), DUContextPointer(top));
    QVERIFY(res.type());
    QCOMPARE(StructureType::Ptr::staticCast(res.type())->qualifiedIdentifier(), QualifiedIdentifier("A"));


    release(top);
}
void TestExpressionParser::memberVariable()
{
    //                 0         1         2         3         4         5         6         7
    //                 01234567890123456789012345678901234567890123456789012345678901234567890123456789
    QByteArray method("<? class A { /** @var A **/ public $foo; } $i = new A();");

    TopDUContext* top = parse(method, DumpNone);
    DUChainWriteLocker lock(DUChain::lock());
    
    ExpressionParser p(false, true);
    ExpressionEvaluationResult res = p.evaluateType(QByteArray("$i->foo"), DUContextPointer(top));
    QVERIFY(res.type());
    QCOMPARE(res.allDeclarations().count(), 1);
    QCOMPARE(res.allDeclarations().first(), top->childContexts().first()->localDeclarations().first());
    QCOMPARE(StructureType::Ptr::staticCast(res.type())->qualifiedIdentifier(), QualifiedIdentifier("A"));

    release(top);
}
void TestExpressionParser::memberFunction()
{
    //                 0         1         2         3         4         5         6         7
    //                 01234567890123456789012345678901234567890123456789012345678901234567890123456789
    QByteArray method("<? class A { public function foo() {} } $i = new A();");

    TopDUContext* top = parse(method, DumpAll);
    DUChainWriteLocker lock(DUChain::lock());

    ExpressionParser p(false, true);
    ExpressionEvaluationResult res = p.evaluateType(QByteArray("$i->foo"), DUContextPointer(top));
    QVERIFY(res.type());
    QVERIFY(FunctionType::Ptr::dynamicCast(res.type()));
    QCOMPARE(res.allDeclarations().first(), top->childContexts().first()->localDeclarations().first());
    
    release(top);
}
void TestExpressionParser::globalFunction()
{
    //                 0         1         2         3         4         5         6         7
    //                 01234567890123456789012345678901234567890123456789012345678901234567890123456789
    QByteArray method("<? function foo() {}");

    TopDUContext* top = parse(method, DumpNone);
    DUChainWriteLocker lock(DUChain::lock());

    ExpressionParser p(false, true);
    ExpressionEvaluationResult res = p.evaluateType(QByteArray("foo"), DUContextPointer(top));
    QVERIFY(res.type());    
    QVERIFY(FunctionType::Ptr::dynamicCast(res.type()));
    QCOMPARE(res.allDeclarations().count(), 1);
    QCOMPARE(res.allDeclarations().first(), top->localDeclarations().first());
    
    release(top);
}

void TestExpressionParser::chainCall()
{
    //                 0         1         2         3         4         5         6         7
    //                 01234567890123456789012345678901234567890123456789012345678901234567890123456789
    QByteArray method("<? class A { function foo() { return $this; } } $a = new A();");

    TopDUContext* top = parse(method, DumpAll);
    DUChainWriteLocker lock(DUChain::lock());

    FunctionType::Ptr fn = top->childContexts().first()->localDeclarations().first()->type<FunctionType>();
    QVERIFY(fn);
    QVERIFY(fn->returnType()->equals(top->localDeclarations().first()->abstractType().unsafeData()));

    ExpressionParser p(false, true);
    ExpressionEvaluationResult res = p.evaluateType(QByteArray("$a->foo()"), DUContextPointer(top));
    QVERIFY(res.type());
    QVERIFY(res.type()->equals(top->localDeclarations().first()->abstractType().unsafeData()));

    res = p.evaluateType(QByteArray("$a->foo()->foo()->foo()"), DUContextPointer(top));
    QVERIFY(res.type());
    QVERIFY(res.type()->equals(top->localDeclarations().first()->abstractType().unsafeData()));

    release(top);
}
void TestExpressionParser::thisObject()
{
    //                 0         1         2         3         4         5         6         7
    //                 01234567890123456789012345678901234567890123456789012345678901234567890123456789
    QByteArray method("<? class A { public function foo() {} }");

    TopDUContext* top = parse(method, DumpNone);
    DUChainWriteLocker lock(DUChain::lock());

    DUContext* funContext = top->childContexts().first()->localDeclarations().first()->internalContext();
    ExpressionParser p(false, true);
    ExpressionEvaluationResult res = p.evaluateType(QByteArray("$this"), DUContextPointer(funContext));
    QCOMPARE(res.allDeclarations().count(), 1);
    QCOMPARE(res.allDeclarations().first(), top->localDeclarations().first());
    QVERIFY(res.type());
    QVERIFY(StructureType::Ptr::dynamicCast(res.type()));
    QCOMPARE(StructureType::Ptr::dynamicCast(res.type())->declaration(top), top->localDeclarations().first());

    release(top);
}

void TestExpressionParser::integralTypes()
{
    //                 0         1         2         3         4         5         6         7
    //                 01234567890123456789012345678901234567890123456789012345678901234567890123456789
    QByteArray method("<? $foo=1;");

    TopDUContext* top = parse(method, DumpNone);
    DUChainWriteLocker lock(DUChain::lock());

    ExpressionParser p(false, true);
    ExpressionEvaluationResult res = p.evaluateType(QByteArray("123"), DUContextPointer(top));
    QVERIFY(IntegralType::Ptr::dynamicCast(res.type()));
    QCOMPARE(IntegralType::Ptr::staticCast(res.type())->dataType(), static_cast<uint>(IntegralType::TypeInt));

    res = p.evaluateType(QByteArray("\"asdf\""), DUContextPointer(top));
    QVERIFY(IntegralType::Ptr::dynamicCast(res.type()));
    QCOMPARE(IntegralType::Ptr::staticCast(res.type())->dataType(), static_cast<uint>(IntegralType::TypeString));

    res = p.evaluateType(QByteArray("\"as $foo df\""), DUContextPointer(top));
    QVERIFY(IntegralType::Ptr::dynamicCast(res.type()));
    QCOMPARE(IntegralType::Ptr::staticCast(res.type())->dataType(), static_cast<uint>(IntegralType::TypeString));

    res = p.evaluateType(QByteArray("'asdf'"), DUContextPointer(top));
    QVERIFY(IntegralType::Ptr::dynamicCast(res.type()));
    QCOMPARE(IntegralType::Ptr::staticCast(res.type())->dataType(), static_cast<uint>(IntegralType::TypeString));

    release(top);
}

}

#include "test_expressionparser.moc"