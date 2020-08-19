<?php
// Da continuidade a sessao que foi iniciada no index e possibilita a utilização das variaveis superglobais que foram iniciadas lá.
session_name("teste");
session_start();

?>


<html>
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/e42d0736e1.js" crossorigin="anonymous"></script>
             <title>Sistemas de arquivo IBGE</title>
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

             <link rel="stylesheet" href="estilo.css" type="text/css">

             <link rel="icon" type="imagem/png" href="favicon-96x96.png" />
             <style type="text/css">
                #bt_voltar{
               margin-left: 90%;
                    };

               #fixo{
                display:block;
                position:fixed;
               }
              
               
</style>

    </head>

<body>
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                    

            <a class="navbar-brand" href="buscas.html" style="color: aliceblue;" >Sistema de Controle de Equipamento</a>

            <div class= "collapse navbar-collapse" id="navbarSite">
              <ul class="navbar-nav ml-auto">
      

                  
                   
                <li class="nav-item">
                  <a class="nav-link" href="buscas.html" style="color: aliceblue;">Busca</a>
              </li>
                  <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contato
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">(83)9 998341257</button>
                                <button class="dropdown-item" type="button">(83)9 996112880</button>
                                <button class="dropdown-item" type="button" href="#">Central de atendimento </button>
                              </div>
                              
                            </div>
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gerenciamento
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                <a href="gerenciamento_equipamento.php">    <input type="submit" value="Equipamentos" class="dropdown-item"></a>
                 
                              <a href="gerenciamento_localidade.php">  <input type="submit" value="Localidades" class="dropdown-item"></a>

                              <a href="gerenciamento_coordenadores.php">    <input type="submit" value="Coordenadores" class="dropdown-item"></a>
                              
                              
                              </div>
                              </div>
                            <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Cadastros
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                            <a href="cadastroEquipamentos.php">    <button class="dropdown-item" type="button">Equipamentos</button></a>
                            <a href="cadastroLocalidade.php">  <button class="dropdown-item" type="button">Localidades</button></a>
                            <a href="CadastroServidor.php">    <button class="dropdown-item" type="button" >Servidores</button></a>
                           
                            
                            </div>
                            </div>
                          <li class="nav-item">
                            <a class="nav-link" href="index.php" style="color: aliceblue;">Sair</a>
                        </li>
              </ul>

          </div>

         

       
       

      </nav>
              <br>
                <div id="cadastro">
                        Gerenciamento Equipamentos

                </div>
       <br>
       <br>
        <div>
                  
      <?php
      
