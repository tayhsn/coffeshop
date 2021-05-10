<?php 
  require_once'conexao.php';

  class Venda {
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

    public function insert($cliente, $func, $produto, $qtd, $data, $valor, $total) {
      try {
        $sql = " SELECT valor FROM produto ";
        $total = $qtd * $valor ;
        $sql = "INSERT INTO venda(id_cliente, id_func, id_produto, quantidade, data, total, valor)
                values(:cliente, :func, :produto, :quantidade, :data, :total, :valor)";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":id_cliente", $cliente);
        $stmt -> bindParam(":id_func", $func);
        $stmt -> bindParam(":id_produto", $produto);
        $stmt -> bindParam(":valor", $valor);
        $stmt -> bindParam(":quantidade", $qtd);
        $stmt -> bindParam(":data", $data);
        $stmt -> bindParam(":total", $total);  
    } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
      } finally {
        $this -> conn = null;
      }
    }

    public function listAllVendas($cliente, $func, $produto, $qtd, $data, $total) {
      try {
        $sql = " SELECT cliente, func, produto, qtd, data, total, valor
                 FROM venda ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":id_cliente", $cliente);
        $stmt -> bindParam(":id_func", $func);
        $stmt -> bindParam(":id_produto", $produto);
        $stmt -> bindParam(":valor", $valor);
        $stmt -> bindParam(":quantidade", $qtd);
        $stmt -> bindParam(":data", $data);
        $stmt -> bindParam(":total", $total);

        $stmt -> execute();
        return $stmt;

      } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
      } finally {
        $this -> conn = null;
      }
    }

    public function showTotal($total) {
      try {
        $sql = " SELECT total, id
                 FROM venda ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":total", $total);
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