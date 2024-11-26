<?php

$arr=[1,2,3];
$sum=0;
foreach ($arr as $num) {
    $sum += $num;
}
$avr=$sum/count($arr);
echo $avr;