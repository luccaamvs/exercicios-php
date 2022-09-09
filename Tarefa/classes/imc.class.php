<?php
    class IMC {
        private $peso;
        private $altura;
    
        public function getImc($p, $a){
        $this->peso = $p;
        $this->altura = $a;

        $imc = $this->peso /($this->altura * $this->altura);
    
        return $imc;
        }
    
        public function getStatu($imc){
        if($imc < 0.00185) return ['Magreza','img/titi.jpg','img/titi.jpg'];
        if($imc >= 0.00185 && $imc <= 0.00249) return ['Normal','img/felizzz.jpg','img/felizzz.jpg'];
        if($imc >= 0.0025 && $imc <= 0.00299) return ['Sobrepeso','img/felizzz.jpg','img/titi.jpg'];
        if($imc >= 0.0030 && $imc <= 0.00349) return ['Obesidade grau I','img/titi.jpg','img/titi.jpg'];
        if($imc >= 0.0035 & $imc <= 0.00399) return ['Obesidade grau II','img/titi.jpg','img/titi.jpg'];
        if($imc >= 0.0040) return ['Obesidade grau III','img/titi.jpg','img/titi.jpg'];
        }
    }
?>