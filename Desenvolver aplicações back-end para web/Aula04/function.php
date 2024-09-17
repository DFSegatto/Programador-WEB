<?php
    function OlaMundo(){
        echo "Ola Mundo <br>";
    }
    //OlaMundo();

    function Saudacao($nome){
        echo "Ola ".$nome;
    }
    //Saudacao("Daniel");

    function multiplicacao($num1, $num2){
        return $num1 + $num2;
    }

    echo multiplicacao(10,2);
?>