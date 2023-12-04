<?php
namespace Shukriyusof\Kolonialisme;

class School
{
    private static $listingSchools;

    private static function loadSchools()
    {
        if (self::$listingSchools === null) {
            self::$listingSchools = json_decode(
                file_get_contents(__DIR__ . '/inc/school.json'),
                true
            );
        }
    }

    private static function getSchools(): array
    {
        self::loadSchools();
        return self::$listingSchools;
    }

    public static function getAllSchools(): array
    {
        return self::getSchools();
    }

    public static function getSchoolById($schoolId): array
    {
        foreach (self::getSchools() as $school) {
            if (!empty($schoolId) && ($schoolId == $school['id'])) {
                return $school;
            }
        }

        return [];
    }

    public static function getSchoolsByLevel($level): array
    {
        return self::getFilteredSchools('level', $level);
    }

    public static function getSchoolsByDistrictId($districtId): array
    {
        return self::getFilteredSchools('district_id', $districtId);
    }

    public static function getSchoolsByCity($city): array
    {
        return self::getFilteredSchools('city', $city);
    }

    public static function getSchoolsByPostcode($postcode): array
    {
        return self::getFilteredSchools('postcode', $postcode);
    }

    public static function getCountAllSchools(): int
    {
        return count(self::getSchools());
    }

    public static function getCountSchoolsByLevel($level): int
    {
        return count(self::getFilteredSchools('level', $level));
    }

    public static function getCountSchoolsByDistrictId($districtId): int
    {
        return count(self::getFilteredSchools('district_id', $districtId));
    }

    public static function getCountSchoolsByCity($city): int
    {
        return count(self::getFilteredSchools('city', $city));
    }

    public static function getCountSchoolsByPostcode($postcode): int
    {
        return count(self::getFilteredSchools('postcode', $postcode));
    }

    private static function getFilteredSchools($field, $value): array
    {
        $schools = [];

        foreach (self::getSchools() as $school) {
            if (!empty($value) && ($value == $school[$field])) {
                $schools[] = $school;
            }
        }

        return $schools;
    }
}
