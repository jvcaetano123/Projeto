php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['telefone'];
        

        $sql = "UPDATE contatos SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE ID = $id";
        $conn->query($sql);

        header("Location: index.php");
        exit;
    }else{
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM contatos WHERE ID = $id");
        $row = $result->fetch_assoc();
    }
?>

    <form action="adicionar.php" methoid="POST">
            
        <input  type= "hidden" name="id" value="<?=$row['id']?> required>
        <input type = "text" name="nomr" value="<?=$row[' nome']?> required>
        <input type = "email" name ="email" value="<?=$row[' telefone']?> required>
        <input type= "text" name = "telefone" value="<?=$row[' idade']?> required>
        <button type = "submit">SALVAR</button>
    </form>
