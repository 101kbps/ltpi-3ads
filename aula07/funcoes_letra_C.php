<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Letra C</title>
</head>
<body>
    <h1>Maior Número</h1>

    <?php
    $i=0;
    function maior_numero($i){
    $numeros = [1, 85, 3, 101, 39];
    foreach($numeros as $a){
        if($a > $i){
            $i = $a;
        }

    }

}
maior_numero(12)

    ?>
</body>
</html>