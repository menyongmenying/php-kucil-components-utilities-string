<?php

namespace Kucil\Utilities\StringUtils\Contracts;

use Kucil\Utilities\StringUtils\Enums\SliceOptions;
use Kucil\Utilities\StringUtils\Enums\ToArrayOptions;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
interface StringInterface
{
    /**
     * Meneruskan hasil pemeriksaan apakah nilai yang diberikan bertipe data string atau tidak.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  mixed $string Nilai yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool         Hasil pemeriksaan apakah nilai $string bertipe data string atau tidak.     
     * 
     * @see    StringUtilsTest::testIsBool()
     * 
     * 
     * 
     */
    public static function isStr(mixed $string): ?bool;



    /**
     * Meneruskan hasil pemeriksaan apakah nilai yang diberikan bertipe data string atau tidak.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  mixed $string Nilai yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool         Hasil pemeriksaan apakah nilai $string bertipe data string atau tidak.     
     * 
     * @see    StringUtilsTest::testIsBool()
     * 
     * 
     * 
     */
    public static function isString(mixed $string): ?bool;



    /**
     * Meneruskan hasil pemeriksaan apakah nilai string yang diberikan hanya berisi string kosong atau whitespace saja.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool           Hasil pemeriksaan apakah nilai $string hanya berisi string kosong atau whitespace saja.     
     * 
     * @see    StringUtilsTest::testIsWhitespaceOnly()
     * 
     * 
     * 
     */
    public static function isWhitespaceOnly(?string $string): ?bool;



    /**
     * Meneruskan hasil pemeriksaan apakah nilai string yang diberikan hanya berisi angka saja.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool           Hasil pemeriksaan apakah nilai $string hanya berisi angka saja.
     * 
     * @see    StringUtilsTest::testIsNumberOnly()
     * 
     * 
     * 
     */
    public static function isNumberOnly(?string $string): ?bool;



    /**
     * Meneruskan hasil pemeriksaan apakah nilai string yang diberikan hanya berisi huruf alfabet saja.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool           Hasil pemeriksaan apakah nilai $string hanya berisi huruf alfabet saja.
     * 
     * @see    StringUtilsTest::testIsAlphabetOnly()
     * 
     * 
     * 
     */
    public static function isAlphabetOnly(?string $string): ?bool;



    /**
     * Meneruskan panjang karakter dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dihitung panjang karakternya.
     *
     * @return ?int            Panjang karakter dari nilai $string.
     * 
     * @see    StringUtilsTest::testLength()
     * 
     * 
     * 
     */
    public static function length(?string $string): ?int;


    
    /**
     * Meneruskan format lowercase dari string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan diformatkan lowercase. 
     *
     * @return ?string         Format lowercase dari nilai $string.
     * 
     * @see    StringUtilsTest::testLower()
     * 
     * 
     * 
     */
    public static function lower(?string $string): ?string;



    /**
     * Meneruskan format uppercase dari string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan diformatkan uppercase. 
     *
     * @return ?string         Format uppercase dari nilai $string.
     * 
     * @see    StringUtilsTest::testUpper()
     * 
     * 
     * 
     */
    public static function upper(?string $string): ?string;



    /**
     * Meneruskan format firstCharCapitalize dari string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan diformatkan firstCharCapitalize. 
     *
     * @return ?string         Format firstCharCapitalize dari nilai $string.
     * 
     * @see    StringUtilsTest::testFirstCharCapitalize()
     * 
     * 
     * 
     */
    public static function firstCharCapitalize(?string $string): ?string;



    /**
     * Meneruskan format judul dari string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan diformatkan judul. 
     *
     * @return ?string         Format judul dari nilai $string.
     * 
     * @see    StringUtilsTest::testTitle()
     * 
     * 
     * 
     */
    public static function title(?string $string): ?string;



    /**
     * Meneruskan format camelcase dari string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string              Nilai string yang akan diformatkan camelcase. 
     * @param  ?bool   $firstCharCapitalize Karakter pertama huruf kapital.
     *
     * @return ?string         Format camelcase dari nilai $string.
     * 
     * @see    StringUtilsTest::testCamel()
     * 
     * 
     * 
     */
    public static function camel(?string $string, ?bool $firstCharCapitalize): ?string;



