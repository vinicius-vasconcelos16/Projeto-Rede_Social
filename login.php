<?php 
 include_once 'funcoes.php';
 session_start();
 if (!isset($_SESSION['email']))
 {
    $_SESSION['email'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['sexo'] = "";
    $_SESSION['nascimento'] = "";
    $_SESSION['endereco'] = "";
    $_SESSION['telefone'] = "";
    
 }
 function gerarHash($senha){
   $senha_rev = strrev($senha);
   $hash = password_hash($senha_rev, PASSWORD_DEFAULT);
   return $hash;
  }
  function testarHash($senha,$hash){
     $senha_rev = strrev($senha);
     $teste = password_verify($senha_rev,$hash);
     if($teste==1){
        return true;
      } else{
         return false;
      }
   }
 function logout(){
    unset($_SESSION['email']);
    unset($_SESSION['nome']);
    unset($_SESSION['sexo']);
    unset($_SESSION['nascimento']);
    unset($_SESSION['endereco']);
    unset($_SESSION['telefone']);
    echo sucesso("Deslogado com Sucesso!");
 }
?>