<?php 
  require_once'conexao.php';

  class Cliente {
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

    public function insert($nome, $email, $cpf) {
      try {
        $sql = " INSERT INTO cliente(nome, email, cpf)
                 values(:nome, :email, :cpf)";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam(":email", $email);
        $stmt -> bindParam(":cpf", $cpf);

        $stmt -> execute();
        return $stmt;

      } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
      } finally {
        $this -> conn = null;
      }
    }

    public function update($nome, $email, $cpf, $id) {
      try {
        $sql = " UPDATE cliente 
                 SET nome = :nome, email = :email, cpf = :cpf 
                 WHERE id = :id ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam(":email", $email);
        $stmt -> bindParam(":cpf", $cpf);
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
        $sql = " DELETE FROM cliente WHERE id = :id ";
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

    public function redirect($url){
      header("location: $url");
    }

  }
?>