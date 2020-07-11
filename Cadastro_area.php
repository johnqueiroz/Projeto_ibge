<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome_area = $_POST["Nome_area"];
$endereco_area= $_POST["Endereco_area"];
$telefone_area = $_POST["Telefone_area"];





$sql = "INSERT INTO area (nome_area, endereco_area, telefone_area) VALUES ('$nome_area', '$endereco_area', '$telefone_area')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM area");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['nome_area'],  $tabela['endereco_area'], $tabela['telefone_area']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>