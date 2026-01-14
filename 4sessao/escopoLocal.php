<?php 

//escopo local 

$x = 10;
Echo "$x é global <br>";

function teste(){

    $x = 5;
    echo "<br>";
    Echo "$x é local<br>";


}

teste();

?>