<?php
function dd($data){
    var_dump($data); die;
}

function reverseTheWordsInPlace($inputArray) {
    $inputArray = reverseWholeString($inputArray, 0, count($inputArray)-1);
    $inputArray = reverseTheWords($inputArray);
    dd($inputArray);
    die;
}

function reverseWholeString($inputArray, $f, $t) {
    while($f < $t) {
        $temp = $inputArray[$f];
        $inputArray[$f] = $inputArray[$t];
        $inputArray[$t] = $temp;
        $t--;
        $f++;
    }

    return $inputArray;
}

function reverseTheWords($inputArray) {
    $current = 0;
    while($current < count($inputArray)) {
        $wf = $current;

        $wt = array_search(' ',array_slice( $inputArray, $wf, null, true), false);

        if(!$wt) {
            $inputArray = reverseWholeString($inputArray, $wf, count($inputArray)-1);
            $current =  count($inputArray);           
        } else {

            $inputArray = reverseWholeString($inputArray, $wf, $wt-1);

            $current =  $wt+1;
        }
    }

    return $inputArray;
}

$initial_array = ['p', 'e', 'r', 'f', 'e', 'c', 't',
                    ' ', 'm','a','k','e','s',
                    ' ','p','r','a','c','t','i','c', 'e'];

dd(reverseTheWordsInPlace($initial_array));