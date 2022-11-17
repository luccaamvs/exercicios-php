<?php
class Cliente implements ICrud {
    public $chave;
    public $nome;

    public function _construct ( $chave, $nome ){ 
        $this->$chave = $chave; $this->$nome = $nome; 
    }
        public function criar ($sql) { echo $sql; }
        public function salvar ($sql) { echo $sql; }
        public function excluir ($sql) { echo $sql; }
        public function mostrar ($chave) { echo $sql; } 
    }