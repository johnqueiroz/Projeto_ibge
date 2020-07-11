<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome_acs = $_POST["Nome_acs"];
$email_acs = $_POST["Email_acs"];
$telefone_acs = $_POST["Telefone_acs"];
$postoDoAcs_acs = $_POST["Posto_acs"];


$sql = "INSERT INTO acs_posto (nome_acs, email_acs, telefone_acs, posto_acs) VALUES ('$nome_acs', '$email_acs', '$telefone_acs', '$postoDoAcs_acs')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM acs_posto");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['nome_acs'],  $tabela['email_acs'], $tabela['telefone_acs'], $tabela['posto_acs']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>