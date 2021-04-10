<?php
namespace Shukriyusof\Kolonialisme;

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
