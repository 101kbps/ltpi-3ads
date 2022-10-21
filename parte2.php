<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando os dados do formulário</title>
</head>
<body>

<?php
    $pessoa["nome"]= $_POST['nome'];
    $pessoa["genero"]= $_POST['genero'];
    $pessoa["data_nasc"]= $_POST['nasc'];
    $pessoa["telefone"]= $_POST['telefone'];
    $pessoa["email"]= $_POST['email'];

	$linha= json_encode($pessoa).chr(13).chr(10);
    $arq=fopen("formulario.txt","a");
    fwrite($arq,$linha);
    fclose($arq);


    ?>

<?php
$abrir = fopen("formulario.txt", "r");
echo "<table>";

//Output lines until EOF is reached
while(! feof($abrir)) {
  $linha = json_decode(fgets($abrir),true);
  var_dump($linha);
  echo"<tr>";
 foreach($linha as $l){
     echo "<td>".$l."</td>";
 }
  echo"</tr>";

}
echo "</table>";
fclose($abrir);
?>
</body>
</html>