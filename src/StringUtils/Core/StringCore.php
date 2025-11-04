<?php

namespace Kucil\Utilities\StringUtils\Core;

use Kucil\Utilities\StringUtils\Contracts\StringInterface;
use Kucil\Utilities\StringUtils\Enums\SliceOptions;
use Kucil\Utilities\StringUtils\Enums\ToArrayOptions;

use function ctype_alpha;
use function explode;
use function is_string;
use function str_ireplace;
use function str_replace;
use function str_contains;
use function str_starts_with;
use function str_ends_with;
use function str_split;
use function preg_match;
use function strlen;
use function strtolower;
use function strtoupper;
use function ucfirst;
use function lcfirst;
use function ucwords;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
abstract class StringCore implements StringInterface
{
    /**
     * @see StringUtilsTest::testIsStr()
     * 
     * 
     * 
     */
    public static function isStr(mixed $string = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        $result = is_string($string);
        
        return $result;
    }



    /**
     * @see StringUtilsTest::testIsString()
     * 
     * 
     * 
     */
    public static function isString(mixed $string = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        $result = self::isStr($string);

        return $result;
    }



    /**
     * @see StringUtilsTest::testIsWhitespaceOnly()
     * 
     * 
     * 
     */
    public static function isWhitespaceOnly(?string $string = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }

        $result = preg_match('/^\s*$/', $string) === 1;

