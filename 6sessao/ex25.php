<?php
//ex sobre if aninhado 

$var1 = 10;
$var2 = 60;
$var3 = "casa";
$var4 = "carro";

if(is_string($var1)){
    echo "A variável var1 é do tipo string <br>";
}
else{
    echo gettype($var1) . "<br>";
    $multi = $var1 * 2;
    if($multi > 100){
        echo "O valor multiplicado é maior que 100 <br>";
    }
}


if(is_string($var2)){
    echo "A variável var2 é do tipo string <br>";
}
else{
    echo gettype($var2) . "<br>";
    $multi = $var2 * 2;
    if($multi > 100){
        echo "O valor multiplicado é maior que 100 <br>";
    }
}

if(is_string($var3)){
    echo "A variável var3 é do tipo string <br>";
}
else{
    echo gettype($var3) . "<br>";
    $multi = $var3 * 2;
    if($multi > 100){
        echo "O valor multiplicado é maior que 100 <br>";
    }
}

if(is_string($var4)){
    echo "A variável var4 é do tipo string <br>";
}
else{
    echo gettype($var4) . "<br>";
    $multi = $var4 * 2;
    if($multi > 100){
        echo "O valor multiplicado é maior que 100 <br>";
    }
}