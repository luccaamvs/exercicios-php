<?php
class Carro { 

    private $marca;
    private $modelo; // CÓDIGO 1 carro.class.php
    private $placa;
    private $anoFabr;

    public function setCarro( $Marca, $Modelo, $Placa, $AnoFabr) {
        $this->marca = $Marca;
        $this->modelo = $Modelo;
        $this->placa = $Placa;
        $this->anoFabr = $AnoFabr; 
    }

    public function ligar() {
        echo "\nCarro Ligado!"; 
    }

    public function deligar(){
        echo "\nCarro Desligado!";
    }

    public function getMarca(){
        return $this->marca; 
    }

}