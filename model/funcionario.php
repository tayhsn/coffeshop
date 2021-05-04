<?php
  require_once'conexao.php';

  class Funcionario {
    private $conn;

    public function __construct()
    {
      $dataBase = new dataBase();
      $db = $dataBase -> dbConnection();
      $this -> conn = $db;
    }

    public function runQuery($sql) {
      $stmt = $this -> conn -> prepare($sql);
      return $stmt;
    }

    public function insert($nome, $cpf, $login, $senha) {
      try {
        $sql = " INSERT INTO funcionario(nome, cpf, login, senha)
                VALUES(:nome, :cpf, :login, :senha) ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam(":cpf", $cpf);
        $stmt -> bindParam(":login", $login);
        $stmt -> bindParam(":senha", $senha);
        
        $stmt -> execute();
        return $stmt;

      } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
      } finally {
        $this -> conn = null;
      }
    }

    public function update($nome, $cpf, $login, $senha, $id) {
      try {
        $sql = " UPDATE funcionario 
                 SET nome = :nome, cpf = :cpf, login = :login, senha = :senha 
                 WHERE id = :id ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam(":cpf", $cpf);
        $stmt -> bindParam(":login", $login);
        $stmt -> bindParam(":senha", $senha);
        $stmt -> bindParam(":id", $id);

        $stmt -> execute();
        return $stmt;

      } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
      } finally {
        $this -> conn = null;
      }
    }

    public function delete($id) {
      try {
        $sql = "DELETE FROM funcionario WHERE id = :id";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":id", $id);
        
        $stmt -> execute();
        return $stmt;
      } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
      } finally {
        $this -> conn = null;
      }
    }

    public function validate($login, $senha){
      try{
        $sql = "SELECT * FROM funcionario WHERE login = :login AND senha = :senha";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":login", $login);
        $stmt -> bindParam(":senha", $senha);
        
        $stmt -> execute();
        
        if($stmt -> rowCount() > 0){
          return true;
        } else {
          return false;
        }

      } catch(PDOException $e) {
        echo "Error: ".$e -> getMessage();
      } finally {
        $this -> conn = null;
      }
    }

    public function redirect($url){
      header("location: $url");
    }
  }

?>