    /**
     * Meneruskan hasil modifikasi nilai substring dengan nilai substring lainnya yang terdapat pada nilai string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string        Nilai string yang akan dijadikan objek modifikasi. 
     * @param  ?string $search        Nilai substring yang akan diganti.
     * @param  ?string $replace       Nilai substring yang akan menjadi pengganti nilai $search.
     * @param  ?bool   $sensitiveCase Sensivitas huruf.
     *
     * @return ?string          Nilai $string yang nilai substring $search telah digantikan dengan nilai substring $replace.
     * 
     * @see    StringUtilsTest::testReplace()
     * 
     * 
     * 
     */
    public static function replace(?string $string, ?string $search, ?string $replace, ?bool $sensitiveCase): ?string;


    
    /**
     * Meneruskan hasil pemeriksaan apakah nilai substring yang diberikan terdapat pada nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string        Nilai string yang akan dijadikan objek pemeriksaan.
     * @param  ?string $search        Nilai substring yang akan dicari pada nilai $string.
     * @param  ?bool   $sensitiveCase Sensivitas huruf.
     *
     * @return ?bool                  Hasil pemeriksaan apakah nilai $search terdapat pada nilai $string.
     * 
     * @see    StringUtilsTest::testContains()
     * 
     * 
     * 
     */
    public static function contains(?string $string, ?string $search, ?bool $sensitiveCase): ?bool;



    /**
     * Menghapus whitespace pada nilai string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dihapus whitespacenya. 
     *
     * @return ?string         Nilai $string yang whitespacenya telah dihapus.
     * 
     * @see    StringUtilsTest::testRemoveWhitespace()
     * 
     * 
     * 
     */
    public static function removeWhitespace(?string $string): ?string;



    /**
     * Meneruskan hasil pemeriksaan apakah nilai string yang diberikan diawali dengan nilai substring tertentu.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  ?string $string        Nilai string yang akan dijadikan objek pemeriksaan.
     * @param  ?string $search        Nilai substring yang diperiksa apakah mengawali nilai $string.
     * @param  ?bool   $sensitiveCase Sensivitas huruf.
     *
     * @return ?bool                  Hasil pemeriksaan apakah nilai $string diawali nilai $search.
     * 
     * @see    StringUtilsTest::testStarts()
     * 
     * 
     * 
     */
    public static function starts(?string $string, ?string $search, ?bool $sensitiveCase): ?bool;



    /**
     * Meneruskan hasil pemeriksaan apakah nilai string yang diberikan diakhiri dengan nilai substring tertentu.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  ?string $string        Nilai string yang akan dijadikan objek pemeriksaan.
     * @param  ?string $search        Nilai substring yang diperiksa apakah mengakhiri nilai $string.
     * @param  ?bool   $sensitiveCase Sensivitas huruf.
     *
     * @return ?bool                  Hasil pemeriksaan apakah nilai $string diakhiri nilai $search.
     * 
     * @see    StringUtilsTest::testEnds()
     * 
     * 
     * 
     */
    public static function ends(?string $string, ?string $search, ?bool $sensitiveCase): ?bool;



    /**
     * Meneruskan hasil penghapusan secara beruntun suatu karakter pada nilai string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  ?string $string Nilai string yang akan dijadikan objek penghapusan karakter.
     * @param  ?array  $chars  Nilai karakter yang akan dihapus secara beruntun.
     *
     * @return ?string         Hasil penghapusan secara beruntun $chars pada nilai $string.
     * 
     * @see    StringUtilsTest::testSliceLeft()
     * 
     * 
     * 
     */
    public static function sliceLeft(?string $string, ?array $chars): ?string;



    /**
     * Meneruskan hasil penghapusan secara beruntun suatu karakter pada nilai string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  ?string $string Nilai string yang akan dijadikan objek penghapusan karakter.
     * @param  ?array  $chars  Nilai karakter yang akan dihapus secara beruntun.
     *
     * @return ?string         Hasil penghapusan secara beruntun $chars pada nilai $string.
     * 
     * @see    StringUtilsTest::testSliceRight()
     * 
     * 
     * 
     */
    public static function sliceRight(?string $string, ?array $chars): ?string;



    /**
     * Meneruskan hasil penghapusan secara beruntun suatu karakter pada nilai string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  ?string $string Nilai string yang akan dijadikan objek penghapusan karakter.
     * @param  ?array  $chars  Nilai karakter yang akan dihapus secara beruntun.
     *
     * @return ?string         Hasil penghapusan secara beruntun $chars pada nilai $string.
     * 
     * @see    StringUtilsTest::testSliceAll()
     * 
     * 
     * 
     */
    public static function sliceAll(?string $string, ?array $chars): ?string;



    /**
     * Meneruskan hasil penghapusan secara beruntun suatu karakter pada nilai string yang diberikan.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  ?string       $string Nilai string yang akan dijadikan objek penghapusan karakter.
     * @param  ?array        $chars  Nilai karakter yang akan dihapus secara beruntun.
     * @param  ?SliceOptions $type   Tipe penghapusan karakter.
     *
     * @return ?string                      Hasil penghapusan secara beruntun $chars pada nilai $string.
     * 
     * @see    StringUtilsTest::testSliceLeft()
     * @see    StringUtilsTest::testSliceRight()
     * @see    StringUtilsTest::testSliceAll()
     * 
     * 
     * 
     */
    public static function slice(?string $string, ?array $chars, ?SliceOptions $type): ?string;



