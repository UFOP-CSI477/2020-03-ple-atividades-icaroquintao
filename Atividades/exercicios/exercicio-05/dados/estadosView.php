<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estados</title>
</head>
<body>


<a href="estadosViewInsert.php">Inserir</a>

<h1>Lista de estados</h1>

<table border="1">

<caption>Tabela 01</caption>

<thead>

    <tr>
      
        <th>Nome</th>
      
    </tr>
</thead>

    <tbody>
        <?php 
            while($e = $estados->fetch()) {
                echo "<tr>";
                echo "<td>" .$e["nome"] ."-". $e["sigla"] . "</td>\n";
                echo "</tr>";
            }
        ?>
    </tbody>



    </table>
    
</body>
</html>