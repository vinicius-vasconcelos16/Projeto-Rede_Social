<?php 
 include_once 'include/banco.php';
 include_once 'funcoes.php';
 include_once 'login.php';
?>
<?php 
  if(!is_logado()){
    include_once 'registrar-user-form.php';
    $email = $_POST['email'] ?? null;
    $nome = $_POST['nome'] ?? null;
    $sexo = $_POST['sexo'] ?? null;
    $nascimento = $_POST['nascimento'] ?? null;
    $endereco = $_POST['endereco'] ?? null;
    $telefone = $_POST['telefone'] ?? null;
    $senha = $_POST['senha'] ?? null;
    
    $p = "SELECT email FROM usuarios";
    $buscar = $banco->query($p);
    $reg = $buscar->fetch_object();
    $aux = 0;
    for($i = 0;$reg->email;$i++){
     if($reg->email == $email){
      echo erro("O email já está cadastrado! Faça <a href='tela-login.php'>login</a> aqui.");
      $aux = 1;
     }
    } 
    if(!$email == null || !$nome == null || !$senha == null || $aux = 1){
     $hash_senha = gerarHash($senha);
     $q = "INSERT INTO usuarios (`email`, `nome`, `sexo`, `nascimento`, `endereco`, `telefone`, `senha`) VALUES ('$email','$nome','$sexo','$nascimento','$endereco','$telefone','$hash_senha')";
     $insercao = $banco->query($q);
     echo sucesso("Usuário criado com sucesso! Faça <a href='tela-login.php'>login</a> para continuar ");
     echo "<a href='tela-login.php'><span class='material-symbols-outlined back' style='zoom: 210%; margin-left: 23vw;'>chevron_right</span></a>";
    }

    
  } else{
   echo erro("Você já está logado!");
   echo "<a href='index-logado.php' target='_self'><span class='material-symbols-outlined back' style='zoom: 210%; margin-left: 23vw;'>chevron_left</span></a></div>";
  }

?>

