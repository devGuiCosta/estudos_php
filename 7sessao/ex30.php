<?php

$array = range (1,20,1);

for ($i = 0; $i < count($array); $i++){
    if ($array[$i] % 2 == 0 ){
        echo $array[$i] . "<br>";
    }
}