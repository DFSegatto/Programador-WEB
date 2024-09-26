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
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
    }

    class Aluno extends Pessoa{
        private $matricula;

        public function __construct($nome, $idade, $matricula){
            parent::__construct($nome, $idade);
            $this->matricula = $matricula;           
        }

        public function getMatricula(){
            return $this->matricula;
        }
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }
    }

    class Professor extends Pessoa{
        private $salario;

        public function __construct($nome, $idade, $salario){
            parent::__construct($nome, $idade);
            $this->salario = $salario;
        }

        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
    }

    $aluno = new Aluno("Aluno",20,123);
    $professor = new Professor("Professor",30,1000);
    echo "<br>Nome: ".$aluno->getNome()."<br>Idade: ".$aluno->getIdade()."<br>Matricula: ".$aluno->getMatricula();
    echo "<br>Nome: ".$professor->getNome()."<br>Idade: ".$professor->getIdade()."<br>Salario: ".$professor->getSalario();
?>