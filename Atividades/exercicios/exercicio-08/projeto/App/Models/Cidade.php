<?php

namespace App\Models;

class Cidade implements ModelInterface {

    private $id, $nome, $estado_id;


    public function __construct($id, $nome, $estado_id)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->estado_id = $estado_id;
      
    }

    public function __destruct()
    {
        
    }

    public function getAll() {


    }
    public function get($id){
        
    }
}