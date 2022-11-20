<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
    if(!isset($_GET['submit'])){
    ?> 
    <form action="media.php" method="GET">

        <label for="in_nome">Nome:</label>

        <input type="text" name="nome" id="in_nome">

        <br>

        <label for="in_nota1">Nota1</label>

        <input type="text" name="nota1" id="in_nota1">

        <br>

        <label for="in_nota2">Nota2</label>

        <input type="text" name="nota2" id="in_nota2">

        <br>

        <input type="submit" value="Calcular" name="bt_submit">

    </form>
<?php
    }
?>
</body>

</html>