<?php
    class Calculadora{
        public function Adicao($n1, $n2){
            echo "$n1 + $n2 = ".($n1 + $n2)."<br>";
        }
        public function Substracao($n1, $n2){
            echo "$n1 - $n2 = ".($n1 - $n2)."<br>";
        }
        public function Multiplicacao($n1, $n2){
            echo "$n1 * $n2 = ".($n1 * $n2)."<br>";
        }
        public function Divisao($n1, $n2){
            if($n1 == 0 || $n2 == 0){
                echo "Divisão não permitida";
                return;
            }
            echo "$n1 / $n2 = ".($n1 / $n2)."<br>";
        }
    }

    $calculadora = new Calculadora();
    $calculadora->Adicao(10,5);
    $calculadora->Substracao(10,5);
    $calculadora->Multiplicacao(10,5);
    $calculadora->Divisao(10,5);
?>