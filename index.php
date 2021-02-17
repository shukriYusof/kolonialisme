<?php

class Listing {

    public static function getAllStates(){
        $states = file_get_contents(__DIR__.'/inc/state.json');
        $states = json_decode($states,true);
        
        return $states;
    }

    public static function getAllDistricts(){
        $districts = file_get_contents(__DIR__.'/inc/district.json');
        $districts = json_decode($districts,true);
        
        return $districts;
    }

    // return all schools without any requirement
    public static function getAllSchools(){
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
        
        return $listingSchools;
    }

    // return school details based on id of school
    public static function getSchoolById($params) :array{
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        if(!empty($params)){
            foreach( $listingSchools as $school ) {
                if($school['id'] == $params){
                    return $school;
                }
            }
        }
        return $school;
    }

    // return list of schools within the level.
    public static function getSchoolByLevel($params) :array {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        if(!empty($params)){
            foreach( $listingSchools as $school ) {
                if($school['level'] == $params){
                    array_push($schools,$school);
                }
            }
        }
        return $schools;
    }

    // return list of schools in within district area
    public static function getSchoolByDistrictId($params) :array {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        if(!empty($params)){
            foreach( $listingSchools as $school ) {
                if($school['district_id'] == $params){
                    array_push($schools,$school);
                }
            }
        }
        return $schools;
    }


    public static function getSchoolByCity($params) :array {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        if(!empty($params)){
            foreach( $listingSchools as $school ) {
                if($school['city'] == $params){
                    array_push($schools,$school);
                }
            }
        }
        return $schools;
    }

    public static function getSchoolByPostcode(){
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        if(!empty($params)){
            foreach( $listingSchools as $school ) {
                if($school['postcode'] == $params){
                    array_push($schools,$school);
                }
            }
        }
        return $schools;
    }

    public static function getCountAllSchools() :int {
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);

        $count  = (int) count($listingSchools);

        return $count;
    }
}

echo Listing::getCountAllSchools();
