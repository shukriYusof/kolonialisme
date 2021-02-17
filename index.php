<?php

class State {

    public static function getAllStates(){
        $listingStates = file_get_contents(__DIR__.'/inc/state.json');
        $listingStates = json_decode($listingStates,true);
        
        return $listingStates;
    }

    public static function getStateByShortname($params):array {
        $listingStates = file_get_contents(__DIR__.'/inc/state.json');
        $listingStates = json_decode($listingStates,true);

        foreach ($listingStates as $state) {
            if(!empty($params) && ($state['shortname'] == $params)){
                return $state;
            }
        }

        return $state;
    }

    public static function getStateByName($params):array {
        $listingStates = file_get_contents(__DIR__.'/inc/state.json');
        $listingStates = json_decode($listingStates,true);

        foreach ($listingStates as $state) {
            if(!empty($params) && ($state['name'] == $params)){
                return $state;
            }
        }

        return $state;
    }

    public static function getStateById($params):array {
        $listingStates = file_get_contents(__DIR__.'/inc/state.json');
        $listingStates = json_decode($listingStates,true);

        foreach ($listingStates as $state) {
            if(!empty($params) && $state['id'] == $params){
                    return $state;
            }
        }

        return $state;
    }

    public static function getStateByIso($params):array {
        $listingStates = file_get_contents(__DIR__.'/inc/state.json');
        $listingStates = json_decode($listingStates,true);

        foreach ($listingStates as $state) {
            if(!empty($params) && ($state['iso'] == $params)){
                    return $state;
            }
        }

        return $state;
    }
}

class District {
    public static function getAllDistricts(){
        $listingDistricts = file_get_contents(__DIR__.'/inc/district.json');
        $listingDistricts = json_decode($listingDistricts,true);
        
        return $listingDistricts;
    }

    // 2)getDistrictById
    public static function getDistrictById($params):array {
        $listingDistricts = file_get_contents(__DIR__.'/inc/district.json');
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
        $listingDistricts = file_get_contents(__DIR__.'/inc/district.json');
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
        $listingDistricts = file_get_contents(__DIR__.'/inc/district.json');
        $listingDistricts = json_decode($listingDistricts,true);

        foreach ($listingDistricts as $district) {
            if(!empty($params) && ($params ==  $district['state_id'])){
                return $district;
            }
        }

        return $district;
    }
}

class School {
    // return all schools without any requirement
    public static function getAllSchools(){
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
        
        return $listingSchools;
    }

    // return school details based on id of school
    public static function getSchoolById($params):array {
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        foreach( $listingSchools as $school ) {
            if(!empty($params) && ($school['id'] == $params)){
                return $school;
            }
        }

        return $school;
    }

    // return list of schools within the level.
    public static function getSchoolByLevel($params):array {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        foreach( $listingSchools as $school ) {
            if(!empty($params) && ($school['level'] == $params)){
                array_push($schools,$school);
            }
        }

        return $schools;
    }

    // return list of schools in within district area
    public static function getSchoolByDistrictId($params):array {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        foreach( $listingSchools as $school ) {
            if(!empty($params) && ($school['district_id'] == $params)){
        
                array_push($schools,$school);
            }
        }
        
        return $schools;
    }


    public static function getSchoolByCity($params):array {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        foreach( $listingSchools as $school ) {
            if(!empty($params) && ($school['city'] == $params)){
                array_push($schools,$school);
            }
        }

        return $schools;
    }

    public static function getSchoolByPostcode($params):array{
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        foreach( $listingSchools as $school ) {
            if(!empty($params) && ($school['postcode'] == $params)){
                array_push($schools,$school);
            }
        }

        return $schools;
    }

    public static function getCountAllSchools():int {
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);

        $count  = (int) count($listingSchools);

        return $count;
    }

    public static function getCountSchoolByLevel($params):int {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        foreach( $listingSchools as $school ) {
            if(!empty($params) && ($school['level'] == $params)){
                array_push($schools,$school);
            }
        }

        $count  = (int) count( $schools);
        return  $count;
    }

    public static function getCountSchoolByDistrictId($params):int {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        foreach( $listingSchools as $school ) {
            if(!empty($params) && ($school['district_id'] == $params)){
                array_push($schools,$school);
            }
        }

        $count  = (int) count( $schools);
        return  $count;
    }

    public static function getCountSchoolByCity($params):int {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        foreach( $listingSchools as $school ) {
            if(!empty($params) && ($school['city'] == $params)){
                array_push($schools,$school);
            }
        }

        $count  = (int) count( $schools);
        return  $count;
    }

    public static function getCountSchoolByPostcode($params):int {
        $schools = [];
        $listingSchools = file_get_contents(__DIR__.'/inc/school.json');
        $listingSchools = json_decode($listingSchools,true);
     
        foreach( $listingSchools as $school ) {
            if(!empty($params) && ($school['postcode'] == $params)){
                array_push($schools,$school);
            }
        }

        $count  = (int) count( $schools);
        return  $count;
    }
}