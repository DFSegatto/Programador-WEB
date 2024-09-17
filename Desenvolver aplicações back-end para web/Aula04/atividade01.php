<?php
    function adicao($num1, $num2){
        return $num1 + $num2;
    }

    function subtracao($num1, $num2){
        return $num1 - $num2;
    }

    function multiplicacao($num1, $num2){
        return $num1 * $num2;
    }

    function divisao($num1, $num2){
        if($num1 == 0 || $num2 == 0){
            return "Impossível realizar operação de divisão com o número digitado. (0)";
        }
        return $num1 / $num2;
    }
    
    echo "Adição: ".adicao(10,2)
        ."<br>Subtração: ".subtracao(10,2)
        ."<br>Multiplicação: ".multiplicacao(10,2)
        ."<br>Divisão com 0: ".divisao(10,0)
        ."<br>Divisão: ".divisao(10,2);
?>