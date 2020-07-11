<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome_subarea = $_POST["Nome_subarea"];
$endereco_subarea= $_POST["Endereco_subarea"];
$telefone_subarea = $_POST["Telefone_subarea"];
$area_pertence =$_POST["Area_pertencente"];




$sql = "INSERT INTO subarea (nome_subarea, endereco_subarea, telefone_subarea, areaPertencente) VALUES ('$nome_subarea', '$endereco_subarea', '$telefone_subarea', '$area_pertence')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM subarea");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['nome_subarea'],  $tabela['endereco_subarea'], $tabela['telefone_subarea'], $tabela['areaPertence']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>