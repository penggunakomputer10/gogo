<?php

fizz(100);

function fizz($angka){
    for ($i=1; $i <= $angka; $i++) { 
        if ($i % 3 == 0 AND $i % 5 == 0){
            echo $i.". Hello World<br>";
        }elseif($i % 3 == 0) {
            echo $i.". Hello <br>";
        }elseif ($i % 5 == 0) {
            echo $i.". World <br>";
        }
    }
}
