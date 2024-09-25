<?php
    class Pessoa{
        private $nome;
        private $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($i){
            $this->idade = $i;
        }
    }

    $pessoa = new Pessoa("Daniel", 23);
    echo $pessoa->getNome()."<br>";
    $pessoa->setNome("Rafael");
    echo $pessoa->getNome()."<br>";
    echo $pessoa->getIdade()."<br>";
    $pessoa->setIdade(20);
    echo $pessoa->getIdade();
?>