    /**
     * Meneruskan hasil konversi string ke boolean dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek konversi.
     *
     * @return ?bool           Hasil konversi string ke boolean dari nilai $string.
     * 
     * @see    StringUtilsTest::testToBool()
     * 
     * 
     * 
     */
    public static function toBool(?string $string): ?bool;



    /**
     * Meneruskan hasil konversi string ke boolean dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek konversi.
     *
     * @return ?bool           Hasil konversi string ke boolean dari nilai $string.
     * 
     * @see    StringUtilsTest::testToBool()
     * 
     * 
     * 
     */
    public static function toBoolean(?string $string): ?bool;



    /**
     * Meneruskan hasil konversi string ke float dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek konversi.
     *
     * @return ?float          Hasil konversi string ke float dari nilai $string.
     * 
     * @see    StringUtilsTest::testToFlt()
     * 
     * 
     * 
     */
    public static function toFlt(?string $string): ?float;



    /**
     * Meneruskan hasil konversi string ke float dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek konversi.
     *
     * @return ?float          Hasil konversi string ke float dari nilai $string.
     * 
     * @see    StringUtilsTest::testToFloat()
     * 
     * 
     * 
     */
    public static function toFloat(?string $string): ?float;



    /**
     * Meneruskan hasil konversi string ke integer dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek konversi.
     *
     * @return ?int            Hasil konversi string ke integer dari nilai $string.
     * 
     * @see    StringUtilsTest::testToInt()
     * 
     * 
     * 
     */
    public static function toInt(?string $string): ?int;



    /**
     * Meneruskan hasil konversi string ke integer dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek konversi.
     *
     * @return ?int            Hasil konversi string ke integer dari nilai $string.
     * 
     * @see    StringUtilsTest::testToInteger()
     * 
     * 
     * 
     */
    public static function toInteger(?string $string): ?int;
    


    /**
     * Meneruskan hasil konversi string ke array dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek konversi.
     * @param  ?int    $length Nilai panjang digit dari nilai sel value array.
     *
     * @return array           Hasil konversi string ke array dari nilai $string.
     * 
     * @see StringUtilsTest::testToArrByLength()
     * 
     * 
     * 
     */
    public static function toArrByLength(?string $string, ?int $length): ?array;



    /**
     * Meneruskan hasil konversi string ke array dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string Nilai string yang akan dijadikan objek konversi.
     * @param  ?int    $length Nilai panjang digit dari nilai sel value array.
     *
     * @return array           Hasil konversi string ke array dari nilai $string.
     * 
     * @see StringUtilsTest::testToArrayByLength()
     * 
     * 
     * 
     */
    public static function toArrayByLength(?string $string, ?int $length): ?array;



    /**
     * Meneruskan hasil konversi string ke array dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string    Nilai string yang akan dijadikan objek konversi.
     * @param  ?string $separator Nilai substring yang akan dijadikan pemisah konversi.
     * @param  ?int    $limit   
     * 
     * @return ?array             Hasil konversi string ke array dari nilai $string.
     * 
     * @see    StringUtilsTest::toArryBySptr()
     * 
     * 
     * 
     */
    public static function toArrBySptr(?string $string, ?string $separator, ?int $limit): ?array;



    /**
     * Meneruskan hasil konversi string ke array dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $string    Nilai string yang akan dijadikan objek konversi.
     * @param  ?string $separator Nilai substring yang akan dijadikan pemisah konversi.
     * @param  ?int    $limit        
     *
     * @return ?array             Hasil konversi string ke array dari nilai $string.
     * 
     * @see    StringUtilsTest::testToArrayBySeparator()
     * 
     * 
     * 
     */
    public static function toArrayBySeparator(?string $string, ?string $separator, ?int $limit): ?array;



    /**
     * Meneruskan hasil konversi string ke array dari nilai string yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string         $string Nilai string yang akan dijadikan objek konversi.
     * @param  ?array          $params Nilai substring yang akan dijadikan pemisah konversi.
     * @param  ?ToArrayOptions $type   Tipe konversi string ke array yang akan diterapkan.    
     *
     * @return ?array                        Hasil konversi string ke array dari nilai $string.
     * 
     * @see    StringUtilsTest::testToArrayByLength()
     * @see    StringUtilsTest::testToArrayBySeparator()
     * 
     * 
     * 
     */
    public static function toArray(?string $string, ?array $params, ?ToArrayOptions $type): ?array;
}