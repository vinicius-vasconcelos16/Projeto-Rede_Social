<?php 
 include_once 'include/banco.php';
 include_once 'funcoes.php';
 include_once 'login.php';
 $display = "block";
 $color = "white";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - Vinclass</title>
  <link rel="shortcut icon" href="img/pesquisa.png" type="image/x-icon">
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome / Ícones -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <!-- Style Local -->
  <style>
  </style>
</head>
<body style="background-color: <?=$color?>">
 <!--Barra de Navegação-->
  <header  style="display: <?=$display?>">
   <div id="barra-navegacao">
    <ul class="nav justify-content-center">
     <li class="nav-item" id="menu-nav">
      <a class="nav-link" href="index.php"> <span class="material-symbols-outlined">home</span> Menu</a>
     </li>
     <li class="nav-item" id="contato-nav">
      <a class="nav-link" href="tela-login.php"><span class="material-symbols-outlined">login</span> Login</a>
     </li>
     <li class="nav-item" id="conta-nav">
      <a class="nav-link active disabled" href="registrar-user.php" aria-current="page" style="opacity: 80%;"><span class="material-symbols-outlined">person_add</span> Registrar-se</a>
     </li>
    </ul>
   </div>  
  </header>
  <main style="text-align: center; padding: 20px">
   <h1>Registrar-se</h1>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <div class="row g-2 align-items-right">
     <div class="col-auto" style="margin: auto; margin-right: 5px;">    
       <label for="email">Email </label>
       <input required type="email" name="email" id="email-txtbox" class="form-control form-control-lg" placeholder="Coloque seu email">
       <label for="nome">Nome </label>
       <input required type="text" name="nome" id="nome-txtbox" class="form-control form-control-lg" placeholder="Nome Completo">
       <label for="sexo">Sexo </label>
       <input required type="text" name="sexo" class="form-control form-control-lg" id="sexo-txtbox" placeholder=" M / F / Outro">
       <label for="Nascimento">Nascimento </label>
       <input required type="date" name="nascimento" id="nascimento-txtbox" class="form-control form-control-lg">
     </div>
     <div class="col-auto" style="margin: auto; margin-left: 5px;">
       <label for="endereco">Endereço </label>
       <input required type="text" name="endereco" id="endereco-txtbox" class="form-control form-control-lg" placeholder="Rua/Av e Número">
       
       <label for="telefone">Telefone </label>
       <input required type="text" name="telefone" id="telefone-txtbox" class="form-control form-control-lg" placeholder="(xx) xxxxx-xxxx">
       
       <abbr title="É necessária a mudança de senha, após a alteração dos dados!"><label for="senha">Senha</label></abbr>
       <input required type="password" name="senha" id="senha-txtbox" class="form-control form-control-lg" minlength="6" maxlength="8" placeholder=" ● ● ● ● ● ● ● ●">
       <input required type="submit" value="Registrar-se" class="btn-confirmar form-control btn btn-outline-success">
     </div>  
    </div>
   </form>
  </main>
  <?php 
    $email = $_POST['email'] ?? null;
    $nome = $_POST['nome'] ?? null;
    $sexo = $_POST['sexo'] ?? null;
    $nascimento = $_POST['nascimento'] ?? null;
    $endereco = $_POST['endereco'] ?? null;
    $telefone = $_POST['telefone'] ?? null;
    $senha = $_POST['senha'] ?? null;

    $p = "SELECT email FROM usuarios";
    $busca = $banco->query($p);
    $aux = 1;

    if($busca || !$busca){
      $reg = $busca->fetch_object();
      while($reg){
        $reg = $busca->fetch_object();
        if($email == null){
          break;
        }else{
          if(@$reg->email == "$email"){
            echo erro("O email já possui um cadastro! Faça <a href='tela-login.php'>login</a> aqui.");
            $aux = 1;
            break;
          } else{
            $aux = 0;
          }
        }
      }
    }
    if($email == null || $aux == 1){
      exit;
    }else{
      $hash_senha = gerarHash($senha);
      $q = "INSERT INTO usuarios (`email`, `nome`, `sexo`, `endereco`, `telefone`, `senha`) VALUES ('$email','$nome','$sexo', '$endereco','$telefone','$hash_senha')";
      $insercao = $banco->query($q);
      $q_nascimento = "INSERT INTO usuarios (`nascimento`) VALUES ('$nascimento')";
      $insercao_nasc = $banco->query($q_nascimento);
      if($insercao && $insercao_nasc){
        echo "<br>";
        echo sucesso("Usuário criado com sucesso! Faça <a href='tela-login.php'>login</a> para continuar ");
      } elseif(!$insercao_nasc){
        echo erro("Você precisar ter 16+ anos para criar uma conta.");
      }
    }
  ?>
 </body>
</html>