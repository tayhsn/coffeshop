<?php 
  require_once 'model/cliente.php';
  $objCliente = new Cliente();
?>

<!DOCTYPE html>
<html lang="en">
<head>
       <!--RESPONSIVE-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
      <!-- BOOTSTRAP 5.0 -->
    <link rel="stylesheet" type="text/css" href="style.css">
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
      <!-- NAVEGAÇÃO -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="index.php"><img src="images/logos/header.gif" class="logoHeader"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
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
          </ul>
        </div>
      </nav>


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
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Cadastrar Cliente</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
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

          </div>
        </div>
      </div>

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
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>