<<<<<<< HEAD
<?php 
  require_once'conexao.php';
=======

<?php
  @session_start();
  require_once 'conexao.php';
  
 
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82

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

<<<<<<< HEAD
    public function insert($nome, $email, $cpf) {
      try {
        $sql = " INSERT INTO cliente(nome, email, cpf)
                 values(:nome, :email, :cpf)";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam(":email", $email);
        $stmt -> bindParam(":cpf", $cpf);

=======
    public function insert($nome, $cpf, $Login, $Senha) {
      try {
        $sql = " INSERT INTO cliente(nome, idade, sexo, dataNascimento, cpf, login, senha)
                VALUES(:nome, :idade, :sexo, :dataNascimento, :cpf, :login, :senha) ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam("idade", $idade);
        $stmt -> bindParam("sexo", $sexo);
        $stmt -> bindParam("dataNascimento", $dataNascimento);
        $stmt -> bindParam(":cpf", $cpf);
        $stmt -> bindParam(":Login", $Login);
        $stmt -> bindParam(":Senha", $Senha);
        
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
        $stmt -> execute();
        return $stmt;

      } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
      } finally {
        $this -> conn = null;
      }
    }

<<<<<<< HEAD
    public function update($nome, $email, $cpf, $id) {
      try {
        $sql = " UPDATE cliente 
                 SET nome = :nome, email = :email, cpf = :cpf 
                 WHERE id = :id ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam(":email", $email);
        $stmt -> bindParam(":cpf", $cpf);
=======
    public function update($nome, $cpf, $Login, $Senha, $id) {
      try {
        $sql = " UPDATE cliente 
                 SET nome = :nome, idade = :idade, sexo = :sexo, dataNascimento = :dataNascimento, cpf = :cpf, login = :login, senha = :senha 
                 WHERE id = :id ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":nome", $nome);
        $stmt -> bindParam("idade", $idade);
        $stmt -> bindParam("sexo", $sexo);
        $stmt -> bindParam("dataNascimento", $dataNascimento);
        $stmt -> bindParam(":cpf", $cpf);
        $stmt -> bindParam(":login", $Login);
        $stmt -> bindParam(":senha", $Senha);
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
        $stmt -> bindParam(":id", $id);

        $stmt -> execute();
        return $stmt;

      } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
      } finally {
        $this -> conn = null;
      }
    }

<<<<<<< HEAD
    public function delete($id) {
      try {
        $sql = " DELETE FROM cliente WHERE id = :id ";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":id", $id);

        $stmt -> execute();
        return $stmt;
        
      } catch(PDOException $e) {
        echo("Error: ".$e -> getMessage());
=======

    public function validar($Login, $Senha){
      try{
        $sql = "SELECT * FROM cliente WHERE login = :login AND senha = :senha";
        $stmt = $this -> conn -> prepare($sql);
        $stmt -> bindParam(":login", $Login);
        $stmt -> bindParam(":senha", $Senha);

        
        $stmt -> execute();
        
        if($stmt -> rowCount() > 0){
          $dado = $stmt -> fetch();
          $_SESSION['usuario'] = $dado['nome'];
          return true;
        } else {
          return false;
        }

      } catch(PDOException $e) {
        echo "Error: ".$e -> getMessage();
>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
      } finally {
        $this -> conn = null;
      }
    }

<<<<<<< HEAD
=======
    public function logado($id){
      global $pdo;

      $array = array();

      $sql = "SELECT * FROM cliente WHERE id = :id";
      $sql = $pdo->prepare($sql);
      $sql -> bindparam("id",$id);
      $sql -> execute();

      if($sql -> rowCount() > 0){
        $array = $sql -> fetch();
        $_SESSION['id'] = $array['id'];
      }
    }

>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
    public function redirect($url){
      header("location: $url");
    }

  }
<<<<<<< HEAD
=======

>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
?>