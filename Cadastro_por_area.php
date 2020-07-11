<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$especificacoes_area = $_POST["especificacoes_area"];
$patrimonio_area = $_POST["patrimonio_area"];
$serie_area = $_POST["serie_area"];
$prev_saida_area= $_POST["prev_saida_area"];
$prev_chegada_area = $_POST["prev_chegada_area"];
$qtd_para_chegar_area= $_POST["quant_chegada_area"];
$qual_area= $_POST["QualArea"];



$sql = "INSERT INTO epq_por_area (especificacoes_eqp_area, patrimonio_eqp_area, serial_eqp_area, previsao_eqp_saida, previsao_eqp_chegada, quantidade_eqp_area, eqp_area) VALUES 
('$especificacoes_area',' $patrimonio_area', '$serie_area', '$prev_saida_area', '$prev_chegada_area', '$qtd_para_chegar_area', '$qual_area')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM epq_por_area");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['especificacoes_eqp_area'], $tabela['patrimonio_eqp_area'], $tabela['serial_eqp_area'],  $tabela['previsao_eqp_saida'],  $tabela['previsao_eqp_chegada'],  $tabela['quantidade_eqp_area'], $tabela['eqp_area']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>