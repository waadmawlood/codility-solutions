<?php
function solution($A) {
   
  $temp = [];
  foreach ($A as $a) {
    if (array_key_exists($a, $temp)) {
      $temp[$a]++;
    } else {
      $temp[$a] = 1;
    }
  }

  foreach ($temp as $i => $value) {
    if ($value % 2 == 1) {
      return $i;
    }
  }
  
  return 0;
}