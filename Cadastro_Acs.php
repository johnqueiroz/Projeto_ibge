<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome = $_POST["Nome_acs"];
$email = $_POST["Email_acs"];
$telefone = $_POST["Telefone_acs"];
$postoDoAcs = $_POST["Posto_acs"];



$sql = "INSERT INTO acs_posto (nome_acs, email_acs, telefone_acs, posto_acs)";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>