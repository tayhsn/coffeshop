<?php 
  require_once'../model/cliente.php';
  $objCliente = new Cliente();

  if(isset($_POST['insert'])) {
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $cpf = $_POST['txtCPF'];

    if($objCliente -> insert($nome, $email, $cpf)) {
      $objCliente -> redirect('../cliente.php');
    }
  }

  if(isset($_POST['delete'])) {
    $id = $_POST['delete'];

    if($objCliente -> delete($id)) {
      $objCliente -> redirect('../cliente.php');
    }
  }

  if(isset($_POST['update'])) {
    $id = $_POST['update'];
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $cpf = $_POST['txtCPF'];

    if($objCliente -> update($nome, $email, $cpf, $id)) {
      $objCliente -> redirect('../cliente.php');
    }
  }
?>