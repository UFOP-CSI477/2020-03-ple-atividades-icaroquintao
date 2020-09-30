<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade Prática 02</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#"> <i class="fas fa-tools"></i> <b>Manutenção</b> de Equipamentos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
           
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('principal')}}">Home </a>
                </li>
               
                <li class="nav-item ">
                    <a class="nav-link" href="">Área geral - Suporte </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">Área administrativa</a>
                </li>
              



            </ul>

        </div>
    </nav>

    @if(session('mensagem'))

    <div class="alert alert-success">
        {{session('mensagem')}}
    </div>

    @endif

    

   

    @yield('conteudo')

   

    <!--<div class="row ">

    <div class="col-3">

    </div>
    <div class="col">
        <img width="80%" src="https://www.solucoesindustriais.com.br/images/produtos/imagens_10329/manutencaoequipamentos_06-51-35.jpg" alt="IMG">
        Fonte:https://opas.org.br/como-calcular-imc-formula-classificacao-tabela-e-imc-infantil/ 
    </div>
    <div class="col-2">

    </div>
    </div>-->

   
  

    <footer class=" navbar bg-primary">
        <div>
            <p>Sistemas Web I - Atividade Prática 02 - Icaro Quintão EC-14.1.8083</p>
        </div>
    </footer>

