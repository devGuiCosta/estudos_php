<?php

$nome = "devGuiCosta";
$horas = 12.3;
$idade = 17;

if (is_float($horas)) {
    echo "Olá meu nome é $nome, tenho $idade anos.</br>";
} else {
    echo "Olá meu nome é $nome e trabalho $horas horas por dia.</br>";
}

if (is_float($idade)) {
    echo "Olá meu nome é $nome, tenho $idade anos.";
} else {
    echo "Olá meu nome é $nome e trabalho $horas horas por dia.</br>";
}
