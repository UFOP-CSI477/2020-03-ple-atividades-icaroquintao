<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Programação<b>WEB</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Lista de produtos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="estadosViewInsert.php">Inserir produto</a>
                </li>
               



            </ul>

        </div>
    </nav>

    <h1>Lista de produtos</h1>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">



<caption>Tabela 01 - Produtos</caption>

<thead>

    <tr class="thead-dark">
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Unidade</th>
      
    </tr>
</thead>

    <tbody>
        <?php 
            while($e = $estados->fetch()) {
                echo "<tr class='table-primary'>";
                echo "<td>" .$e["id"] ."</td>\n";
                echo "<td>" .$e["nome"] ."</td>\n";
                echo "<td>" .$e["sigla"] ."</td>\n";
                echo "</tr>";
                
            }
        ?>
    </tbody>



    </table>
    </div>
    
</body>
</html>