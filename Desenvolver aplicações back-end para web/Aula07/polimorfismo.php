<?php
    class Animal{
        public function fazerSom(){
            echo "Burulho Genérico<br>";
        }
    }

    class Cachorro extends Animal{
        public function fazerSom(){
            echo "Auau<br>";
        }
    }

    class Gato extends Animal{
        public function fazerSom(){
            echo "Miau<br>";
        }
    }

    $meuCachorro = new Cachorro();
    $meuGato = new Gato();

    $meuCachorro->fazerSom();
    $meuGato->fazerSom();
?>