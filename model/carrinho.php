<?php
  @session_start();
  require_once 'conexao.php';

  class carrinho{
     private $conn;

     public function __construct(){

      $dataBase = new dataBase();
      $db = $dataBase -> dbconnection();
      $this -> conn = $db;
     }

     public function runQuery($sql){
        $stmt = $this -> conn -> prepare($sql);
        return $stmt;
     }

     public function insert($quantidade) {
        try {
          $sql = " INSERT INTO carrinho (quantidade)
                  VALUES(:quantidade) ";
          $stmt = $this -> conn -> prepare($sql);
          $stmt -> bindParam("quantidade", $quantidade);
          
          $stmt -> execute();
          return $stmt;
  
        } catch(PDOException $e) {
          echo("Error: ".$e -> getMessage());
        } finally {
          $this -> conn = null;
        }
      }

      public function redirect(){

        header("Location: ../cliente.php");
      }

  }

  
  ?>