<?php
    class Carro{
        private $marca;
        private $modelo;
        private $ano;
        private $velocidadeAtual = 0;

        public function __construct($marca, $modelo, $ano){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        public function getAno(){
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }
        public function getVelocidadeAtual(){
            return $this->velocidadeAtual;
        }
        public function setVelocidadeAtual($velocidadeAtual){
            $this->velocidadeAtual = $velocidadeAtual;
        }


        public function Acelerar($a){
            echo "Acelerando...<br>";
            $this->velocidadeAtual += $a;
        }
        public function Frear($f){
            if($this->getVelocidadeAtual() == 0){
                echo "Carro já está parado!<br>";
                return;
            }
            echo "Freando...<br>";

            if($this->velocidadeAtual - $f < 0){
                $this->setVelocidadeAtual(0);
                return;
            }
        }
        public function VelocidadeAtual(){
            echo "Velocidade atual: ".$this->getVelocidadeAtual()."<br>";
        }
    }

    $carro = new Carro("Marca","Modelo",2024);
    $carro->VelocidadeAtual();
    $carro->Acelerar(10);
    $carro->VelocidadeAtual();
    $carro->Acelerar(33);
    $carro->VelocidadeAtual();
    $carro->Frear(55);
    $carro->VelocidadeAtual();
    $carro->Frear(1);
    $carro->VelocidadeAtual();
    $carro->Acelerar(26);
    $carro->VelocidadeAtual();
?>