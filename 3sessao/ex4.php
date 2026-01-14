<?php 
 
 // exercicio sobre números float em PHP

 $num1 = 1.5;
 $num2 = 2.5;
 $num3 = 1;
 
 echo "$num1 </br>";
 echo "$num2 </br>";
 if(is_float($num3)){
    echo "$num3 </br>";
 }
 else{
    echo "$num3 não era float, mas agr é";
    $num3 = 1.0;
    echo " $num3";
 }