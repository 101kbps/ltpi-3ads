<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÁLCULO DE IMC</title>
</head>
<body>
    
<?php
    $peso= $_POST['peso'];
    $altura= $_POST['altura'];

	$altura = str_replace(',', '.', $altura);
	$peso = str_replace(',', '.', $peso);

	$peso = floatval($peso);	
	$altura = floatval($altura);	
	function calcula_imc($peso, $altura){
    $calcula_imc = $peso/pow($altura, 2);
    return number_format((float)$calcula_imc, 2, '.', '');

    }

	function imc($peso, $altura){
	$imc = $peso/pow($altura, 2);
    number_format((float)$imc, 2, '.', '');

	if ($imc < 17){
        return "está muito abaixo do peso";
        } else{
         if ($imc >= 17 &&  $imc < 18.49) {
            return "está abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 24.99) {
            return "está com peso normal";
        } elseif ($imc >= 25 && $imc < 29.99) {
            return "está acima do peso";
        } elseif ($imc>= 30 && $imc < 34.99) {
            return "está com obesidade I";
        } elseif ($imc >= 35 && $imc < 39.99) {
           return "está com obesidade II (severa)";
        } else {
            return "está com obesidade III (mórbida)";
        }
    }
 	}
	 printf($_POST['nome'].", seu IMC é de: ".calcula_imc($peso,$altura). ". Você: ".imc($peso,$altura).".");
    ?>
</body>
</html>