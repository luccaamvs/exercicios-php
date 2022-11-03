<?php
    abstract class Animal {
        abstract public function locomover(); // método abstrato

        public function organismo($animal){
            Echo "<br> O $animal é um organismo Pluricelular ";
        }
    }
    // fim da classe Mãe Animal

    class Cachorro extends Animal {

        public function locomover(){ 
            echo "<br> O cachorro é um animal que anda sobre 4 patas..."; 
        }

        public function organismo($animal){
            parent:: organismo($animal); 
        } 
    } 
    // Chamada polimórfica

    class Cobra extends Animal {

        public function locomover(){
            echo "<br> A Cobra é um animal rastejante sem patas "; 
        }

        public function organismo($animal){
            parent:: organismo($animal); 
        } 
    }

    // Chamada polimórfica
    $dog = new Cachorro(); $dog->locomover(); $dog->organismo("Cachorro");
    $cobra = new Cobra(); $cobra->locomover(); $dog->organismo("Cobra");