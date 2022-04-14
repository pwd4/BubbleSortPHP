<?php
$arr = [0, 1, 2, 3, 4, 5, 8, 9, 11];

for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i; $j < count($arr); $j++) {
        if ($arr[$i] > $arr[$j]){
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        } 
    }
}
