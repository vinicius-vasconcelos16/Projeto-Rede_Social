<?php 
 include_once 'include/banco.php';
 include_once 'funcoes.php';
 include_once 'login.php';
 $display = "block";
 $color = "white";
?>
<?php 
    $q = "SELECT email, nome, sexo, endereco, telefone, nascimento, senha FROM usuarios where email = '".$_SESSION['email']."'";
    $busca = $banco->query($q);
    $reg = $busca->fetch_object();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Conta - Vinclass</title>
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
</head>
<?php 
  if(empty($_SESSION['email'])){
   $display = "none";
   $color = "lightgray";
   echo erro("<div style='text-align: center; margin-top: 30px;'>Faça o login para ter acesso");
   echo "<a href='tela-login.php' target='_self'><span class='material-symbols-outlined back' style='zoom: 210%; margin-left: 23vw;'>chevron_left</span></a></div>";
  }
?>
<body style="background-color: <?=$color?>">
 <!--Barra de Navegação-->
 <header  style="display: <?=$display?>">
  <div id="barra-navegacao">
   <ul class="nav justify-content-center">
    <li class="nav-item" id="menu-nav">
      <a class="nav-link" href="index-logado.php"><span class="material-symbols-outlined">home</span> Menu</a>
    </li>
    <li class="nav-item" id="contato-nav">
      <a class="nav-link" href="user-contato.php"><span class="material-symbols-outlined">support_agent</span> Contato</a>
    </li>
    <li class="nav-item" id="conta-nav">
      <a class="nav-link active disabled" aria-current="page" href="#" style="opacity: 80%;"><span class="material-symbols-outlined">account_circle</span> Minha Conta</a>
    </li>
   </ul>
  </div>
 </header>
 <main>
  <h1>Meus Dados</h1>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
   <div class="row g-2 align-items-right">
     <div class="col-auto">    
       <label for="email">Email </label>
       <input type="email" name="email" id="email-txtbox" class="form-control form-control-lg" readonly value="<?=$_SESSION['email']?>">
       <label for="nome">Nome </label>
       <input type="text" name="nome" id="nome-txtbox" class="form-control form-control-lg" value="<?=$_SESSION['nome']?>">
       <label for="sexo">Sexo </label>
       <input type="text" name="sexo" class="form-control form-control-lg" id="sexo-txtbox" value="<?=$_SESSION['sexo']?>" placeholder=" M / F / Outro">
       <label for="Nascimento">Nascimento </label>
       <input type="date" name="nascimento" id="nascimento-txtbox" class="form-control form-control-lg" readonly value="<?=$reg->nascimento?>">
     </div>
     <div class="col-auto">
       <label for="endereco">Endereço </label>
       <input type="text" name="endereco" id="endereco-txtbox" class="form-control form-control-lg" value="<?=$_SESSION['endereco']?>">
       
       <label for="telefone">Telefone </label>
       <input type="text" name="telefone" id="telefone-txtbox" class="form-control form-control-lg" value="<?=$_SESSION['telefone']?>">
       
       <abbr title="É necessária a mudança de senha, após a alteração dos dados!"><label for="senha">Senha <strong style="color: red; text-shadow: 0px 0px 1px red;">*</strong> </label></abbr>
       <input type="password" name="senha" id="senha-txtbox" class="form-control form-control-lg" minlength="6" maxlength="8" required oninvalid="this.setCustomValidity('É necessária a mudança de senha, após a alteração dos dados!')">
       <input type="submit" value="Confirmar Alteração" class="btn-confirmar form-control btn btn-outline-success">
     </div>  
   </div>
    <a href="tela-logout.php" style="float: right;"><button type="button" class="btn btn-outline-danger">Sair</button></a>
  </form>
  <?php 
   $nome = $_POST['nome'] ?? $_SESSION['nome'];
   $sexo = $_POST['sexo'] ?? $_SESSION['sexo'];
   $endereco = $_POST['endereco'] ?? $_SESSION['endereco'];
   $telefone = $_POST['telefone'] ?? $_SESSION['telefone'];
   $senha = $_POST['senha'] ?? null;
   $hash_senha = gerarHash($senha);
  ?>
  <?php
   $pedido = "UPDATE usuarios SET nome = '$nome', sexo = '$sexo', endereco = '$endereco', telefone = '$telefone', senha = '$hash_senha' WHERE (email = '".$_SESSION['email']."')";
   $pedir = $banco->query($pedido);
   $q = "SELECT email, nome, sexo, endereco, telefone, nascimento, senha FROM usuarios where email = '".$_SESSION['email']."'";
   $busca = $banco->query($q);
   $reg = $busca->fetch_object();

   $_SESSION['email'] = $reg->email;
   $_SESSION['nome'] = $reg->nome;
   $_SESSION['sexo'] = $reg->sexo;
   $_SESSION['nascimento'] = $reg->nascimento;
   $_SESSION['endereco'] = $reg->endereco;
   $_SESSION['telefone'] = $reg->telefone;
  ?>
 </main>
</body>
</html>