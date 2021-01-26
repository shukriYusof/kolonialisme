<?php
namespace Listed;  

class Listed {

    public function getAllStates(){
        $states = file_get_contents(__DIR__.'/../inc/state.json');
        $states = json_decode($states,true);
        //$states = json_decode(json_encode($states), FALSE);
        return $states;
    }
}