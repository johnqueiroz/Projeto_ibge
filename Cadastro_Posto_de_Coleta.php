<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nomeDoPostoColeta = $_POST["Nome_posto"];
$enderecoPostoColeta = $_POST["Endereco_posto"];
$subareaPosto = $_POST["Subarea_posto"];
$telefonePosto = $_POST["Telefone_posto"];




$sql = "INSERT INTO posto (nome_posto, endereco_posto, subareaPertencente, telefone_posto)";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>