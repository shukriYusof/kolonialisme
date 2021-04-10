<?php
namespace shukriyusof\kolonialisme;

use PHPUnit\Framework\TestCase;
use shukriyusof\kolonialisme\District;

final class DistrictTest extends TestCase
{
    public function testGetAllDistricts(){
        return $this->assertIsArray(District::getAllDistricts());
    }

    public function testGetAllDistrictsById(){
        return $this->assertIsArray(District::getDistrictById(59));
    }

    public function testGetAllDistrictsByName(){
        return $this->assertIsArray(District::getDistrictByName("PPD KUBANG PASU"));
    }

    public function testGetAllDistrictsByStateId(){
        return $this->assertIsArray(District::getDistrictByStateId(2));
    }
}