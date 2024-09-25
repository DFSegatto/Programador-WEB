<?php
    class Estudante{
        private $nome;
        private $nota1;
        private $nota2;

        public function __construct($nome, $nota1, $nota2){
            $this->nome = $nome;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
        }

        public function CalcularMedia(){
            if((($this->nota1 + $this->nota2)/2) < 7){
                echo "Reprovado";
                return;
            }
            echo "Aprovado";
        }
    }

    $aluno = new Estudante("Daniel",7,6);
    $aluno->CalcularMedia();
?>