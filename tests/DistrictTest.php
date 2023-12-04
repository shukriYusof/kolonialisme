<?php
namespace Shukriyusof\Kolonialisme;

use PHPUnit\Framework\TestCase;

final class DistrictTest extends TestCase
{
    public function testGetAllDistrictsReturnsArray(): void
    {
        $this->assertIsArray(District::getAllDistricts());
    }

    /**
     * @dataProvider districtIdProvider
     */
    public function testGetDistrictByIdReturnsArray(int $districtId): void
    {
        $this->assertIsArray(District::getDistrictById($districtId));
    }

    /**
     * @dataProvider districtNameProvider
     */
    public function testGetDistrictByNameReturnsArray(string $districtName): void
    {
        $this->assertIsArray(District::getDistrictByName($districtName));
    }

    /**
     * @dataProvider stateIdProvider
     */
    public function testGetDistrictByStateIdReturnsArray(int $stateId): void
    {
        $this->assertIsArray(District::getDistrictByStateId($stateId));
    }

    /**
     * False negative test case
     */
    public function testGetDistrictByNonExistentNameReturnsEmptyArray(): void
    {
        $nonExistentName = "NonExistentDistrictName";
        $result = District::getDistrictByName($nonExistentName);

        $this->assertIsArray($result);
        $this->assertEmpty($result);
    }

    // Data Providers

    public function districtIdProvider(): array
    {
        return [
            [59],
            // Add more test cases as needed
        ];
    }

    public function districtNameProvider(): array
    {
        return [
            ["PPD KUBANG PASU"],
            // Add more test cases as needed
        ];
    }

    public function stateIdProvider(): array
    {
        return [
            [2],
            // Add more test cases as needed
        ];
    }
}
