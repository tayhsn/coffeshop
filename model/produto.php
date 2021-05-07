<?php 
  require_once'conexao.php';

  class Produto {
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

    public function insert($nome, $valor, $descricao) {
      try {
        $sql = " INSERT INTO produto(nome, valor, descricao)
                 values(:nome, :valor, :descricao)";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam(":valor", $valor);
        $stmt -> bindParam(":descricao", $descricao);

        $stmt -> execute();
        return $stmt;

      } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
      } finally {
        $this -> conn = null;
      }
    }

    public function update($nome, $valor, $descricao, $id) {
      try {
        $sql = " UPDATE cliente 
                 SET nome = :nome, valor = :valor, descricao = :descricao 
                 WHERE id = :id ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam(":valor", $valor);
        $stmt -> bindParam(":descricao", $descricao);
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