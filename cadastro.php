
<?php

include_once('config.php');
if($conn->connect_error){
    die("Erro:".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $conn->query("INSERT INTO cadastros(nome, usuario, senha)
    VALUES ('$nome','$email','$senha')");
}
      

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <title>cadastro</title>
</head>
<body>
    <div class="container">

        <div class="h1">
            <h1>Cadastre-se</h1>
        </div>

        <form action="Cadastro.php" method="POST">

            <div class="NAME">
                <input type="text" name="nome" placeholder=  "NOME:">
                <i class='bx  bx-community'  ></i> 
            </div>

            <div class="EMAIL">
                <input type="text" name="email" placeholder=  "E-MAIL:">
                <i class='bx  bx-mail-open'  ></i> 
            </div>

            <div class="PASSWORD">
                <input type="password" name="senha" placeholder=  "SENHA:">
                <i class='bx  bx-lock'  ></i>  
            </div>

            <div class="BTN">
                <button type="submit">CADASTRAR</button>
            </div>

        </form>
        
        <a href="login.html">Já possuio cadastro</a>

        

    </div>
    
</body>
</html>
