<?php
//Exemplo While Simples
$contador = 0 ;
while($contador < 5){
    echo "<br>".$contador;
    $contador++;
}

//Exemplo While Fatorial
$numero = 5;
$contador = 1;
$fatorial = 1;
while($contador <= $numero){
    $fatorial *= $contador;
    $contador++;
}

echo "<br>".$fatorial;
?>