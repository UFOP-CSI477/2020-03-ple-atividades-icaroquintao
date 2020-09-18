<?php

require '../vendor/autoload.php';

use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Produto;
use App\Database\Connection;
use App\Database\AdapterSQLite;



$estado = new Estado(1, "Minas Gerais", "MG");
$cidade = new Cidade(1, "João Monlevade", 13);
$produto = new Produto(1, "Teclado","Peças de notebook", "Peça - pç");

var_dump($estado);

$estados = $connection->query("SELECT * FROM estados");

$connection = new Connection(new AdapterSQLite());
var_dump($connection);

$connection->getAdapter()->open();
$connection->getAdapter()->get();
$connection->getAdapter()->close();

require '../App/Views/estadosView.php';