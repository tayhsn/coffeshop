<<<<<<< HEAD
<?php 
  require_once 'model/cliente.php';
  $objCliente = new Cliente();
?>

=======
<?php
  @session_start(); 
  require_once 'model/cliente.php';
  $objcli = new cliente();
  $objFunc = new cliente();
  $objProd = new cliente();
  $objCar = new cliente();
  if(@$_SESSION['validar'] != true){
    $objcli  -> redirect('index.php');
  } 
?>



>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
<!DOCTYPE html>
<html lang="en">
<head>
       <!--RESPONSIVE-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
      <!-- BOOTSTRAP 5.0 -->
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="style.css">
=======
    <link rel="stylesheet" href="style.css">
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
      <!--BOOTSTRAP 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <!--FAVICON FONT TITLE-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/coffe.png" type="image/x-icon">
    
    <title> <BR> CAFÉ ZIN</title>
</head>
<body>
<<<<<<< HEAD
      <!-- NAVEGAÇÃO -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="index.php"><img src="images/logos/header.gif" class="logoHeader"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
=======


      <!-- NAVEGAÇÃO -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="#home"><img src="images/logos/header.gif" class="logoHeader"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" ari    a-label="Alterna navegação">
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
<<<<<<< HEAD
              <a class="nav-link" href="funcionario.php">Funcionários</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cliente.php">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produto.php">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="venda.php">Vendas</a>
            </li>
=======
              <a class="nav-link " href="#home">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sobre">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contato">Contatos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produtos.php" data-toggle="modal" data-target="#myModalPROD">Nossas Criações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="modal" data-target="#myModalCAR">Carrinho</a>
            </li>
            <div class="d-flex mr-4" id="usu">
            <img class="img-profile rounded-circle" src="../cafezin/images/localpic/usuario.jpg" width="40px" height="40px">
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['usuario']; ?>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li> <a class="dropdown-item" href="#">Action</a>
                    </li>
                    <li> <a class="dropdown-item" href="#">Another</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="../cafezin/model/Loggout.php">Sair</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            </div>
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
          </ul>
        </div>
      </nav>

<<<<<<< HEAD

      <!-- SECTION -->
     <section>
      <div class=" d-flex justify-content-center" id="sobre">
        <div class="row func">
          <h1>Clientes:</h1>
          <table class="table table-striped">
            <thead>
              <tr>
                <th colspan="5">
                  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModalNew">Novo</button>
                </th>
              </tr>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Editar</th>
                <th>Deletar</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                  $query = " SELECT * FROM cliente";
                  $stmt = $objCliente -> runQuery($query);
                  $stmt -> execute();
                  while($objCliente = $stmt -> fetch(PDO::FETCH_ASSOC)) {
                ?>
                  <tr>
                    <td> <?php echo($objCliente['id']) ?> </td>
                    <td> <?php echo($objCliente['nome']) ?> </td>
                    <td> <?php echo($objCliente['email']) ?> </td>
                    <td> <?php echo($objCliente['cpf']) ?> </td>
                    <td>
                      <button type="button" class="btn btn-primary" 
                              data-toggle="modal" data-target="#myModalUpdate"
                              data-id="<?php echo($objCliente['id']) ?>"
                              data-nome="<?php echo($objCliente['nome']) ?>"
                              data-email="<?php echo($objCliente['email']) ?>"
                              data-cpf="<?php echo($objCliente['cpf']) ?>"
                              >Editar</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger" 
                              data-toggle="modal" data-target="#myModalDelete" 
                              data-id="<?php print $objCliente['id'] ?>"
                              data-nome="<?php print $objCliente['nome'] ?>">Deletar</button>
                    </td>
                  </tr>
                <?php } ?>

            </tbody>
          </table>
        </div>
      </div>

            <!-- The NOVO Modal -->
      <div class="modal" id="myModalNew">
