<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Programação<b>WEB</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Lista de produtos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="estadosViewInsert.php">Inserir produto <span class="sr-only">(current)</span></a>
                </li>
               



            </ul>

        </div>
    </nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Inserir dados de produtos</h1>
    <p class="lead">Insira os dados corretamente nos campos indicados.</p>
  </div>
</div>
    

    <form action="estadosControllerInsert.php" method="post">
        <div class="form-group">
        <label for="nome">Nome</label>
        <input lass="form-control form-control-lg" type="text" name="nome" id="nome" placeholder="Digite o nome do produto">
        </div>
        <div class="form-group">
        <label for="descricao">Descrição</label>
        <input lass="form-control form-control-lg" type="text" name="descricao" id="descricao" placeholder="Digite a descrição">
        </div>
        <div class="form-group">
        <label for="um">Unidade</label>
        <input lass="form-control form-control-lg" type="text" name="um" id="um" placeholder="Digite a unidade">
        </div>
 
        <input type="submit" value="Inserir"  class="btn btn-primary">

    </form>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>