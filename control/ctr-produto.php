<?php 
  require_once'../model/produto.php';
  $objProduto = new Produto();

  if(isset($_POST['insert'])) {
    $nome = $_POST['txtNome'];
    $valor = $_POST['txtValor'];
    $descricao = $_POST['txtDescricao'];

    if($objProduto -> insert($nome, $valor, $descricao)) {
      $objProduto -> redirect('../produto.php');
    }
  }

  if(isset($_POST['delete'])) {
    $id = $_POST['delete'];

    if($objProduto -> delete($id)) {
      $objProduto -> redirect('../produto.php');
    }
  }

  if(isset($_POST['update'])) {
    $id = $_POST['update'];
    $nome = $_POST['txtNome'];
    $valor = $_POST['txtValor'];
    $descricao = $_POST['txtDescricao'];

    if($objProduto -> update($nome, $valor, $descricao, $id)) {
      $objProduto -> redirect('../produto.php');
    }
  }
?>