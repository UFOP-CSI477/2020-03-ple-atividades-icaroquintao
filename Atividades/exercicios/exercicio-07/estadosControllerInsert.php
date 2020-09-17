<?php

    require 'conection.php';

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $um = $_POST['um'];

    if(empty($nome) || empty($descricao) || empty($um)){

        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Programação<b>WEB</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             
              
                <li class="nav-item">
                    <a class="nav-link" href="estadosViewInsert.php">Voltar <span class="sr-only">(current)</span></a>
                </li>
               



            </ul>

        </div>
    </nav>';

        die('
        <div class="alert alert-danger" role="alert">
        Informe os dados corretamente!
</div>
        ');

    }
    try{

        $connection->beginTransaction();

        $stmt = $connection->prepare( "INSERT INTO produto (nome, descricao, um) VALUES (:nome, :descricao, :um)");

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':um', $um);

        $stmt->execute();
        $connection->commit();
        header('Location: index.php');
        exit();
    } catch(Exception $e){

        $connection->rollBack();
        die("Erro ao inserir o estado: ". $e->getMessage());
    }