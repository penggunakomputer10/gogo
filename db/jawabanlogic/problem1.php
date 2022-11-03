<?php
$array = [3,2,1,5,4,6,8];
$value = 5;
echo search($array,$value);
function search($array,$value){
    $index = -1;
    foreach ($array as $key => $a) {
        if ($a == $value) {
            $index = $key;
        }

    }
    return $index;

}