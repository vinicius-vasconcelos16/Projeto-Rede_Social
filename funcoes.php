<?php 

 function is_logado(){
  if(empty($_SESSION['email'])){
    return false;
  }
  else{
    return true;
  }
 }
 
 function sucesso($msg){
  $resp = "<div class='msg_sucesso'><span class='material-symbols-outlined'>check_circle</span>$msg</div>";
  return $resp;
 }  
 function alerta($msg){
  $resp = "<div class='msg_alerta'><span class='material-symbols-outlined'>info</span>$msg</div>";
  return $resp;
 }
 function erro($msg){
  $resp = "<div class='msg_erro'><span class='material-symbols-outlined'>warning</span>$msg</div>";
  return $resp;
 }
?>