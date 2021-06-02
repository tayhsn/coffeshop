<?php
  require_once '../model/carrinho.php';
  $objCar = new carrinho();
  
  
  if(isset($_POST['insert'])) {

    $quantidade = $_POST['txtquantidade'];

    if($objCar  -> insert($quantidade)) {
      $objCar  -> redirect('../cliente.php');
    }
  }
  ?>