<?php

    interface ICrud {
    public function criar ($sql);
    public function salvar ($sql);
    public function excluir ($sql);
    public function mostrar ($chave); 
    }

$obj = new Cliente("1","Eliseu");
$obj->criar("create table clientes (int chave, varchar nome(2))");