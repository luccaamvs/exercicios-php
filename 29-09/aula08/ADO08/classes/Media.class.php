<?php

    abstract class Media { 
        protected $nota1;
        protected $nota2;
        protected $aluno;

    function __construct ($al, $n1, $n2){
        $this->aluno = $al; 
        $this->nota1 = $n1;
        $this->nota2 = $n2;
    }

    abstract public function mediaGeo();

    abstract public function mediaAri();

    function mostrar() {
        echo $this->aluno . "<br>"; 
    }
    function __destruct() {
        echo "<br>Programa média finalizado!";
    }
}