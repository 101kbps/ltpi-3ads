<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO IMC</title>
</head>
<body>

   <?php
    if(!isset($_GET["nome"])){
    ?>    
    <form action="calcula_imc.php" method="Post">
    <p>Nome: <input type="text" nome="nome" /></p>
    <p>Idade: <input type="text" nome="idade" /></p>
    <p><input type="submit" /></p>
    
    </form>
    <?php
    }else{
    
    }
    ?>
</body>
</html>