<?php
    class Produto{
        private $nome;
        private $preco;
        private $estoque;

        public function __construct($nome, $preco, $estoque){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->estoque = $estoque;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function getEstoque(){
            return $this->estoque;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function setPreco($p){
            $this->preco = $p;
        }
        public function setEstoque($e){
            $this->estoque += $e;
        }

        public function Comprar(){
            $this->setEstoque(1);
            echo "Produto ".$this->getNome()." comprado por R$ ".$this->getPreco()."<br>";
        }
        public function Vender(){
            $this->setEstoque(-1);
            echo "Produto ".$this->getNome()." vendido por R$ ".$this->getPreco()."<br>";
        }
        public function EstoqueAtual(){
            echo "Estoque Atual do Produto ".$this->getNome().": ".$this->getEstoque()."<br>";
        }
    }

    $produto = new Produto("Celular",2000,2);
    $produto->EstoqueAtual();
    $produto->Comprar();
    $produto->Comprar();
    $produto->Vender();
    $produto->EstoqueAtual();
?>