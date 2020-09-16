<?php

    echo "POST";
    var_dump($_POST);

    $user = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $area = $_POST['area'];

    echo "<h1>Olá, $user</h1>";
    echo "<p>Email: $email</p>";
    echo "<p>Endereço: $endereco</p>";
    echo "<p>CPF: $cpf</p>";
    echo "<p>Idade: $idade</p>";
    if($genero=="M"){
        echo "<p>Gênero: Masculino</p>"; 
    }
    if($genero=="F"){
        echo "<p>Gênero: Feminino</p>"; 
    }
    if($genero=="NB"){
        echo "<p>Gênero: Não Binário</p>"; 
    }
    if($genero=="SR"){
        echo "<p>Gênero: Não informado</p>"; 
    }
    for($i=0;$i<3;$i++){
        if($area[$i]=="on"){
            if($i==0){
            echo "<p>WEB</p>";
            }
            if($i==1){
            echo "<p>BANCO DE DADOS</p>";
            }
            if($i==2){
            echo "<p>REDES</p>";
            }
        }


    }
    
  
    //Controller
  

    echo "<a href=\"validacao-form.html\">Voltar</a>";