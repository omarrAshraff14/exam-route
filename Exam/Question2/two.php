<?php 
for ( $i=0 ; $i<5 ; $i++ ) {
    for( $j=0 ; $j<$i ;$j++ ){
        echo "*";
       
    }
    echo "<br>";
 
}
for ( $i=5 ; $i>0 ; $i-- ) {
    for( $j=1 ; $j<=$i ;$j++ ){
        echo "*";
        
    }
    echo "<br>";
 
}
//==================================================
for ( $i=0 ; $i<7 ; $i++ ) {
    for( $j=0 ; $j<$i ;$j++ ){
        echo "*";
       
    }
    echo "<br>";
 
}
for ( $i=6 ; $i>0 ; $i-- ) {
    for( $j=1 ; $j<=$i ;$j++ ){
        echo "*";
       
    }
    echo "<br>";
 
}
//==================================================

for ($i = 1; $i <=5; $i++) {
    for ($j = $i; $j < 5; $j++) {
        echo "&nbsp;&nbsp;"; 
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>"; 
}


for ($i = 4; $i >= 1; $i--) {
    echo "&nbsp;&nbsp;";
    for ($j = $i; $j < 4; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo 
       "*";
    }
    echo "<br>"; 
}

