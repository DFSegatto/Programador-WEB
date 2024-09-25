<?php
    class Animal{
        public function emitirSom(){
            echo "Barulho Qualquer<br>";
        }
    }
    
    class Cachorro extends Animal{
        public function emitirSom(){
            echo "Auau<br>";
        }
    }

    class Gato extends Animal{
        public function emitirSom(){
            echo "Miau";
        }
    }

    $animal = new Animal();
    $cachorro = new Cachorro();
    $gato = new Gato();
    $animal->emitirSom();
    $cachorro->emitirSom();
    $gato->emitirSom();
?>