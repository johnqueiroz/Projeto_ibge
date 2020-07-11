<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$especificacoes_UE = $_POST["especificacoes_UE"];
$patrimonio_UE = $_POST["patrimonio_UE"];
$serie_UE = $_POST["serie_UE"];
$prev_saida_UE= $_POST["prev_saida_UE"];
$prev_chegada_UE = $_POST["prev_chegada_UE"];
$qtd_para_chegar_UE= $_POST["quant_chegada_UE"];



$sql = "INSERT INTO epq_por_ue (especificacoes_eqp_UE, patrimonio_eqp_UE, serial_eqp_UE, previsao_eqp_saida_UE,	previsao_eqp_chegada_UE, quantidade_eqp_UE) VALUES 
('$especificacoes_UE',' $patrimonio_UE', '$serie_UE', '$prev_saida_UE', '$prev_chegada_UE', '$qtd_para_chegar_UE')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM epq_por_ue");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['especificacoes_eqp_UE'], $tabela['patrimonio_eqp_UE'], $tabela['serial_eqp_UE'],  $tabela['previsao_eqp_saida_UE'],  $tabela['previsao_eqp_chegada_UE'],  $tabela['quantidade_eqp_UE']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>