/*if($tipo = $_POST["tipo_equipamento_escolha"]){
       
        $tipo = $_POST["tipo_equipamento_escolha"];
        
            $conexao = mysqli_connect("localhost", "root", "", "projeto_ibge");
            $sql = $conexao -> query("SELECT * FROM `equipamento` INNER JOIN tipo on equipamento.ID_tipo = tipo.ID_tipo
                                      INNER JOIN status on equipamento.ID_status = status.ID_status
                                      
                                      where equipamento.ID_tipo = '$tipo'  ORDER BY  `patrimonio`  ASC ");
  
            echo(' <table class="table table-hover" id="formCad">
              
              <thead>
                <tr>
                    <th scope="col">Patrimônio</th>
                    <th scope="col">Número de série</th>
                    <th scope="col">Tipo de equipamento</th>
                    <th scope="col">Status do equipamento</th>
                    <th scope="col">Data de recebimento</th>
                    <th scope="col">Área</th>
                </tr>
            </thead>');
            
            while($tabela = mysqli_fetch_array($sql)){
              echo('
              <tr>
                <td>'.$tabela['patrimonio'].'</td>
                <td>'.$tabela['numero_de_serie'].'</td>
                <td>'.$tabela['tipo_equipamento'].'</td>
                <td>'.$tabela['status'].'</td>
                <td>'.$tabela['data_de_recebimento'].'</td>
             
             
                </tr>
              
              ');
  
            }
  
        }
  
  */
        if(isset($_POST["serie"])){
          $serie =  $_POST["serie"];
        }else{
          $serie = "";
        }

        if(isset($_POST["patrimonio"])){
          $patrimonio =  $_POST["patrimonio"];
        }else{
          $patrimonio = "";
        }

        if(isset($_POST["tipo_equipamento_escolha"])){
          $tipo_equipamento_escolha =  $_POST["tipo_equipamento_escolha"];
        }else{
          $tipo_equipamento_escolha = "";
        }

        if(isset($_POST["Status_equipamento"])){
          $Status_equipamento =  $_POST["Status_equipamento"];
        }else{
          $Status_equipamento = "";
        }

        if(isset($_POST["escolherArea"])){
          $escolherArea =  $_POST["escolherArea"];
        }else{
          $escolherArea = "";
        }

        $array = array(
          $serie,
          $patrimonio,
          $tipo_equipamento_escolha,
          $Status_equipamento,
          $escolherArea
        );

        $i = 0;
        $aux = 0;
        $select = "SELECT * FROM equipamento  INNER JOIN tipo on equipamento.ID_tipo = tipo.ID_tipo INNER JOIN status on equipamento.ID_status = status.ID_status INNER JOIN localidade_area ON equipamento.ID_area = localidade_area.ID_area WHERE";
      // $select = "SELECT * FROM equipamento INNER JOIN tipo on equipamento.ID_tipo = tipo.ID_tipo INNER JOIN status on equipamento.ID_status = status.ID_status WHERE";

        foreach ($array as $value){
          if($value != ""){
            if($i == 0){
              $select = $select." equipamento.numero_de_serie = '$value'";
              $aux = 1;
            }
            if($i == 1){
              if($aux == 1){
                $select = $select." AND equipamento.patrimonio = '$value'";
              }else{
                $select = $select." equipamento.patrimonio = '$value'";
              }
              $aux = 1;
            }

            if($i == 2){
              if($aux == 1){
                $select = $select." AND equipamento.ID_tipo = '$value'";
              }else{
                $select = $select." equipamento.ID_tipo = '$value'";
              }
              $aux = 1;
            }          
            if($i == 3){
              if($aux == 1){
                $select = $select." AND equipamento.ID_status = '$value'";
              }else{
                $select = $select." equipamento.ID_status = '$value'";
              }
              $aux = 1;
            }
            if($i == 4){
              if($aux == 1){
                $select = $select." AND equipamento.ID_area = '$value'";
              }else{
                $select = $select." equipamento.ID_area = '$value'";
              }
              $aux = 1;
            }
              

            
          }
          $i++;
        }
        
        

     

          $conexao = mysqli_connect("localhost", "root", "", "projeto_ibge");
          $sql = $conexao -> query($select);
      //    $dados = mysqli_query($conexao, $sql) or die(' Erro na query:' . $sql . ' ' . mysqli_error($conexao));
          echo('<a id="bt_voltar" href="gerenciamento_equipamento.php"> Voltar</a>');
          
          /*("SELECT * FROM `equipamento` INNER JOIN tipo on equipamento.ID_tipo = tipo.ID_tipo
                                    INNER JOIN status on equipamento.ID_status = status.ID_status
                                    where equipamento.ID_tipo = '$tipo' AND equipamento.ID_status = '$status'  ORDER BY  `patrimonio`  ASC ");*/
