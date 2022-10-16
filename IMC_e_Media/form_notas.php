<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO NOTAS  </title>
</head>
<body>
<?php
    if(!isset($_GET['submit'])){
    ?>    
    <form action="verifica_situacao.php" method="Post">
    <p>Nome do aluno(a): <input type="text" name="nome" required /></p>
    <p>Nota 1: <input type="text" name="nota1" required/></p>
    <p>Nota 2: <input type="text" name="nota2" required/></p>
    <p><input type="submit" /></p>
    
    </form>
    <?php
    }
    ?>
</body>
</html>