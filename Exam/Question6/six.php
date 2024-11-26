<?php
$array = [2,4,3,1,6,7,5,8,0,9,11,22];
function  maxx($arr): void{
    for ( $i=0 ; $i<count($arr)-1 ; $i++ ) {
       for ( $j=0 ; $j<count($arr)-$i-1 ; $j++ ){
           if ( $arr[$j]<$arr[$j+1] ) {
               $temp=$arr[$j];
               $arr[$j]=$arr[$j+1];
               $arr[$j+1]=$temp;
           }
           
       }
       
    }
    echo $arr[0];
}
$maxNumber = maxx($array);
echo  implode(", ", $maxNumber) . "<br>";
