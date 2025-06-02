<?php
$host = '127.0.0.';
$user = 'jv';
$pass = '';
$db = 'meu_banco';

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_errno)


{
    echo "Error";
}

else{
    echo "Conexão efetuada com sucesso!";
}

  ?>
