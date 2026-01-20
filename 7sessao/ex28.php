<?php
 $contador = 4;

 while($contador <= 30){
    echo $contador . "<br>";
    $contador= $contador + 2; 
    if ($contador == 24){
        break;
    }
 }