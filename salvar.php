<?php


$conexao = mysqli_connect("localhost", "root", "", "cervejaria");
if($conexao){
    echo'entrou';
}


$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];




$q = "INSERT INTO cliente (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";


if($conexao -> query($q) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $q . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM cliente");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['nome'], $tabela['email'], $tabela['telefone']. '<br/>';
} 

echo '<script type="text/javascript">javascript:history.back()</script>';

?>