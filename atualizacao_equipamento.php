<?php
// Da continuidade a sessao que foi iniciada no index e possibilita a utilização das variaveis superglobais que foram iniciadas lá.
 session_name("teste");
 session_start();



// cria a conexao com o banco
$conexao = mysqli_connect('localhost', 'root', '', 'projeto_ibge');

	
	$patrimonio = mysqli_real_escape_string($conexao, $_POST['patrimonio']);
	$numero_de_serie = mysqli_real_escape_string($conexao, $_POST['numero_de_serie']);
    $Tipo_equipamento = mysqli_real_escape_string($conexao, $_POST['Tipo_equipamento']);
    $status = mysqli_real_escape_string($conexao, $_POST['status']);
	echo "$patrimonio - $numero_de_serie - $Tipo_equipamento - $status ";
	$result_equipamentos = "UPDATE equipamento SET numero_de_serie='$numero_de_serie', Tipo_equipamento =  '$Tipo_equipamento', status='$status' WHERE patrimonio = '$patrimonio'";
	
	$resultado_equipamentos = mysqli_query($conexao, $result_equipamentos);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/gerenciamento_equipamento_teste.php'>
				<script type=\"text/javascript\">
					alert(\"Curso alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/gerenciamento_equipamento_teste.php'>
				<script type=\"text/javascript\">
					alert(\"Curso não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php

if ($conexao->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexao->error;
}

$dados = $conexao ->query("SELECT * FROM tipo");

$conn->close(); ?>



