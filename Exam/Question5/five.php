<?php
$arr=[1,2,3,5,6,7,8,9];
$notEven=[];
for ( $i=0 ; $i<count($arr) ; $i++ ){
    if ( $arr[$i]%2 != 0 ) {
        $notEven[]=$arr[$i];
    }
   
}
echo implode(",",$arr);
echo"<br>". implode(",",$notEven);