<?php
    $numero = 7;
    $count = 1;
    $fatorial = 1;
    while ($count <= $numero) {
        $fatorial *= $count;
        $count++;
    }
    echo "Fatorial de ".$numero." é: ".$fatorial;
?>