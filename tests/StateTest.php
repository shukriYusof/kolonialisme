<?php

namespace Shukriyusof\Kolonialisme;

use PHPUnit\Framework\TestCase;
use Shukriyusof\Kolonialisme\State;

final class StateTest extends TestCase
{
    public function testGetAllStates()
    {
        $this->assertIsArray(State::getAllStates());
    }

    /**
     * @dataProvider stateDataProvider
     */
    public function testGetStateByName($name, $expected)
    {
        $res = State::getStateByName($name);
        $this->assertEquals($expected, $res, "Failed for $name");
    }

    /**
     * @dataProvider stateShortNameDataProvider
     */
    public function testGetStateByShortName($shortname, $expected)
    {
        $res = State::getStateByShortname($shortname);
        $this->assertEquals($expected, $res, "Failed for $shortname");
    }

    /**
     * @dataProvider stateIdDataProvider
     */
    public function testGetStateById($id, $expected)
    {
        $res = State::getStateById($id);
        $this->assertEquals($expected, $res, "Failed for ID $id");
    }

    /**
     * @dataProvider stateIsoDataProvider
     */
    public function testGetStateByIso($iso, $expected)
    {
        $res = State::getStateByIso($iso);
        $this->assertEquals($expected, $res, "Failed for ISO $iso");
    }

    public function stateDataProvider()
    {
        return [
            ['Terengganu', [
                "id" => "11",
                "shortname" => "TRG",
                "name" => "Terengganu",
                "iso" => "MY-11"
            ]]
        ];
    }

    public function stateShortNameDataProvider()
    {
        return [
            ['SGR', [
                "id" => "10",
                "shortname" => "SGR",
                "name" => "Selangor",
                "iso" => "MY-10"
            ]]
        ];
    }

    public function stateIdDataProvider()
    {
        return [
            [5, [
                "id" => "5",
                "shortname" => "NSN",
                "name" => "Negeri Sembilan",
                "iso" => "MY-05"
            ]]
        ];
    }

    public function stateIsoDataProvider()
    {
        return [
            ['MY-06', [
                "id" => "6",
                "shortname" => "PHG",
                "name" => "Pahang",
                "iso" => "MY-06"
            ]]
        ];
    }
}
