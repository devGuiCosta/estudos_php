<?php 

$arr= [
    "porta" => 100,
    "janela" => 50,
    "teto" => 200,
    "piso" => 8,
    "toalha" => 3
];

function maiorQue10($arr){
    $resultado =[];
    foreach($arr as $item => $valor){
        if($valor >10){
            $resultado[$item] = $valor;
        }
    }
    return $resultado;
}

maiorQue10($arr);

print_r(maiorQue10($arr));