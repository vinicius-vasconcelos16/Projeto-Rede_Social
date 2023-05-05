<?php 
 $banco = new mysqli("localhost","root","","projeto-login");
 if($banco->connect_errno){
  echo erro("Erro ao se conectar com o banco de dados.");
  die();
 }

?>