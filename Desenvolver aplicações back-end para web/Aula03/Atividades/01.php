<?php
    $numeros = array(10,10,9.5,9,9);
    $media = 0;
    foreach ($numeros as $numero) {
        $media += $numero;
    }
    $media /= sizeof($numeros);

    if($media <= 7){
        echo "Média maior que 7. <br>Sua média é: ".$media;
    }else{
        echo "Média menor que 7. <br>Sua média é: ".$media;
    }
?>