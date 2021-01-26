<?php

require_once './src/Listed.php';

$rq =  new \Listed\Listed();

// // echo $rq->getAllStates();

print_r($rq->getAllStates());
$states =(object) $rq->getAllStates();

foreach($states as $state){
    echo $state->id;
}