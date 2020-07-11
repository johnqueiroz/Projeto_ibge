<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome_coord_subarea = $_POST["Nome_ccs"];
$siape_coord_subarea= $_POST["Siape_ccs"];
$email_coord_subarea = $_POST["Email_ccs"];
$telefone_coord_subarea = $_POST["Telefone_ccs"];
$subarea_coord = $_POST["Subarea_ccs"];




$sql = "INSERT INTO coord_subarea (nome_CoordSubarea, email_CoordSubrea, telefone_CoordSubarea, siape_Subarea, Subarea_coord) VALUES ('$nome_coord_subarea','$email_coord_subarea', '$telefone_coord_subarea', '$siape_coord_subarea', '$subarea_coord')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM coord_subarea");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['nome_CoordSubarea'], $tabela['email_CoordSubrea'],  $tabela['telefone_CoordSubarea'], $tabela['siape_Subarea'], $tabela['Subarea_coord']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>