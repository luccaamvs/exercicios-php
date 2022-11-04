<?php
    class Retangulo {
        protected $m_largura;
        protected $m_altura;
        
        public function setLargura ( $largura ){ 
            $this->m_largura = $largura;
        }

        public function setAltura ($altura ){ 
            $this->m_altura = $altura; 
        }

        public function getArea() {
        return ($this->m_largura * $this->m_altura); }
    }