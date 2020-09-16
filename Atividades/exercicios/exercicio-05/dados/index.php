<?php

    require_once 'conection.php';

    //var_dump($connection);

    // Controller -> Model
    $estados = $connection->query("SELECT * FROM estados");

    //var_dump($estados->fetchAll());

    //View
    require 'estadosView.php';