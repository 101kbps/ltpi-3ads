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
    if(!isset($_GET['submit'])){
    ?>    
    <form action="calcula_imc.php" method="Post">
    <p>Nome: <input type="text" name="nome" required /></p>
    <p>Altura(em m): <input type="text" name="altura" required/></p>
    <p>Peso (em kg): <input type="text" name="peso" required/></p>
    <p><input type="submit" /></p>
    
    </form>
    <?php
    }
    ?>
</body>
</html>