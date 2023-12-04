<?php
namespace Shukriyusof\Kolonialisme;

class State
{
    private static $listingStates;

    private static function loadStates()
    {
        if (self::$listingStates === null) {
            self::$listingStates = json_decode(
                file_get_contents(__DIR__ . '/inc/state.json'),
                true
            );
        }
    }

    private static function getStates(): array
    {
        self::loadStates();
        return self::$listingStates;
    }

    public static function getAllStates(): array
    {
        return self::getStates();
    }

    public static function getStateByShortname($shortname): array
    {
        return self::getFilteredState('shortname', $shortname);
    }

    public static function getStateByName($name): array
    {
        return self::getFilteredState('name', $name);
    }

    public static function getStateById($id): array
    {
        return self::getFilteredState('id', $id);
    }

    public static function getStateByIso($iso): array
    {
        return self::getFilteredState('iso', $iso);
    }

    private static function getFilteredState($field, $value): array
    {
        foreach (self::getStates() as $state) {
            if (!empty($value) && ($value == $state[$field])) {
                return $state;
            }
        }

        return [];
    }
}
