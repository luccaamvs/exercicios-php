<?php
    abstract class Media { public $nota1; public $nota2;
        abstract public function getMedia ();
        abstract public function mostrarMedia ($tipo);

        public function setNotas ( $a , $b){ 
            $this->nota1 = $a;
            $this->nota2 = $b;
        }
    }

