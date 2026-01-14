<?php 

$nome = "Guilherme";
echo $nome;

$cliente =& $nome;
echo "<br>";

echo $cliente;
echo "<br>";
echo "<br>";
echo "<br>";

echo "var dps de ref <br>";
$cliente = "Marcos";
echo "<br>";echo "<br>";
echo $nome;
echo "<br>";
echo $cliente;

?>