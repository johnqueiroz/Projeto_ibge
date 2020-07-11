<?php

$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');


$nome_coord_area = $_POST["Nome_coord_area"];
$siape_coord_area= $_POST["Siape_coord_area"];
$email_coord_area = $_POST["Email_coord_area"];
$telefone_coord_area = $_POST["Telefone_coord_area"];
$area_coord = $_POST["Area_coord"];




$sql = "INSERT INTO coord_area (nome_CoordArea, siape_area, email_CoordArea, telefone_CoordArea, area_Coord) VALUES ('$nome_coord_area','$siape_coord_area', '$email_coord_area', '$telefone_coord_area', '$area_coord')";

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM coord_area");

while ($tabela = mysqli_fetch_array($dados)){
    echo $tabela['nome_CoordArea'], $tabela['siape_area'],  $tabela['email_CoordArea'], $tabela['telefone_CoordArea'], $tabela['area_Coord']. '<br/>';
}
echo '<script type="text/javascript">javascript:history.back()</script>';

?>