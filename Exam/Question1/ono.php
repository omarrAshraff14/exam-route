<?php 
$size=8;
for ( $row=0 ; $row<$size ; $row++ ){
    for ( $col=0 ; $col <$size ; $col++ ){
        $isBlack=($col+$row)%2==0;
        $class=$isBlack?"black":"white";
        echo $class;
    }
}