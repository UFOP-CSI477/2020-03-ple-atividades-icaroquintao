<?php

namespace App\Models;

class Produto implements ModelInterface {

    private $id, $nome, $descricao, $um;


    public function __construct($id, $nome, $descricao, $um)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->um = $um;
    }

    public function __destruct()
    {
        
    }

    public function getAll() {


    }
    public function get($id){
        
    }
}