=======
       

      <!-- The PRODUCTS Modal -->
      <div class="modal" id="myModalPROD">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">CONHEÇA NOSSOS CAFÉS</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <form action="control/ctr-produtos.php" method="POST">
            <input type="hidden" name="insert">
     <section>
      <div class=" d-flex justify-content-center" id="sobre">
        <div class="row func">
          <h1>Produtos:</h1>
          <div class="container mt-3">
   <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Tamanho</th>
        <th>Preço</th>
        <th>Quantidade</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
        $query = "select * from produtos";
        $stmt = $objProd -> runQuery($query);
        $stmt -> execute();
        while($objProd = $stmt -> fetch(PDO::FETCH_ASSOC)){
   
      
      ?>
      <?php $id_produtos = $objProd['id'] ?>
      <?php $_SESSION['id_prod'] = $id_produtos  ?>
      <tr>
        <td><?php echo($objProd['nick'])?></td>
        <td> <select>
                          <option>Selecione</option>
                          <option  value="1"><?php echo ($objProd['tamanho']).'ml'?></option>
                          <option  value="2"><?php echo ($objProd['tamanho2']).'ml'?></option>
                          <option  value="3"><?php echo ($objProd['tamanho3']).'ml'?></option>
                        </select>
        </td>
        <td><?php echo($objProd['valor'])?></td>
        <td> 
        <div class="form-group">
        <select type="text" name="txtquantidade" id="recebe-quantidade">
                          <option>Selecione</option>
                          <option  value="1">1</option>
                          <option  value="2">2</option>
                          <option  value="3">3</option>
                          <option  value="4">4</option>
                          <option  value="5">5</option>
                          <option  value="6">6</option>
                          <option  value="7">7</option>
                        </select>

        </div>
                         
        </td>
        <?php $val = $objProd['valor'] ?>
        <?php $_SESSION['vale'] = $val ?>        
        <td>
           <button type="submit" class="btn btn-success">Adicionar</button>
        </td>
 
        <?php } ?>
      </tr>
      
    </tbody>
  </table>
  </div>
   </div>
    </div>
    </form>
        </div>
      </div>
            </div>

          </div>

        
  

           <!-- The NOVO FUNCIONARIO Modal -->
           <div class="modal" id="myModalCAR">
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
<<<<<<< HEAD
              <h4 class="modal-title">Cadastrar Cliente</h4>
=======
              <h4 class="modal-title">Carrinho</h4>
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
<<<<<<< HEAD
              <form action="control/ctr-cliente.php" method="POST">
                    <input type="hidden" name="insert">
                    <div class="form-group">
                      <label for="">Nome:</label>
                      <input type="text" class="form-control" name="txtNome" required>
                    </div>
                    <div class="form-group">
                      <label for="">Email:</label>
                      <input type="email" class="form-control" name="txtEmail" required>
                    </div>
                    <div class="form-group">
                      <label for="">CPF:</label>
                      <input type="text" class="form-control" name="txtCPF" required>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
              </form>
            </div>

=======
              <form action="cliente.php" method="POST">
                    <input type="hidden" name="insert">
                    <section>
      <div class=" d-flex justify-content-center" id="sobre">
        <div class="row func">
          <h1>Produtos:</h1>
          <div class="container mt-3">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id Cliente</th>
        <th>Id Produto</th>
        <th>Quantidade</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
        $queryC = "select * from carrinho";
        $stmtCa = $objCar -> runQuery($queryC);
        $stmtCa -> execute();
        while($objCar = $stmtCa -> fetch(PDO::FETCH_ASSOC)){

      
      ?>
      <tr>
        <td><?php echo( $_SESSION['id'])?></td>
        <td><?php echo($_SESSION['id_prod'])?></td>
        <td><?php echo($objCar['quantidade'])?></td>
        <?php $qtd = $objCar['quantidade'] ?>
        <?php @$total = $total + $_SESSION['vale'] * $qtd ?>
      </tr>
      <?php } ?>

      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td><?php echo($total) ?></td>
      </tr>
    </tbody>
  </table>

        </div>
      </div>
            </div>
              
                    <button type="submit" class="btn btn-success">Enviar</button>
              </form>
            </div>
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
          </div>
        </div>
      </div>

