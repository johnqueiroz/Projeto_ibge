<html>
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

             <title>Cervejaria</title>
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

             <link rel="stylesheet" href="estilo.css" type="text/css">

    </head>

<body>


    
        <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                    

                    <a class="navbar-brand" href="principal.html" style="color: aliceblue;" >Cervejaria</a>

                    <div class= "collapse navbar-collapse" id="navbarSite">
                        <ul class="navbar-nav ml-auto">
                

                            <li class="nav-item">
                                <a class="nav-link" href="sobre.html" style="color: aliceblue;">Sobre</a>
                            </li>
                            <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Contatos
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                          <button class="dropdown-item" type="button">(83)9 998341257</button>
                                          <button class="dropdown-item" type="button">(83)9 996112880</button>
                                        </div>
                                      </div>
                                      <li class="nav-item">
                                        <a class="nav-link" href="receberNoticias.html" style="color: aliceblue;">Receber notícias</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="painel.php" style="color: aliceblue;">Painel de controle</a>
                                  </li>
                        </ul>

                    </div>

                   


                </nav>

         
                <div>
                        <img src="teste2.png" alt="Cerveja" height="54%" width="100%">

                </div>

                <?php
    $conexao = mysqli_connect("localhost", "root", "", "cervejaria");
    $dados = $conexao ->query("SELECT * FROM cliente");

    
        
    
                echo('<table class="table table-hover" id="formCad">
                  <thead>
                    <tr>
                    
                      <th scope="col">ID</th>
                      <th scope="col">Nome</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Telefone</th>
                    </tr>
                  </thead>');

                  while ($tabela = mysqli_fetch_array($dados)){
                    echo('
                    <tr>
                    <td>'.$tabela['idpessoa'].'</td>
                    <td>'.$tabela['nome'].'</td>
                    <td>'.$tabela['email'].'</td>
                    <td>'.$tabela['telefone'].'</td>
                    </tr>
                    ');
                  }
                
            ?>
        </div>



      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>