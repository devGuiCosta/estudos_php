<?php
// exe do operador cast 

$vlr1 = (integer) "testando";
$vlr2 = (integer) 12.9;
$vlr3 = (integer) true;
$vlr4 = (integer) [1,2,3];

echo "Valor 1: ".$vlr1."<br>";
echo "Valor 2: ".$vlr2."<br>";
echo "Valor 3: ".$vlr3."<br>";
echo "Valor 4: ".$vlr4."<br>";