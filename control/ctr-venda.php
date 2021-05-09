<?php 
  require_once'../model/venda.php';
  $objVenda = new Venda();  

  if(isset($_POST['showTotal'])){
    $total = $_POST['txtTotal'];
    $id = $_POST['txtID'];
      
    if($objVenda -> showTotal($total, $id)) {
      $objVenda -> redirect(('../index.php'));
    }
  }

  if(isset($_POST['getTotal'])){
    $qtd = $_POST['txtQtd'];
    $produto = $_POST['txtProduto'];
    $total = $_POST['txtTotal'];
    $id = $_POST['txtID'];
      
    // if($objVenda -> getTotal($total, $id)) {
    //   $objVenda -> redirect(('../index.php'));
    // }
  }

?>