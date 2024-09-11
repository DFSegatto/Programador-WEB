<?php
$frutas = array("Morango","Banana","Abacaxi");
echo $frutas[1]."<br>";

$idades = array("João" => 24, "Guilherme" => 17, "Cleiton" => 79);
echo $idades["João"]."<br>";

$aux = 0;

while($aux < 3){
    echo $frutas[$aux].", ";
    $aux++;
}

?>