<<<<<<< HEAD
      <!-- The DELETAR Modal -->
      <div class="modal" id="myModalDelete">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Deletar Cliente</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="control/ctr-cliente.php" method="POST">
                  <input type="hidden" name="delete" id="recebe-id">
                  <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" name="txtNome" id="recebe-nome" readonly>
                  </div>
                  <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- The EDITAR Modal -->
    <div class="modal" id="myModalUpdate">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Editar Cliente</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="control/ctr-cliente.php" method="POST">
            <input type="hidden" name="update" id="recebe-id">
                    <div class="form-group">
                      <label for="">Nome:</label>
                      <input type="text" class="form-control" name="txtNome" id="recebe-nome">
                    </div>
                    <div class="form-group">
                      <label for="">Email:</label>
                      <input type="email" class="form-control" name="txtEmail" id="recebe-email">
                    </div>
                    <div class="form-group">
                      <label for="">CPF:</label>
                      <input type="text" class="form-control" name="txtCPF" id="recebe-cpf">
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
            </form>
          </div>

        </div>
      </div>
    </div>
    </section>

    <script>
      $('#myModalDelete').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget);
        var recebeID = button.data('id');
        var recebeNome = button.data('nome');

        var modal = $(this);
        modal.find('#recebe-id').val(recebeID);
        modal.find('#recebe-nome').val(recebeNome);
      })
    </script>

    <script>
      $('#myModalUpdate').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var recebeID = button.data('id');
        var recebeNome = button.data('nome');
        var recebeEmail = button.data('email');
        var recebeCPF = button.data('cpf');

        var modal = $(this);
        modal.find('#recebe-id').val(recebeID);
        modal.find('#recebe-nome').val(recebeNome);
        modal.find('#recebe-email').val(recebeEmail);
        modal.find('#recebe-cpf').val(recebeCPF);
      })
    </script>
=======
     

            <!-- IMAGENS MAIN -->
     <main id="home">
      <img src="images/localpic/photo-1.jpg" alt="Welcome">
      <img src="images/localpic/photo-2.jpg" alt="Have a Break">
      <img src="images/localpic/photo-3.jpg" alt="Preços dos produtos">
      <img src="images/localpic/photo-4.jpg" alt="Coffe">
      <img src="images/localpic/photo-5.jpg" alt="Mapa Mundi">
      <img src="images/localpic/photo-6.jpg" alt="Love is Action">
     </main>

      <!-- SECTION SOBRE -->
     <section>
      <div class="d-flex pag-inicial" id="sobre">
        <div class="row flex-wrap-reverse">
        <div class="col-sm-6 lead">
              CaféZin™ está presente em 27 países em todos os continentes. <br> <br>
              Com a primeira loja inaugurada em 1970, por Edvan Carvalho & Tayanne Novais, dois amigos visionários que tinham a missão de unir pessoas. <br><br>
              Com 50 anos no mercado Nacional & 42 anos Internacional, seguimos nos reinventando e inovando através de propostas baseadas no bem-estar das pessoas e do planeta. <br>
              Orgulhosamente, todas as nossas franquias exercem políticas de compensação de resíduos e logística reversa para reciclagem de materias. <br> <br>
              Em 2021 alcançamos a marca de 75% de franquias que disponibilizam gratuitamente refeições para a comunidade vulnerável. Nossa meta é até 2024 atingir 100%. <br> <br>
              Somos feitos para todos. <br> <b>Feitos por vocês.</b>
        </div>
        <div class="col-sm-6">
          <img src="images/co-worker.png" alt="trabalho em dupla" >
        </div>
      </div>
      </div>
     </section>

      <!-- RODAPÉ -->
     <footer>
      <div class="d-flex flex-row p-2 bd-highlight justify-content-around align-items-center flex-wrap" id="contato">
          <div class="p-2 bd-highlight">
            <h6>REDES SOCIAIS</h6>
            <a href="/"><img src="images/instagram.png" alt="Instagram"> Instagram</a><br>
            <a href="/"><img src="images/facebook.png" alt="Facebook"> Facebook</a><br>
            <a href="/"><img src="images/youtube.png" alt="Youtube"> Youtube</a>
          </div> 

          <div class="p-2 bd-highlight">
              <img src="images/logos/footer.png" id="logo"/>
              <h6>
                Todos os Direitos Fictícios. <br>
                Programação WEB 2021.1
              </h6>
          </div>

          <div class="p-2 bd-highlight">
            <h6>FALE COM A GENTE</h6>
            <a href="/"> <img src="images/whatsapp.png" alt="contato whatsapp"> Clique aqui e envie um whatsapp</a> <br> <br>
            <a href="/"> <img src="images/email.png" alt="contato e-mail">Clique aqui e envie um e-mail</a>
          </div>
      </div>
     </footer>
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>