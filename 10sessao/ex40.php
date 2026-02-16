<?php

$str = "O rato roeu a roupa do rei de Roma.";

function countA($str){
    $str = strtolower($str);
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++){
        if ($str[$i] == 'a'){
            $count++;
        }
    }
}