?>
          <table class="table table-hover"  id="formCad">
            
            <thead id="fixo">
              <tr>
                  <th scope="col">Patrimônio</th>
                  <th scope="col">Número de série</th>
                  <th scope="col">Tipo de equipamento</th>
                  <th scope="col">Status</th>
                  <th scope="col">Data de recebimento</th>
                  <th scope="col">Área</th>
                  <th scope="col">Editar</th>
              </tr>
          </thead>
          
          <?php
          
          while($tabela = mysqli_fetch_array($sql)){
          
            echo('
            <tr>

              <td>'.$tabela['patrimonio'].'</a></td>
              <td>'.$tabela['numero_de_serie'].'</td>
              <td>'.$tabela['tipo_equipamento'].'</td>
              <td>'.$tabela['status'].'</td>
              <td>'.$tabela['data_de_recebimento'].'</td>
              <td>'.$tabela['nome'].'</td>
              '); ?>
              <td> <button class="btn btn-outline-dark" data-target="#exampleModal" data-toggle="modal" patrimonio="<?php echo $tabela['patrimonio']; ?>" numero_de_serie="<?php echo $tabela['numero_de_serie']; ?>"Tipo_equipamento="<?php echo $tabela['ID_tipo'];?>" status="<?php echo $tabela['ID_status ']; ?>"> <i class="fas fa-edit"></i></td>
              </tr>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">

		  <div class="modal-dialog" role="document">
		  	<div class="modal-content">

			    <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				      
         </div>
         
			  <div class="modal-body">

        <form method="POST" action="atualizacao_equipamento.php" enctype="multipart/form-data">
          
				  <div class="form-group">
					<label for="patrimonio" class="control-label">Patrimônio</label>
					<input name="patrimonio" type="text" class="form-control" id="patrimonio">
          </div>

          <div class="form-group">
					<label for="numero_de_serie" class="control-label">Número de Série:</label>
					<input name="serie" type="text" class="form-control" id="numero_de_serie">
          </div>

				  <div class="form-group">
                        <label for="Tipo_equipamento">Tipo do equipamento</label>
                              <select name="Tipo_equipamento" id="Tipo_equipamento" class="form-control">
                              <option value="">Escolher</option>

                                      <?php
                                      /* Código que trás o select de tipos de equipamentos, onde se inicia a conexao com o banco, depois cria o tipo de busca que será feita no banco e cria
                                      a variavel que junta a conexao com a busca e depois um laço de repetição para enquanto tiver dado no banco, continue buscando. */
                                      $conexao = mysqli_connect("localhost", "root", "", "projeto_ibge");

                                      $result_tipo_equipamento = "SELECT * FROM tipo ORDER BY tipo_equipamento ASC";

                                      $result_tipo_equipamento = mysqli_query($conexao, $result_tipo_equipamento);

                                      while($row_tipo_equipamento = mysqli_fetch_assoc($result_tipo_equipamento) ) {
                                        ?>

                                        <option value="<?php echo $row_tipo_equipamento['ID_tipo']; ?>"><?php echo $row_tipo_equipamento ['tipo_equipamento'];  ?>
                                        </option> <?php
                                        }

                                       
                                        

                                      ?>

                              </select>
          </div>

          <div class="form-group ">
                              <label for="status">Status do equipamento</label>
                              <select name="status" id="status" class="form-control">
                              <option value="">Escolher</option>

                                      <?php
                                      /* Código que trás o select de tipos de equipamentos, onde se inicia a conexao com o banco, depois cria o tipo de busca que será feita no banco e cria
                                      a variavel que junta a conexao com a busca e depois um laço de repetição para enquanto tiver dado no banco, continue buscando. */
                                      $conexao = mysqli_connect("localhost", "root", "", "projeto_ibge");

                                      $result_status_equipamento = "SELECT * FROM status ORDER BY status ASC";

                                      $result_status_equipamento = mysqli_query($conexao, $result_status_equipamento);

                                      while($row_status_equipamento = mysqli_fetch_assoc($result_status_equipamento) ) {
                                        ?>

                                        <option value="<?php echo $row_status_equipamento['ID_status']; ?>"><?php echo $row_status_equipamento ['status'];  ?>
                                        </option> <?php
                                        }

                                       
                                        

                                      ?>

                              </select>

                                      </div>
          
				<input name="id" type="hidden" class="form-control" id="id-equipamento" value="">
				
				<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-danger">Alterar</button>
			 
				</form>
			  </div>
			  
			</div>
		  </div>
		</div>
              
             
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var patrimonio = button.data('patrimonio') // Extract info from data-* attributes
		  var numero_de_serie = button.data('numero_de_serie')
		  var Tipo_equipamento = button.data('Tipo_equipamento')
      var status = button.data('status')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text(patrimonio)
		  modal.find('#id-equipamento').val(patrimonio)
		  modal.find('#numero_de_serie').val(numero_de_serie)
		  modal.find('#Tipo_equipamento').val(Tipo_equipamento)
      modal.find('#status').val(status)
		  
		})
	</script>
            
            <?php
          }

 
          ?>


      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            </body>
</html>