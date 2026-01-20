<?php 
 $array = [1, 2, 3, 4, "CASA", "monstro", 23.5, "guilherme"];
 $count = count($array);
 $y = 0;

 while ($y < $count){
    if (is_string($array[$y])){
        echo $array[$y] . "<br>";

    }
    $y++;

 }