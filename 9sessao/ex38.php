<?php 
$str = "Você levou esses itens do super mercado: ";
function itens($arr){
   global $str;
    echo $str .= implode(", ", $arr). ".";
}

itens(["feijão", "trigo", "sal", "Vinagre"]);