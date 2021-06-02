<<<<<<< HEAD
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
=======
<?php
  @session_start();
  require_once '../model/cliente.php';
  $objcli = new cliente();

  if(isset($_POST['txtLogin'])){
    $Login = $_POST['txtLogin'];
    $Senha = $_POST['txtSenha']; 
   
     
      $query = "select * from cliente";
      $stmt = $objcli -> runQuery($query);
      $stmt -> execute();

      $array = array();
     
    if($objcli  -> validar($Login, $Senha)){
        $_SESSION['validar'] = true;
        if($stmt-> rowCount() > 0){
          $array = $stmt -> fetch();
          $_SESSION['id'] = $array['id'];
        }
        $objcli  -> redirect('../cliente.php');
    } else {
        $objcli  -> redirect('../index.php');
    }
  }

  if(isset($_POST['insert'])) {
    $nome = $_POST['txtNome'];  
    $idade = $_POST['txtIdade'];
    $sexo = $_POST['txtSexo'];
    $datanascimento = $_POST['txtDataNascimento'];
    $cpf = $_POST['txtCPF'];  
    $Login = $_POST['txtLogin'];
    $Senha = $_POST['txtSenha'];

    if($objcli  -> insert($nome,$idade,$sexo,$datanascimento, $cpf, $Login, $Senha)) {
      $objcli  -> redirect('../cliente.php');
    }
  }


>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
?>