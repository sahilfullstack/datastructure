<?php

function dd($data) {
    var_dump($data);
    die;
}

function merge_it_up_for_me($finalArray, $last_unbreakable_array) {
    if(! empty($finalArray)) {
        array_push($last_unbreakable_array, '');
    }

    $finalArray = array_merge($last_unbreakable_array, $finalArray);

    return $finalArray;
}

function reverse_the_array($array) {

    $finalArray = [];
    $length = count($array);
    $last_unbreakable_array = [];
    for($i = 0; $i < $length; $i++)
    {
        if($array[$i] == ' ') {            

            $finalArray = merge_it_up_for_me($finalArray, $last_unbreakable_array);

            $last_unbreakable_array = [];
        } else {        
            array_push($last_unbreakable_array, $array[$i]);
        }
    }

    if(! empty($last_unbreakable_array)) {
        $finalArray = merge_it_up_for_me($finalArray, $last_unbreakable_array);
    }

    return $finalArray;
}

$initial_array = ['p', 'e', 'r', 'f', 'e', 'c', 't',
                    ' ', 'm','a','k','e','s',
                    ' ','p','r','a','c','t','i','c', 'e'];

dd(reverse_the_array($initial_array));