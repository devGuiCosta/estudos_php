<?php

$var1 = 10;
$var2 = "casa";
$var3 = 12.2;
$var4 = [];

if(is_int($var1)){
    echo "A variável var1 é do tipo inteiro <br>";
}
else {
    echo "A variável var1 não é do tipo inteiro <br>";
}

if(is_string($var2)){
    echo "A variável var2 é do tipo string <br>";
}
else {
    echo "A variável var2 não é do tipo string <br>";
}

if(is_float($var3)){
    echo "A variável var3 é do tipo float <br>";
}
else {
    echo "A variável var3 não é do tipo float <br>";
}

if(is_array($var4)){
    echo "A variável var4 é do tipo array <br>";
}
else {
    echo "A variável var4 não é do tipo array <br>";
}

echo "<br>";
echo "<br>";
echo "<br>";



// parte 2 

$peso = 90;

if($peso > 80){
    echo "O peso $peso está fora do limite permitido <br>";
}
else {
    echo "O peso $peso está dentro do limite permitido <br>";
}
