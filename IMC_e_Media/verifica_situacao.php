<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Situação do Aluno</title>
</head>
<body>
    
<?php
    $nota1= $_POST['nota1'];
    $nota2= $_POST['nota2'];

	$nota2 = str_replace(',', '.', $nota2);
	$nota1 = str_replace(',', '.', $nota1);

	$nota1 = floatval($nota1);	
	$nota2 = floatval($nota2);	

	function media($nota1, $nota2){
    $media = ($nota1+$nota2)/2;
    $media= number_format((float)$media, 2, '.', '');

    $color1 = "red";
    $color2 = "orange";
    $color3 = "blue";

    if ($media < 2){
        return '<div style="Color:'.$color1.'"><b>'.$media.'</div></b>';
        } else{
         if ($media < 6) {
            return '<div style="Color:'.$color2.'"><b>'.$media.'</div></b>';
        } else {
            return '<div style="Color:'.$color3.'"><b>'.$media.'</div></b>';
        }
    }


    }

	function situacao($nota1, $nota2){
    $situacao = ($nota1+$nota2)/2;
    number_format((float)$situacao, 2, '.', '');

	if ($situacao < 4){
        return "está reprovado por nota";
        } else{
         if ($situacao < 6) {
            return "terá que fazer o exame final";
        } else {
            return "está aprovado";
        }
    }
 	}

	 printf($_POST['nome'].", sua média é de: ".media($nota1,$nota2). " Você ".situacao($nota1,$nota2).".");
    ?>
</body>
</html>