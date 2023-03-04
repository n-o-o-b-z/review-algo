<?php

$arr = array(5, 2, 8, 3, 1);

$sortedArr = insertionSort($arr);

echo implode(", ", $sortedArr); 

function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
      $key = $arr[$i];
      $j = $i - 1;
      while ($j >= 0 && $arr[$j] > $key) {
        $arr[$j + 1] = $arr[$j];
        $j--;
      }
      $arr[$j + 1] = $key;
    }
    return $arr;
  }

?>