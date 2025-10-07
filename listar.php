?php
include 'conexao.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        echo "<tr>
        <td>{$row['ID']}</td>
        <td>{$row['NOME']}</td>
        <td>{$row['TELEFONE']}</td>
        <td>{$row['IDADE']}</td>
        <td>
        <a href='editar.php?id=".$row['ID']."'>Editar</a>
        <a href='deletar.php?id=".$row['ID']."'>Deletar</a>
        </td>
        </tr>";
         
    }

?>
