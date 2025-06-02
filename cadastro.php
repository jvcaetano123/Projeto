
<?php

include_once('config.php');
if($conn->connect_error){
    die("Erro:".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $usuario = $_POST["email"];
    $senha = $_POST["senha"];
    $conn->query("INSERT INTO cadastros(nome, usuario, senha)
    VALUES ('$nome','$usuario','$senha')");
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
        <form action="Cadastro.php" method="POST"></form>
        
        <div class="h1">
            <h1>Cadastre-se</h1>
        </div>
        <div class="NAME">
            <form action="">
                <input type="text" name="nome" placeholder=  "NOME:">
            <i class='bx  bx-community'  ></i> 
        </form>
        </div>

        <div class="EMAIL">
        <form action="">
            <input type="text" name="usuario" placeholder=  "E-MAIL:">
            <i class='bx  bx-mail-open'  ></i> 
        </form>
        </div>

        <div class="PASSWORD">
        <form action="">
            <input type="password" name="senha" placeholder=  "SENHA:">
            <i class='bx  bx-lock'  ></i>  
        </form>
        </div>

        <div class="BTN">
        <form action="">
            <button type="submit">CADASTRAR</button>
        </form>
        </div>
        
        <a href="">Já possuio cadastro</a>

        

    </div>
    
</body>
</html>
