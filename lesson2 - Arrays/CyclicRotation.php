<?php
function solution($A, $K) {
    $lng = count($A);
    for($i = 0 ; $i < $K ; $i++){
        $lastItem = $A[count($A) - 1];
        array_pop($A);
        array_splice($A, 0, 0, $lastItem);
    }
        
    return $A;
}