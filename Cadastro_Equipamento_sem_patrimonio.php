<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$especificacoes2 = $_POST["Especificacoes_sem_patrimonio"];
$data_recebimento2= $_POST["Data_recebimento_sem_patrimonio"];
$qtd_equipamentos_recebidos2 = $_POST["Quantidade_equipamento_sem_patrimonio"];





$sql = "INSERT INTO eqp_sempatrimonio (especificacoes, data_recebimento, quantidade_recebidos) VALUES ('$especificacoes2','$data_recebimento2', '$qtd_equipamentos_recebidos2')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM eqp_compatrimonio");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['especificacoes'], $tabela['data_recebimento'],  $tabela['quantidade_recebidos']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>