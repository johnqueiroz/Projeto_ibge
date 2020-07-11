<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome_acm = $_POST["Nome_acm"];
$email_acm = $_POST["Email_acm"];
$telefone_acm = $_POST["Telefone_acm"];
$postoDoAcm_acm = $_POST["Posto_acm"];


$sql = "INSERT INTO acm_posto (nome_acm, email_acm, telefone_acm, posto_acm) VALUES ('$nome_acm', '$email_acm', '$telefone_acm', '$postoDoAcm_acm')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM acm_posto");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['nome_acm'],  $tabela['email_acm'], $tabela['telefone_acm'], $tabela['posto_acm']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>