<?php
namespace Shukriyusof\Kolonialisme;

use PHPUnit\Framework\TestCase;
use Shukriyusof\Kolonialisme\School;

final class SchoolTest extends TestCase
{
    public function testGetAllSchool(){
        return $this->assertIsArray(School::getAllSchools());
    }

    public function testGetAllSchoolById(){

        $res = School::getSchoolById(6616);

        $expected = [
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
            "coordinateyy" => "2.270433333"
        ];

        return $this->assertEquals( $expected, $res );
    }

    public function testGetSchoolByLevel() {
        $this->assertIsArray(School::getSchoolByLevel("Menengah"));
    }

    public function testGetSchoolByDistrictId() {
        $this->assertIsArray(School::getSchoolByDistrictId(1));
    }

    public function testGetSchoolByCity() {
        $this->assertIsArray(School::getSchoolByCity("CHENDERIANG"));
    }

    public function testGetSchoolByPostcode() {
        $this->assertIsArray(School::getSchoolByPostcode(35000));
    }

    public function testGetCountAllSchools(){

        $res = School::getCountAllSchools();

        $expected = 10218;

        return $this->assertEquals( $expected, $res );
    }

    public function testGetCountSchoolByLevel(){

        $res = School::getCountSchoolByLevel("Menengah");

        $expected = 2439;

        return $this->assertEquals( $expected, $res );
    }

    public function testGetCountSchoolByDistrictId(){

        $res = School::getCountSchoolByDistrictId(1);

        $expected = 122;

        return $this->assertEquals( $expected, $res );
    }

    public function testGetCountSchoolByCity(){

        $res = School::getCountSchoolByCity("CHENDERIANG");

        $expected = 4;

        return $this->assertEquals( $expected, $res );
    }

    public function testGetCountSchoolByPostcode(){

        $res = School::getCountSchoolByPostcode(35000);

        $expected = 19;

        return $this->assertEquals( $expected, $res );
    }



    
}