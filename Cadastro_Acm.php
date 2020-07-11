<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome = $_POST["Nome_acm"];
$email = $_POST["Email_acm"];
$telefone = $_POST["Telefone_acm"];
$postoDoAcm = $_POST["Posto_acm"];


$sql = "INSERT INTO acm_posto (nome_acm, email_acm, telefone_acm, posto_acm)";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}
echo '<script type="text/javascript">javascript:history.back()</script>';
?>