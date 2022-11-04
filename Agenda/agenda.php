<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <?php
    try
     {
        $pdo= new PDO("mysql:dbname=agenda;host=localhost","root","senac");
    }
    catch(PDOexception $e){
        echo"Erro com o Banco de Dados: ".$e->getMessage();

    }
    catch(Exception $e)
    {
        echo"Erro genérico: ".$e->getMessage();
    }



    ?>
</body>
</html>