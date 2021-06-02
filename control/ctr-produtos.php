<?php
  require_once '../model/produtos.php';
  $objProd = new produtos();
  
  
  if(isset($_POST['insert'])) {

    $quantidade = $_POST['txtquantidade'];

    if($objProd  -> insert($quantidade)) {
      $objProd  -> redirect('../cliente.php');
    }
  }
  ?>