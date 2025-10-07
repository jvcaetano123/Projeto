<?php
include 'conexao.php';
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];


$sql = "INSERT INTO usuarios (NOME, TELEFONE, IDADE) VALUES ('$nome', '$telefone', '$idade')";
$conn->query($sql);

header("Location: index.php");


?>
