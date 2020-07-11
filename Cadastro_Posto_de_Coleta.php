<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome_posto = $_POST["Nome_posto"];
$endereco_posto= $_POST["Endereco_posto"];
$subarea_pertencente = $_POST["Subarea_posto"];
$telefone_posto =$_POST["Telefone_posto"];




$sql = "INSERT INTO posto (nome_posto, endereco_posto, telefone_posto, subareaPertencente) VALUES ('$nome_posto', '$endereco_posto', '$telefone_posto', '$subarea_pertencente')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM posto");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['nome_posto'],  $tabela['endereco_posto'], $tabela['telefone_posto'], $tabela['subareaPertencente']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>