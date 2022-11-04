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
    try {
        $pdo = new PDO("mysql:dbname=agenda;host=localhost", "root", "senac");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOexception $e) {
        echo "Erro com o Banco de Dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro genérico: " . $e->getMessage();
    }
    $res = $pdo->prepare("INSERT INTO tb_pessoa(ds_nome,cd_sexo,dt_nasc,nr_telefone,ds_email)
        VALUES (:n,:s,:ns,:t,:e)");

    $res->bindValue(":n", "Miriam");
    $res->bindValue(":s", "N");
    $res->bindValue(":ns", "1990-03-06");
    $res->bindValue(":t", "61996815559");
    $res->bindValue(":e", "carol_n_nv@hotmail.com");

    try {
        $qqr = $res->execute();
        echo $qqr;
    } catch (PDOexception $e) {
        echo "Erro genérico: " . $e->getMessage();
    }
    ?>


</body>

</html>