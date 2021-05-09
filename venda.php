<?php 
  require_once 'model/venda.php';
  $objVenda = new Venda();
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
          <h1>Vendas:</h1>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Funcionário</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Data</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                  $query = " SELECT * FROM venda ";
                  $stmt = $objVenda -> runQuery($query);
                  $stmt -> execute();
                  while($objVenda = $stmt -> fetch(PDO::FETCH_ASSOC)) {
                ?>
                  <tr>
                    <td> <?php echo($objVenda['id']) ?> </td>
                    <td> <?php echo($objVenda['cliente']) ?> </td>
                    <td> <?php echo($objVenda['func']) ?> </td>
                    <td> <?php echo($objVenda['produto']) ?> </td>
                    <td> <?php echo($objVenda['qtd']) ?> </td>
                    <td> <?php echo($objVenda['data']) ?> </td>
                    <td> <?php echo($objVenda['total']) ?> </td>
                  </tr>
                <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>