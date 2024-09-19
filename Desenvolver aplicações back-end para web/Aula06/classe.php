<?php
    class Carro{
        //Atributos do Carro
        private $marca;
        private $modelo;
        private $cor;
        private $ano;
        private $VelocidadeAtual = 0;

        //Contrutor da Classe
        public function __construct($marca,$modelo,$cor,$ano){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->ano = $ano;
        }
        
        //Metodos da Classe
        public function acelerar($velocidade){
            $this->VelocidadeAtual += $velocidade;
            echo "Vruuuuuum! Velocidade: ".$this->VelocidadeAtual."<br>"; 
        }

        //Getters e Setters
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

        public function getCor(){
            return $this->cor;
        }
        public function setCor($cor){
            $this->cor = $cor;
        }

        public function getAno(){
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }

    }
    
    //Carro do João
    $CarroJoao = new Carro("VolksWagen","Gol","Preto",2013);
    $CarroJoao->setMarca("Renault");
    echo "Marca: ".$CarroJoao->getMarca()."<br>";
    echo "Modelo: ".$CarroJoao->getModelo()."<br>";
    echo "Cor: ".$CarroJoao->getCor()."<br>";
    echo "Ano: ".$CarroJoao->getAno()."<br>";

    $CarroJoao->acelerar(50);
    $CarroJoao->acelerar(50);

    //Carro Mauro
    $CarroMauro = new Carro("Ferrari","458","Vermelho",2015);
    echo $CarroMauro->getModelo();
?>