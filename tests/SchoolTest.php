<?php
namespace Shukriyusof\Kolonialisme;

use PHPUnit\Framework\TestCase;
use Shukriyusof\Kolonialisme\School;

final class SchoolTest extends TestCase
{
    public function testGetAllSchool()
    {
        $this->assertIsArray(School::getAllSchools());
    }

    /**
     * @dataProvider schoolIdProvider
     */
    public function testGetSchoolById($schoolId, $expected)
    {
        $res = School::getSchoolById($schoolId);
        $this->assertEquals($expected, $res);
    }

    public function schoolIdProvider()
    {
        return [
            [
                6616,
                [
                    "id" => "6616",
                    "district_id" => "124",
                    "name" => "SEKOLAH KEBANGSAAN SENTOSA SIBU",
                    "schoolcode" => "YBA3105",
                    "level" => "Rendah",
                    "address" => "LOT 513 BLOK 9 JALAN SENTOSA OFF JALAN SALIM ",
                    "postcode" => "96000",
                    "city" => "SIBU",
                    "email" => "YBA3105@moe.edu.my",
                    "coordinatexx" => "111.8652667",
                    "coordinateyy" => "2.270433333",
                ]
            ],
            // Add more test cases as needed
        ];
    }

    /**
     * @dataProvider levelProvider
     */
    public function testGetSchoolByLevel($level, $expectedCount)
    {
        $schools = School::getSchoolsByLevel($level);
        $this->assertIsArray($schools);
        $this->assertCount($expectedCount, $schools);
    }

    public function levelProvider()
    {
        return [
            ["Menengah", 2439],
            // Add more test cases as needed
        ];
    }

    /**
     * @dataProvider districtIdProvider
     */
    public function testGetSchoolByDistrictId($districtId, $expectedCount)
    {
        $schools = School::getSchoolsByDistrictId($districtId);
        $this->assertIsArray($schools);
        $this->assertCount($expectedCount, $schools);
    }

    public function districtIdProvider()
    {
        return [
            [1, 122],
            // Add more test cases as needed
        ];
    }

    /**
     * @dataProvider cityProvider
     */
    public function testGetSchoolByCity($city, $expectedCount)
    {
        $schools = School::getSchoolsByCity($city);
        $this->assertIsArray($schools);
        $this->assertCount($expectedCount, $schools);
    }

    public function cityProvider()
    {
        return [
            ["CHENDERIANG", 4],
            // Add more test cases as needed
        ];
    }

    /**
     * @dataProvider postcodeProvider
     */
    public function testGetSchoolByPostcode($postcode, $expectedCount)
    {
        $schools = School::getSchoolsByPostcode($postcode);
        $this->assertIsArray($schools);
        $this->assertCount($expectedCount, $schools);
    }

    public function postcodeProvider()
    {
        return [
            [35000, 19],
            // Add more test cases as needed
        ];
    }

    public function testGetCountAllSchools()
    {
        $res = School::getCountAllSchools();
        $this->assertEquals(10218, $res);
    }

    /**
     * @dataProvider countLevelProvider
     */
    public function testGetCountSchoolByLevel($level, $expected)
    {
        $res = School::getCountSchoolsByLevel($level);
        $this->assertEquals($expected, $res);
    }

    public function countLevelProvider()
    {
        return [
            ["Menengah", 2439],
            // Add more test cases as needed
        ];
    }

    /**
     * @dataProvider countDistrictProvider
     */
    public function testGetCountSchoolByDistrictId($districtId, $expected)
    {
        $res = School::getCountSchoolsByDistrictId($districtId);
        $this->assertEquals($expected, $res);
    }

    public function countDistrictProvider()
    {
        return [
            [1, 122],
            // Add more test cases as needed
        ];
    }

    /**
     * @dataProvider countCityProvider
     */
    public function testGetCountSchoolByCity($city, $expected)
    {
        $res = School::getCountSchoolsByCity($city);
        $this->assertEquals($expected, $res);
    }

    public function countCityProvider()
    {
        return [
            ["CHENDERIANG", 4],
            // Add more test cases as needed
        ];
    }

    /**
     * @dataProvider countPostcodeProvider
     */
    public function testGetCountSchoolByPostcode($postcode, $expected)
    {
        $res = School::getCountSchoolsByPostcode($postcode);
        $this->assertEquals($expected, $res);
    }

    public function countPostcodeProvider()
    {
        return [
            [35000, 19],
            // Add more test cases as needed
        ];
    }
}
