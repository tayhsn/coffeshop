<?php
 
  @session_start(); 
  require_once '../model/cliente.php';
  @session_destroy();
  header ('Location: http://localhost/PwMat/cafezin/index.php');

?>