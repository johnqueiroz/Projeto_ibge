<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$especificacoes_subarea = $_POST["especificacoes_subarea"];
$patrimonio_subarea = $_POST["patrimonio_subarea"];
$serie_subarea = $_POST["serie_subarea"];
$prev_saida_subarea= $_POST["prev_saida_subarea"];
$prev_chegada_subarea = $_POST["prev_chegada_subarea"];
$qtd_para_chegar_subarea= $_POST["quant_chegada_subarea"];
$qual_subarea= $_POST["QualSubarea"];



$sql = "INSERT INTO epq_por_subarea (especificacoes_eqp_subarea, patrimonio_eqp_subarea, serial_eqp_subarea, previsao_eqp_saida_subarea, previsao_eqp_chegada_subarea, quantidade_eqp_subarea, eqp_subarea) VALUES 
('$especificacoes_subarea',' $patrimonio_subarea', '$serie_subarea', '$prev_saida_subarea', '$prev_chegada_subarea', '$qtd_para_chegar_subarea', '$qual_subarea')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM epq_por_subarea");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['especificacoes_eqp_subarea'], $tabela['patrimonio_eqp_subarea'], $tabela['serial_eqp_subarea'],  $tabela['previsao_eqp_saida_subarea'],  $tabela['previsao_eqp_chegada_subarea'],  $tabela['quantidade_eqp_subarea'], $tabela['eqp_subarea']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>