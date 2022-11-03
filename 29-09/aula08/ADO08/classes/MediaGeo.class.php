<?php require_once("Media.class.php");

    class MediaGeo extends Media {

        public $notaGeo;
        public $notaAri;  

        function __construct ($al, $n1, $n2){
            parent::__construct ($al, $n1, $n2);
        }

        function mostrar(){
            parent::mostrar(); 
            echo parent::mediaGeo(); 
        }

        function mediaGeo(){
            return $this -> notaGeo = sqrt($this -> nota1 * $this -> nota2);
        }

        function mediaAri(){
            $this-> notaAri = ($this -> nota1 + $this -> nota2) /2; 
            return $this->$notaAri;
        }

        function __destruct(){
             parent::__destruct();
            echo "<br> Media: " . $this-> notaGeo;
        }
    }

//Falta passar tudo pro form.