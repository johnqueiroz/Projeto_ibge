<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$especificacoes_posto = $_POST["especificacoes_posto"];
$patrimonio_posto = $_POST["patrimonio_posto"];
$serie_posto = $_POST["serie_posto"];
$prev_saida_posto= $_POST["prev_saida_posto"];
$prev_chegada_posto = $_POST["prev_chegada_posto"];
$qtd_para_chegar_posto= $_POST["quant_chegada_posto"];
$qual_posto= $_POST["QualPosto"];



$sql = "INSERT INTO epq_por_posto (especificacoes_eqp_posto, patrimonio_eqp_posto, serial_eqp_posto, previsao_eqp_saida_posto, previsao_eqp_chegada_posto, quantidade_eqp_posto, eqp_posto) VALUES 
('$especificacoes_posto',' $patrimonio_posto', '$serie_posto', '$prev_saida_posto', '$prev_chegada_posto', '$qtd_para_chegar_posto', '$qual_posto')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM epq_por_posto");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['especificacoes_eqp_posto'], $tabela['patrimonio_eqp_posto'], $tabela['serial_eqp_posto'],  $tabela['previsao_eqp_saida_posto'],  $tabela['previsao_eqp_chegada_posto'],  $tabela['quantidade_eqp_posto'], $tabela['eqp_posto']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>