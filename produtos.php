
<?php
@session_start();
require_once 'model/produtos.php';
$objproduto = new produtos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                    <!-- SECTION -->
     <section>
      <div class=" d-flex justify-content-center" id="sobre">
        <div class="row func">
          <h1>Produtos:</h1>
          <div class="container mt-3">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
        $query = "select * from produtos";
      ?>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>

        </div>
      </div>
            </div>

          </div>
        </div>
      </div>
</body>
</html>
     