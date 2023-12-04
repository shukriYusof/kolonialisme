<?php
namespace Shukriyusof\Kolonialisme;

class District
{
    private static $listingDistricts;

    private static function loadDistricts()
    {
        if (self::$listingDistricts === null) {
            self::$listingDistricts = json_decode(
                file_get_contents(__DIR__ . '/inc/district.json'),
                true
            );
        }
    }

    private static function getDistricts(): array
    {
        self::loadDistricts();
        return self::$listingDistricts;
    }

    public static function getAllDistricts(): array
    {
        return self::getDistricts();
    }

    public static function getDistrictById($districtId): array
    {
        foreach (self::getDistricts() as $district) {
            if (!empty($districtId) && ($districtId == $district['id'])) {
                return $district;
            }
        }

        return [];
    }

    public static function getDistrictByName($districtName): array
    {
        foreach (self::getDistricts() as $district) {
            if (!empty($districtName) && ($districtName == $district['name'])) {
                return $district;
            }
        }

        return [];
    }

    public static function getDistrictByStateId($stateId): array
    {
        foreach (self::getDistricts() as $district) {
            if (!empty($stateId) && ($stateId == $district['state_id'])) {
                return $district;
            }
        }

        return [];
    }
}
