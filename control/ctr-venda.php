<?php 
  require_once'../model/venda.php';
  $objVenda = new Venda();

  if($objVenda -> listAll($cliente, $func, $produto, $qtd, $data, $total)) {
    $objVenda -> redirect('../venda.php');
  }

?>