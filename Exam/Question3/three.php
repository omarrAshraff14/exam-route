<?php
$array = [2,4,3,1,6,7,5,8,0,9];
 function sortAsc($arr){
     for ( $i=0 ; $i<count($arr)-1 ; $i++ ) {
        for ( $j=0 ; $j<count($arr)-$i-1 ; $j++ ){
            if ( $arr[$j]>$arr[$j+1] ) {
                $temp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
            }
        }
     }
     return $arr;
 }
 $sortedAsc = sortAsc($array);
echo  implode(", ", $sortedAsc) . "<br>";


$array = [2,4,3,1,6,7,5,8,0,9];
 function sortDesc($arr){
     for ( $i=0 ; $i<count($arr)-1 ; $i++ ) {
        for ( $j=0 ; $j<count($arr)-$i-1 ; $j++ ){
            if ( $arr[$j]<$arr[$j+1] ) {
                $temp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
            }
            
        }
      
    }
   
    return $arr;
 }

 $sortedDesc = sortDesc($array);
echo  implode(", ", $sortedDesc) . "<br>";