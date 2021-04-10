<?php
namespace shukriyusof\kolonialisme;

use PHPUnit\Framework\TestCase;
use shukriyusof\kolonialisme\State;

final class StateTest extends TestCase
{
    public function testGetAllStates()
    {
        return $this->assertIsArray(State::getAllStates());
    }

    public function testGetStateByName()
    {
        $res = State::getStateByName('Terengganu');
        $expected = [
            "id" => "11",
            "shortname" => "TRG",
            "name" => "Terengganu",
            "iso" => "MY-11"
        ];

        return $this->assertEquals( $expected, $res );
    }

    public function testGetStateByShortName()
    {
        $res = State::getStateByShortname('SGR');
        $expected = [
            "id" => "10",
            "shortname" => "SGR",
            "name" => "Selangor",
            "iso" => "MY-10"
        ];

        return $this->assertEquals( $expected, $res );
    }

    public function testGetStateById()
    {
        $res = State::getStateById(5);
        $expected = [
            "id" => "5",
            "shortname" => "NSN",
            "name" => "Negeri Sembilan",
            "iso" => "MY-05"
        ];

        return $this->assertEquals( $expected, $res );
    }

    public function testGetStateByIso()
    {
        $res = State::getStateByIso('MY-06');
        $expected = [
            "id" => "6",
            "shortname" => "PHG",
            "name" => "Pahang",
            "iso" => "MY-06"
        ];

        return $this->assertEquals( $expected, $res );
    }
}