<?php

use Kucil\Utilities\StringUtils\Enums\ToArrayOptions;
use Kucil\Utilities\StringUtils;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class StringUtilsTest extends TestCase
{
    #[Test]
    public function testIsStr(): void
    {
        $this->assertFalse(StringUtils::isStr(), 'test-1');
        $this->assertFalse(StringUtils::isStr(null), 'test-2');
        $this->assertFalse(StringUtils::isStr(true), 'test-3');
        $this->assertFalse(StringUtils::isStr(99.5), 'test-4');
        $this->assertFalse(StringUtils::isStr(100), 'test-5');
        $this->assertFalse(StringUtils::isStr([]), 'test-6');
        $this->assertFalse(StringUtils::isStr(new stdClass), 'test-7');
        $this->assertTrue(StringUtils::isStr('hello world'), 'test-8');

        return;
    }



    #[Test]
    public function testIsString(): void
    {
        $this->assertFalse(StringUtils::isString(), 'test-1');
        $this->assertFalse(StringUtils::isString(null), 'test-2');
        $this->assertFalse(StringUtils::isString(true), 'test-3');
        $this->assertFalse(StringUtils::isString(99.5), 'test-4');
        $this->assertFalse(StringUtils::isString(100), 'test-5');
        $this->assertFalse(StringUtils::isString([]), 'test-6');
        $this->assertFalse(StringUtils::isString(new stdClass), 'test-7');
        $this->assertTrue(StringUtils::isString('hello world'), 'test-8');

        return;
    }



    #[Test]
    public function testIsWhitespaceOnly(): void
    {
        $this->assertNull(StringUtils::isWhitespaceOnly(), 'test-1');
        $this->assertNull(StringUtils::isWhitespaceOnly(null), 'test-2');
        $this->assertFalse(StringUtils::isWhitespaceOnly('Hello World'), 'test-3');
        $this->assertTrue(StringUtils::isWhitespaceOnly(''), 'test-4');
        $this->assertTrue(StringUtils::isWhitespaceOnly(' '), 'test-5');
        $this->assertTrue(StringUtils::isWhitespaceOnly('   '), 'test-6');
        $this->assertTrue(StringUtils::isWhitespaceOnly('
        '), 'test-7');

        return;
    }



    #[Test]
    public function testIsNumberOnly(): void
    {
        $this->assertNull(StringUtils::isNumberOnly(), 'test-1');
        $this->assertNull(StringUtils::isNumberOnly(null), 'test-2');
        $this->assertFalse(StringUtils::isNumberOnly(''), 'test-3');
        $this->assertFalse(StringUtils::isNumberOnly('hello world'), 'test-4');
        $this->assertFalse(StringUtils::isNumberOnly('123 hello world'), 'test-5');
        $this->assertTrue(StringUtils::isNumberOnly('123'), 'test-6');

        return;
    }



    #[Test]
    public function testIsAlphabetOnly(): void
    {
        $this->assertNull(StringUtils::isAlphabetOnly(), 'test-1');
        $this->assertNull(StringUtils::isAlphabetOnly(null), 'test-2');
        $this->assertFalse(StringUtils::isAlphabetOnly(''), 'test-3');
        $this->assertFalse(StringUtils::isAlphabetOnly('12345'), 'test-4');
        $this->assertTrue(StringUtils::isAlphabetOnly('abcdf'), 'test-5');

        return;
    }



    #[Test]
    public function testLength(): void
    {
        $this->assertNull(StringUtils::length(), 'test-1');
        $this->assertNull(StringUtils::length(null), 'test-2');
        $this->assertSame(0, StringUtils::length(''), 'test-3');
        $this->assertSame(3, StringUtils::length('abc'), 'test-4');
        $this->assertSame(5, StringUtils::length(' abc '), 'test-5');

        return;
    }



    #[Test]
    public function testLower(): void
    {
        $this->assertNull(StringUtils::lower(), 'test-1');
        $this->assertNull(StringUtils::lower(null), 'test-2');
        $this->assertSame('', StringUtils::lower(''), 'test-3');
        $this->assertSame('123', StringUtils::lower('123'), 'test-4');
        $this->assertSame('123abc', StringUtils::lower('123abc'), 'test-5');
        $this->assertSame('123abc', StringUtils::lower('123AbC'), 'test-6');
        $this->assertSame('abc', StringUtils::lower('aBC'), 'test-7');

        return;
    }


    
    #[Test]
    public function testUpper(): void
    {
        $this->assertNull(StringUtils::upper(), 'test-1');
        $this->assertNull(StringUtils::upper(null), 'test-2');
        $this->assertSame('', StringUtils::upper(''), 'test-3');
        $this->assertSame('123', StringUtils::upper('123'), 'test-4');
        $this->assertSame('123ABC', StringUtils::upper('123abc'), 'test-5');
        $this->assertSame('123ABC', StringUtils::upper('123AbC'), 'test-6');
        $this->assertSame('ABC', StringUtils::upper('aBC'), 'test-7');

        return;
    }


    
    #[Test]
    public function testFirstCharCapitalize(): void
    {
        $this->assertNull(StringUtils::firstCharCapitalize(), 'test-1');
        $this->assertNull(StringUtils::firstCharCapitalize(null), 'test-2');
        $this->assertSame('', StringUtils::firstCharCapitalize(''), 'test-3');
        $this->assertSame('Abc def', StringUtils::firstCharCapitalize('abc def'), 'test-4');
        $this->assertSame('Abc dEf', StringUtils::firstCharCapitalize('Abc dEf'), 'test-5');
        $this->assertSame('123abc', StringUtils::firstCharCapitalize('123abc'), 'test-6');

        return;
    }


    
    #[Test]
    public function testTitle(): void
    {
        $this->assertNull(StringUtils::title(), 'test-1');
        $this->assertNull(StringUtils::title(null), 'test-2');
        $this->assertSame('', StringUtils::title(''), 'test-3');
        $this->assertSame('Abc Def', StringUtils::title('abc def'), 'test-4');
        $this->assertSame('Abc DEf', StringUtils::title('Abc dEf'), 'test-5');
        $this->assertSame('123abc', StringUtils::title('123abc'), 'test-6');

        return;
    }


    
    #[Test]
    public function testCamel(): void
    {
        $this->assertNull(StringUtils::camel(), 'test-1');
        $this->assertNull(StringUtils::camel(null), 'test-2');
        $this->assertSame('', StringUtils::camel(''), 'test-3');
        $this->assertSame('abcDef', StringUtils::camel('abc def'), 'test-4');
        $this->assertSame('abcDEf', StringUtils::camel('Abc dEf'), 'test-5');
        $this->assertSame('123abc', StringUtils::camel('123abc'), 'test-6');
        $this->assertSame('AbcDEf', StringUtils::camel('Abc dEf', true), 'test-7');

        return;
    }


    
    #[Test]
    public function testReplace(): void
    {
        $this->assertNull(StringUtils::replace(), 'test-1');
        $this->assertNull(StringUtils::replace(null, null, null), 'test-2');
        $this->assertSame('hello world', StringUtils::replace('hello world', '', ''), 'test-3');
        $this->assertSame('hello-world', StringUtils::replace('hello world', ' ', '-'), 'test-4');
        $this->assertSame('hello php', StringUtils::replace('hello world', 'world', 'php'), 'test-5');
        $this->assertSame('hello world', StringUtils::replace('hello world', 'World', 'php', true), 'test-6');

        return;
    }


    
    #[Test]
    public function testContains(): void
    {
        $this->assertNull(StringUtils::contains(), 'test-1');
        $this->assertNull(StringUtils::contains(null, null), 'test-2');
        $this->assertTrue(StringUtils::contains('hello world', ''), 'test-3');
        $this->assertTrue(StringUtils::contains('hello world', 'h'), 'test-4');
        $this->assertTrue(StringUtils::contains('hello world', 'hell'), 'test-5');
        $this->assertTrue(StringUtils::contains('hello world', 'HeLl'), 'test-5');
        $this->assertFalse(StringUtils::contains('hello world', 'HeLl', true), 'test-5');

        return;
    }


    
    #[Test]
    public function testRemoveWhitespace(): void
    {
        $this->assertNull(StringUtils::removeWhitespace(), 'test-1');
        $this->assertNull(StringUtils::removeWhitespace(null, null, null), 'test-2');
        $this->assertSame('', StringUtils::removeWhitespace(''), 'test-3');
        $this->assertSame('helloworld', StringUtils::removeWhitespace('hello world'), 'test-4');
        $this->assertSame('helloworld', StringUtils::removeWhitespace('hello         world'), 'test-5');

        return;
    }



    #[Test]
    public function testStarts(): void
    {
        $this->assertNull(StringUtils::starts(), 'test-1');
        $this->assertNull(StringUtils::starts(null, null, null), 'test-2');
        $this->assertTrue(StringUtils::starts('hello world', ''), 'test-3');
        $this->assertTrue(StringUtils::starts('hello world', 'he'), 'test-4');
        $this->assertFalse(StringUtils::starts('hello world', 'hex'), 'test-5');
        $this->assertFalse(StringUtils::starts('hello world', 'He', true), 'test-6');

        return;
    }



    #[Test]
    public function testEnds(): void
    {
        $this->assertNull(StringUtils::ends(), 'test-1');
        $this->assertNull(StringUtils::ends(null, null, null), 'test-2');
        $this->assertTrue(StringUtils::ends('hello world', ''), 'test-3');
        $this->assertTrue(StringUtils::ends('hello world', 'ld'), 'test-4');
        $this->assertFalse(StringUtils::ends('hello world', 'lld'), 'test-5');
        $this->assertFalse(StringUtils::ends('hello world', 'Ld', true), 'test-6');

        return;
    }


    
    #[Test]
    public function testToBool(): void
    {
        $this->assertNull(StringUtils::toBool(), 'test-1');
        $this->assertNull(StringUtils::toBool(null), 'test-2');
        $this->assertFalse(StringUtils::toBool('false'), 'test-3');
        $this->assertFalse(StringUtils::toBool('False'), 'test-4');
        $this->assertFalse(StringUtils::toBool('FALSE'), 'test-5');
        $this->assertTrue(StringUtils::toBool('true'), 'test-6');
        $this->assertTrue(StringUtils::toBool('True'), 'test-7');
        $this->assertTrue(StringUtils::toBool('TRUE'), 'test-8');

        return;
    }


    
    #[Test]
    public function testToBoolean(): void
    {
        $this->assertNull(StringUtils::toBoolean(), 'test-1');
        $this->assertNull(StringUtils::toBoolean(null), 'test-2');
        $this->assertNull(StringUtils::toBoolean(''), 'test-3');
        $this->assertNull(StringUtils::toBoolean('asldfkjklsadf'), 'test-4');
        $this->assertFalse(StringUtils::toBoolean('false'), 'test-5');
        $this->assertFalse(StringUtils::toBoolean('False'), 'test-6');
        $this->assertFalse(StringUtils::toBoolean('FALSE'), 'test-7');
        $this->assertTrue(StringUtils::toBoolean('true'), 'test-8');
        $this->assertTrue(StringUtils::toBoolean('True'), 'test-9');
        $this->assertTrue(StringUtils::toBoolean('TRUE'), 'test-10');

        return;
    }



    #[Test]
    public function testToFlt(): void
    {
        $this->assertNull(StringUtils::toFlt(), 'test-1');
        $this->assertNull(StringUtils::toFlt(null), 'test-2');
        $this->assertNull(StringUtils::toFlt(''), 'test-3');
        $this->assertNull(StringUtils::toFlt('abc'), 'test-4');
        $this->assertNull(StringUtils::toFlt('abc123'), 'test-5');
        $this->assertSame((float) 99, StringUtils::toFlt('99'), 'test-6');
        $this->assertSame((float) 99.5, StringUtils::toFlt('99.5'), 'test-7');
        $this->assertSame((float) -99.5, StringUtils::toFlt('-99.5'), 'test-8');
        $this->assertNull(StringUtils::toFlt('-99.5.7'), 'test-9');

        return;
    }



    #[Test]
    public function testToFloat(): void
    {
        $this->assertNull(StringUtils::toFloat(), 'test-1');
        $this->assertNull(StringUtils::toFloat(null), 'test-2');
        $this->assertNull(StringUtils::toFloat(''), 'test-3');
        $this->assertNull(StringUtils::toFloat('abc'), 'test-4');
        $this->assertNull(StringUtils::toFloat('abc123'), 'test-5');
        $this->assertSame((float) 99, StringUtils::toFloat('99'), 'test-6');
        $this->assertSame((float) 99.5, StringUtils::toFloat('99.5'), 'test-7');
        $this->assertSame((float) -99.5, StringUtils::toFloat('-99.5'), 'test-8');
        $this->assertNull(StringUtils::toFloat('-99.5.7'), 'test-9');

        return;
    }



    #[Test]
    public function testToInt(): void
    {
        $this->assertNull(StringUtils::toInt(), 'test-1');
        $this->assertNull(StringUtils::toInt(null), 'test-2');
        $this->assertNull(StringUtils::toInt(''), 'test-3');
        $this->assertNull(StringUtils::toInt('abc'), 'test-4');
        $this->assertNull(StringUtils::toInt('abc123'), 'test-5');
        $this->assertSame((int) 99, StringUtils::toInt('99'), 'test-6');
        $this->assertSame((int) 99.5, StringUtils::toInt('99.5'), 'test-7');
        $this->assertSame((int) -99.5, StringUtils::toInt('-99.5'), 'test-8');
        $this->assertNull(StringUtils::toInt('-99.5.7'), 'test-9');

        return;
    }



    #[Test]
    public function testToArrByLength(): void
    {
        $this->assertNull(StringUtils::toArrByLength(), 'test-1');
        $this->assertNull(StringUtils::toArrByLength(null, null), 'test-2');
        $this->assertNull(StringUtils::toArrByLength(''), 'test-3');
        $this->assertNull(StringUtils::toArrByLength('abc', 4), 'test-4');
        $this->assertSame(['a', 'b', 'c', ' ', 'd', 'e', 'f'], StringUtils::toArrByLength('abc def'), 'test-5');
        $this->assertSame(['ab', 'c ', 'de', 'f'], StringUtils::toArrByLength('abc def', 2), 'test-6');
        $this->assertSame(['abc', ' de'], StringUtils::toArrByLength('abc de', 3), 'test-7');

        return;
    }



    #[Test]
    public function testToArrayByLength(): void
    {
        $this->assertNull(StringUtils::toArrayByLength(), 'test-1');
        $this->assertNull(StringUtils::toArrayByLength(null, null), 'test-2');
        $this->assertNull(StringUtils::toArrayByLength(''), 'test-3');
        $this->assertNull(StringUtils::toArrayByLength('abc', 4), 'test-4');
        $this->assertSame(['a', 'b', 'c', ' ', 'd', 'e', 'f'], StringUtils::toArrayByLength('abc def'), 'test-5');
        $this->assertSame(['ab', 'c ', 'de', 'f'], StringUtils::toArrayByLength('abc def', 2), 'test-6');
        $this->assertSame(['abc', ' de'], StringUtils::toArrayByLength('abc de', 3), 'test-7');

        return;
    }


    
    #[Test] 
    public function testToArrBySptr(): void
    {
        $this->assertNull(StringUtils::toArrBySptr(), 'test-1');
        $this->assertNull(StringUtils::toArrBySptr(null, null, null), 'test-2');
        $this->assertNull(StringUtils::toArrBySptr('', ''), 'test-3');
        $this->assertSame(['abc', 'def', 'ghi'], StringUtils::toArrBySptr('abc def ghi', ' '), 'test-4');
        $this->assertSame(['users', '1'], StringUtils::toArrBySptr('users/1', '/'), 'test-5');

        return;
    }



    #[Test] 
    public function testToArrayBySeparator(): void
    {
        $this->assertNull(StringUtils::toArrayBySeparator(), 'test-1');
        $this->assertNull(StringUtils::toArrayBySeparator(null, null, null), 'test-2');
        $this->assertNull(StringUtils::toArrayBySeparator('', ''), 'test-3');
        $this->assertSame(['abc', 'def', 'ghi'], StringUtils::toArrayBySeparator('abc def ghi', ' '), 'test-4');
        $this->assertSame(['users', '1'], StringUtils::toArrayBySeparator('users/1', '/'), 'test-5');

        return;
    }



    #[Test]
    public function testToArray(): void
    {
        $this->assertNull(StringUtils::toArray(), 'test-1');
        $this->assertNull(StringUtils::toArray(null, null, null), 'test-2');
        $this->assertSame(StringUtils::toArrayBySeparator('abc def ghi', ' '), StringUtils::toArray('abc def ghi', [' '], ToArrayOptions::BY_SEPARATOR), 'test-3');
        $this->assertSame(StringUtils::toArrayBySeparator('users/1', '/'), StringUtils::toArray('users/1', ['/'], ToArrayOptions::BY_SEPARATOR), 'test-4');
        $this->assertSame(StringUtils::toArrayByLength('abc'), StringUtils::toArray('abc', [1], ToArrayOptions::BY_LENGTH), 'test-5');

        return;
    }
}
