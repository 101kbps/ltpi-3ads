<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte2</title>
  

  
</head>
  
<style>
h3 {
    text-align: center;
}

body{ background-color: #e5e5f7;
opacity: 0.7;
background-image:  linear-gradient(30deg, #a5a8e0 12%, transparent 12.5%, transparent 87%, #a5a8e0 87.5%, #a5a8e0), linear-gradient(150deg, #a5a8e0 12%, transparent 12.5%, transparent 87%, #a5a8e0 87.5%, #a5a8e0), linear-gradient(30deg, #a5a8e0 12%, transparent 12.5%, transparent 87%, #a5a8e0 87.5%, #a5a8e0), linear-gradient(150deg, #a5a8e0 12%, transparent 12.5%, transparent 87%, #a5a8e0 87.5%, #a5a8e0), linear-gradient(60deg, #a5a8e077 25%, transparent 25.5%, transparent 75%, #a5a8e077 75%, #a5a8e077), linear-gradient(60deg, #a5a8e077 25%, transparent 25.5%, transparent 75%, #a5a8e077 75%, #a5a8e077);
background-size: 58px 102px;
background-position: 0 0, 0 0, 29px 51px, 29px 51px, 0 0, 29px 51px;
font-family: 'Courier New', monospace;
}

img {
    display: block;
    margin: auto;
    height: 150px;
    width: 150px;
}

.input {
    margin: 6px;
    padding: 10px;
    display: block;
    margin: auto;
    color: palevioletred;
    font-size: 30px;
}

input {
    width: 90%;
    display: block;
    margin-left: 12px;
    background: none;
    background-color: #B6E5E6;
}

.radio {
    width: 90%;
    display: block;
    margin-left: 16px;
    background: none;
    background-color: #8BA0E6;

}

select {
    width: 90%;
    display: block;
    margin-left: 12px;
    background: none;
    background-color: #90DCDE;
}

#heading {
    font-family: sans-serif;
    text-align: center;
    color: Black;
    padding-top: 20px;

}

#form_page {
    height: 500px;
    width: 50%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    margin: auto;

}

#form_body {
    border-radius: 12px;
    height: 450px;
    width: 450px;
    background-color: #8BA0E6;
    border: 1px solid pink;
    margin: auto;
    margin-top: 12px;
}

#text {
    color: black;
    width: 100px;
}

#head {
    border-bottom: 2px solid aliceblue;
    height: 100px;
    background-color: aliceblue;
}

#submit {
    background-color: white;
    width: 70px;
}
</style>
<body>
  
    <form method="post" action="parte2.php">
  
        <div id="form_page">
  
            <div id="form_body">
                <div id="head">
                    <h1 id="heading">Formulário de Cadastro</h1>
                </div>
                <br />
                <div id="input_name" class="input">
                    <input id="name" type="text" 
                        Placeholder="Nome" name="nome" 
                        required>
                </div>
                <div id="input_genero" class="radio">
                <input type="radio" id="masculino" name="genero" value="masculino">
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="femilino" name="genero" value="feminino">
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="nao_informado" name="genero" value="nao_informado" checked>
                <label for="nao_informado">Prefiro Não Informar</label><br>
                </div>
                <div id="input_datanasc" class="input">
                    <input id="nasc" type="text" 
                        name="nasc" 
                        placeholder="Data de Nascimento" required>
                </div>
                <div id="input_telefone" class="input">
                    <input id="telefone" type="text" 
                        name="telefone" 
                        placeholder="Telefone com DDD" required>
                </div>               
                 <div id="input_email" class="input">
                    <input id="email" type="text" 
                        name="email" 
                        placeholder="Email" required>
                </div>
  
                <div class="id input">
                    <input id="submit" type="submit" 
                        name="submit" value="submit" 
                        onclick="on_submit()">
                </div>

            </div>
        </div>
    </form>
  
</body>
  
</html>