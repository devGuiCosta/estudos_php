<?php 

$array =[];
for ($i = 10; $i <= 20; $i++) {
    array_push($array, $i);
    if ($i % 2 == 1){
        echo $i . "<br>";
    }
}
print_r($array);