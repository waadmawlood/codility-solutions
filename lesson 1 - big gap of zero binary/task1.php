<?php

function solution($N) {
    $bin = decbin($N);
    $gap = [];
    $len = strlen($bin);
    $startCount = 0;
    $endCount = 0;

    $startCount = strpos($bin,'0');
    
    if(! $startCount)
        return 0;

    while($startCount){
        $endCount = strpos($bin,'1',$startCount);
        
        if(! $endCount)
            break;

        $sub = substr($bin,$startCount,$endCount - $startCount);
        array_push($gap,strlen($sub));
        
        $startCount = strpos($bin,'0',$endCount);
        
    }

    $sum = 0;
    if(count($gap)>0)
        return max($gap);
    else
        return 0;
}