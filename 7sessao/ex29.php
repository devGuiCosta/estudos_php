<?php 

$array =range(0, 100, 10);
$cont = 0;

while ($cont < count($array)) {
    if ($array[$cont] == 30 || $array[$cont] == 40) {
        $cont++;
        continue;
    }
    echo $array[$cont] . "<br>";
    $cont++;
}