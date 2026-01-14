<?php 
// array associativo
$pessoa = [
    "nome" => "Marcos Guilherme",
    "idade" => 17,
    "cidade" => "Fortaleza"
];

echo $pessoa["nome"];
echo "</br>";
echo $pessoa["cidade"];      
echo "</br>";
if (($pessoa["idade"] < 18)) {
    echo "</br>";
    echo "O {$pessoa["nome"]} é menor de idade por ter {$pessoa["idade"]} anos.";
    }
?>