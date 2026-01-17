<?php

$velocidade = 80;

if($velocidade < 40){
    echo "Você está na velocidade correta<br>";
}
else if ($velocidade == 40 ) {
    echo "Cuidado<br>";
}
else{
    echo "Você levou uma multa por estar acima do limite de velocidade<br>";
}