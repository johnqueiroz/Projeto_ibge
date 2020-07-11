<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$especificacoes = $_POST["Especificacoes_com_patrimonio"];
$patrimonio = $_POST["Patrimonio_equipamento"];
$serie = $_POST["Serial_equipamento"];
$data_recebimento= $_POST["Data_recebimento_com_patrimonio"];
$qtd_equipamentos_recebidos = $_POST["Quantidade_equipamento_com_patrimonio"];





$sql = "INSERT INTO eqp_compatrimonio (especificacoes, patrimonio, serial, data_recebimento, quantidade_recebidos) VALUES ('$especificacoes',' $patrimonio', '$serie', '$data_recebimento', '$qtd_equipamentos_recebidos')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM eqp_compatrimonio");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['especificacoes'], $tabela['patrimonio'], $tabela['serial'],  $tabela['data_recebimento'],  $tabela['quantidade_recebidos']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>