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
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<table  id="customers">
<?php
$abrir = fopen("formulario.txt", "r");

echo "<tr><td>Nome</td><td>Gênero</td><td>Data de Nascimento</td><td>Telefone</td><td>E-mail</td></tr>";

//Output lines until EOF is reached
while(!feof($abrir)) {
  $linha = json_decode(fgets($abrir),true);
  if ($linha !=null) {echo"<tr>";
 foreach($linha as $l){
     echo "<td>".$l."</td>";
 }
  echo"</tr>";

}}  
echo "</table>";
fclose($abrir);
?>
</body>
</html>