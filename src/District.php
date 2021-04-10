<?php

namespace shukriyusof\kolonialisme;

class District {
    public static function getAllDistricts(){
        $listingDistricts = file_get_contents( __DIR__ . '/inc/district.json');
        $listingDistricts = json_decode($listingDistricts,true);
        
        return $listingDistricts;
    }

    // 2)getDistrictById
    public static function getDistrictById($params):array {
        $listingDistricts = file_get_contents( __DIR__ .'/inc/district.json');
        $listingDistricts = json_decode($listingDistricts,true);

        foreach ($listingDistricts as $district) {
            if(!empty($params) && ($params ==  $district['id'])){
                return $district;
            }
        }

        return $district;
    }

    // 3)getDistrictByName
    public static function getDistrictByName($params):array {
        $listingDistricts = file_get_contents( __DIR__ .'/inc/district.json');
        $listingDistricts = json_decode($listingDistricts,true);

        foreach ($listingDistricts as $district) {
            if(!empty($params) && ($params ==  $district['name'])){
                return $district;
            }
        }

        return $district;
    }

    // 4)getDistrictByStateId
    public static function getDistrictByStateId($params):array {
        $listingDistricts = file_get_contents( __DIR__ . '/inc/district.json');
        $listingDistricts = json_decode($listingDistricts,true);

        foreach ($listingDistricts as $district) {
            if(!empty($params) && ($params ==  $district['state_id'])){
                return $district;
            }
        }

        return $district;
    }
}
