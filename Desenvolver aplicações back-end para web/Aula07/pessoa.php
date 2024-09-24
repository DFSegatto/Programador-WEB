<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $altura;

        public function __construct($nome, $idade, $altura){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $altura;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getIdade(){
            return $this->nome;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function Correr(){
            echo  $this->nome." Está correndo<br>";
        }

        public function Dormir(){
            echo $this->nome." Está dormindo<br>";
        }
    }

    class Aluno extends Pessoa{
        private $matricula;

        public function __construct($nome, $idade, $altura, $matricula){
            parent::__construct($nome, $idade, $altura);
            $this->matricula = $matricula;
        }

        public function getMatricula(){
            return $this->matricula;
        }
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function Estudar(){
            echo $this->getNome()." está estudando!<br>";
        }
    }

    class Professor extends Pessoa{
        private $salario;

        public function __construct($nome, $idade, $altura, $salario){
            parent::__construct($nome, $idade, $altura);
            $this->salario = $salario;
        }

        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }

        public function Avaliar(){
            echo $this->getNome()." está avaliando!<br>";
        }
    }

    $pessoa1 = new Pessoa("Daniel", 23, 1.70);
    $pessoa2 = new Aluno("João", 18, 1.75,123);
    $pessoa3 = new Professor("Maria", 22, 1.50, 1500);
    $pessoa1->Correr();
    $pessoa1->Dormir();
    $pessoa2->Correr();
    $pessoa2->Dormir();
    $pessoa2->Estudar();
    $pessoa3->Avaliar();

?>