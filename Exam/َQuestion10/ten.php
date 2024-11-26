<?php

function primeCheck($num){
    if($num<=1)
    {
        return false;
    }
      for ( $i=2 ; $i<=sqrt($num) ;$i++ ){
        if ( $num%$i==0 ){
           return false;
        }
    }
}
if(primeCheck(235)){
echo "prime";
}
else {
    echo "not prime";
}