        return $result;
    }



    /**
     * @see StringUtilsTest::testIsNumberOnly()
     * 
     * 
     * 
     */
    public static function isNumberOnly(?string $string = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }

        $result = is_numeric($string) && (string)(float)$string === (string)+$string;

        return $result;
    }



    /**
     * @see StringUtilsTest::testIsAlphabetOnly()
     * 
     * 
     * 
     */
    public static function isAlphabetOnly(?string $string = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }

        $result = ctype_alpha($string);

        return $result;
    }



    /**
     * @see StringUtilsTest::testLength()
     * 
     * 
     * 
     */
    public static function length(?string $string = null): ?int
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }

        $result = strlen($string);

        return $result;
    }



    /**
     * @see StringUtilsTest::testLower()
     * 
     * 
     * 
     */
    public static function lower(?string $string = null): ?string
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }

        $result = strtolower($string);

        return $result;
    }



    /**
     * @see StringUtilsTest::testUpper()
     * 
     * 
     * 
     */
    public static function upper(?string $string = null): ?string
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }
        
        $result = strtoupper($string);

        return $result;
    }



    /**
     * @see StringUtilsTest::testFirstCharCapitalize()
     * 
     * 
     * 
     */
    public static function firstCharCapitalize(?string $string = null): ?string
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }
        
        $result = ucfirst($string);

        return $result;
    }



    /**
     * @see StringUtilsTest::testTitle()
     * 
     * 
     * 
     */
    public static function title(?string $string = null): ?string
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }
        
        $result = ucwords($string);
        
        return $result;
    }



    /**
     * @see StringUtilsTest::testCamel()
     * 
     * 
     * 
     */
    public static function camel(?string $string = null, ?bool $firstCharCapitalize = false): ?string
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null || $firstCharCapitalize === null) {
            return $result;
        }

        $string = self::replace($string, '-', ' ');
        $string = self::replace($string, '_', ' ');
        $string = self::replace($string, '.', ' ');

        $string = self::title($string);

        if (!$firstCharCapitalize) {
            $string = lcfirst($string);
        }

        $result = self::replace($string, ' ', '');
        
        return $result;
    }



    /**
     * @see StringUtilsTest::testReplace()
     * 
     * 
     * 
     */
    public static function replace(?string $string = null, ?string $search = null, ?string $replace = null, ?bool $sensitiveCase = false): ?string
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null || $search === null || $replace === null || $sensitiveCase === null) {
            return $result;
        }

        $result = match ($sensitiveCase) {
            false => str_ireplace($search, $replace, $string),
            true => str_replace($search, $replace, $string)
        };
        
        return $result;
    }



    /**
     * @see StringUtilsTest::testContains()
     * 
     * 
     * 
     */
    public static function contains(?string $string = null, ?string $search = null, ?bool $sensitiveCase = false): ?bool
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }

        if (!$sensitiveCase) {
            $string = self::lower($string);
            $search = self::lower($search);
        }
        
        $result = str_contains($string, $search);

        return $result;
    }



    /**
     * @see StringUtilsTest::testRemoveWhitespace()
     * 
     * 
     * 
     */
    public static function removeWhitespace(?string $string = null): ?string
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null) {
            return $result;
        }

        $result = self::replace($string, ' ', '');

        return $result;
    }



    /**
     * @see StringUtilsTest::testStarts()
     * 
     * 
     * 
     */
    public static function starts(?string $string = null, ?string $search = null, ?bool $sensitiveCase = false): ?bool
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null || $search === null || $sensitiveCase === null) {
            return $result;
        }

        if (!$sensitiveCase) {
            $string = self::lower($string);
            $search = self::lower($search);
        }

        $result = str_starts_with($string, $search);

        return $result;
    }



    /**
     * @see StringUtilsTest::testEnds()
     * 
     * 
     * 
     */
    public static function ends(?string $string = null, ?string $search = null, ?bool $sensitiveCase = false): ?bool
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null || $search === null || $sensitiveCase === null) {
            return $result;    
        }

        if (!$sensitiveCase) {
            $string = self::lower($string);
            $search = self::lower($search);
        }

        $result = str_ends_with($string, $search);
        
        return $result;
    }



    /**
     * @see StringUtilsTest::testSliceLeft()
     * 
     * 
     * 
     */
    public static function sliceLeft(?string $string = null, ?array $chars = null): ?string
    {
        # DATA
        $result = null;
        $validChars = [];


        # CODE
        if ($string === null || $chars === null || empty($chars)) {
            return $result;
        }

        foreach ($chars as $v) {
            if (is_string($v)) {
                $validChars[] = $v;
            }

            continue;
        }

        if (!empty($validChars)) {
            $validChars = implode('', $validChars);

            $result = ltrim($string, $validChars);
        }

        return $result;
    }



    /**
     * @see StringUtilsTest::testSliceRight()
     * 
     * 
     * 
     */
    public static function sliceRight(?string $string = null, ?array $chars = null): ?string
    {
        # DATA
        $result = null;
        $validChars = [];


        # CODE
        if ($string === null || $chars === null || empty($chars)) {
            return $result;
        }

        foreach ($chars as $v) {
            if (is_string($v)) {
                $validChars[] = $v;
            }

            continue;
        }

        if (!empty($validChars)) {
            $validChars = implode('', $validChars);

            $result = rtrim($string, $validChars);
        }

        return $result;
    }



    /**
     * @see StringUtilsTest::testSliceAll()
     * 
     * 
     * 
     */
    public static function sliceAll(?string $string = null, ?array $chars = null): ?string
    {
        # DATA
        $result = null;
        $validChars = [];


        # CODE
        if ($string === null || $chars === null || empty($chars)) {
            return $result;
        }

        foreach ($chars as $v) {
            if (is_string($v)) {
                $validChars[] = $v;
            }

            continue;
        }

        if (!empty($validChars)) {
            $validChars = implode('', $validChars);

            $result = trim($string, $validChars);
        }

        return $result;
    }



    public static function slice(?string $string = null, ?array $chars = null, ?SliceOptions $type = SliceOptions::ALL): ?string
    {
        # DATA
        $result = null;
        $cond1 = $type !== null;

        # CODE
        if ($type === null) {
            return $result;
        }

        $result = match ($type) {
            SliceOptions::LEFT => self::sliceLeft($string, $chars),
            SliceOptions::RIGHT => self::sliceRight($string, $chars),
            SliceOptions::ALL => self::sliceAll($string, $chars)
        };

        return $result;
    }



    /**
     * @see StringUtilsTest::testToBool()
     * 
     * 
     * 
     */
    public static function toBool(?string $string = null): ?bool
    {
        # DATA
        $result = null;
        $stringBooleanMap = require __DIR__ . '/../Mappings/stringBooleanMap.php';

        # CODE
        if ($string === null || !in_array($string, $stringBooleanMap)) {
            return $result;
        }

        $result = $stringBooleanMap[self::lower($string)];

        return $result;
    }



    /**
     * @see StringUtilsTest::testToBoolean()
     * 
     * 
     * 
     */
    public static function toBoolean(?string $string = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        $result = self::toBool($string);
        
        return $result;
    }



    /**
     * @see StringUtilsTest::testToFlt()
     * 
     * 
     * 
     */
    public static function toFlt(?string $string = null): ?float
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null || !self::isNumberOnly($string)) {
            return $result;
        }

        $result = (float) $string;

        return $result;
    }



    /**
     * @see StringUtilsTest::testToFloat()
     * 
     * 
     * 
     */
    public static function toFloat(?string $string = null): ?float
    {
        # DATA
        $result = null;


        # CODE
        $result = self::toFlt($string);

        return $result;
    }



    /**
     * @see StringUtilsTest::testToInt()
     * 
     * 
     * 
     */
    public static function toInt(?string $string = null): ?int
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null || !self::isNumberOnly($string)) {
            return $result;
        }

        $result = (int) $string;

        return $result;
    }



    /**
     * @see StringUtilsTest::testToInteger()
     * 
     * 
     * 
     */
    public static function toInteger(?string $string = null): ?int
    {
        # DATA
        $result = null;


        # CODE
        $result = self::toInt($string);

        return $result;
    }



    /**
     * @see StringUtilsTest::toArrByLength()
     * 
     * 
     * 
     */
    public static function toArrByLength(?string $string = null, ?int $length = 1): ?array
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null || $length === null || $length <= 0 || $length > self::length($string)) {
            return $result;
        }

        $result = str_split($string, $length);

        return $result;
    }



    /**
     * @see StringUtilsTest::toArrayByLength()
     * 
     * 
     * 
     */
    public static function toArrayByLength(?string $string = null, ?int $length = 1): ?array
    {
        # DATA
        $result = null;


        # CODE
        $result = self::toArrByLength($string, $length);

        return $result;
    }



    /**
     * @see StringUtilsTest::testToArrBySprt()
     * 
     * 
     * 
     */
    public static function toArrBySptr(?string $string = null, ?string $separator = null, ?int $limit = PHP_INT_MAX): ?array
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null || $separator === null || $limit === null) {
            return $result;
        }

        $result = self::toArrByLength($string);
        
        if ($separator !== '') {
            $result = explode($separator, $string, $limit);
        }

        return $result;
    }



    /**
     * @see StringUtilsTest::testToArrayBySeparator()
     * 
     * 
     * 
     */
    public static function toArrayBySeparator(?string $string = null, ?string $separator = null, ?int $limit = PHP_INT_MAX): ?array
    {
        # DATA
        $result = null;


        # CODE
        $result = self::toArrBySptr($string, $separator, $limit);

        return $result;
    }



    /**
     * @see StringUtilsTest::testToArray()
     * 
     * 
     * 
     */
    public static function toArray(?string $string = null, ?array $params = [1], ?ToArrayOptions $type = ToArrayOptions::BY_LENGTH): ?array
    {
        # DATA
        $result = null;


        # CODE
        if ($string === null || $params === null || $type === null) {
            return $result;
        }

        if (($type === ToArrayOptions::BY_LENGTH && (empty($params) || count($params) !== 1 || (!is_int($params[0]) && !is_null($params[0])))) ||
            ($type === ToArrayOptions::BY_SEPARATOR && (empty($params) || (count($params) < 1 && count($params) > 2) || (!is_string($params[0]) && !is_null($params[0]) ) || (!is_int($params[1]) && !is_null($params[1]))))) {
                return $result;
        }

        $result = match ($type) {
            ToArrayOptions::BY_LENGTH => self::toArrayByLength($string, $params[0]),
            ToArrayOptions::BY_SEPARATOR => self::toArrayBySeparator($string, $params[0], $params[1] ?? PHP_INT_MAX)
        };

        return $result;
    }
}
