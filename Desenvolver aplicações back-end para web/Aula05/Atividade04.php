<?php
    function areaRetangulo($base, $altura){
        return "Área do retângulo com base ".$base." e altura ".$altura." é: ".($base * $altura);
    }
    function areaCirculo($raio){
        define("PI", 3.1415);
        return "Área do circulo com raio ".$raio." é: ".(PI * ($raio * $raio));
    }
    function areaTriangulo($base, $altura){
        return "Área do triângulo com base ".$base." e altura ".$altura." é: ".(($base * $altura)/2);
    }
    echo areaRetangulo(10,5);
    echo "<br>".areaCirculo(3);
    echo "<br>".areaTriangulo(5,10);
?>