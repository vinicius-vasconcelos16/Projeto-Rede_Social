<?php 
 include_once 'include/banco.php';
 include_once 'funcoes.php';
 include_once 'login.php';
 $display = "block";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - VinClass</title>
  <!-- Favicon -->
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
<br>
<br>
<?php 
 if(!empty($_SESSION['nome'])){
  $display = "none";
  echo sucesso("Você ja está logado, vá para a <a href='index-logado.php'>página principal</a>!");
 }
?>
<body style="background-color: lightgrey;">
 <div class="container" style="display: <?=$display?>">
  <?php
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;
    if(is_null($email) || is_null($senha)){
     require "tela-login-form.php";
    } else{
     $q = "SELECT email, nome, sexo, nascimento, endereco, telefone, senha FROM usuarios WHERE email = '$email' LIMIT 1";
     $busca = $banco->query($q);
     if(!$busca){
      echo erro("A conexão com o banco falhou!");
     }else{
        if($busca->num_rows == 0){
        echo "<div class='container' style='text-align: center; margin-top: 30px;'>";
        echo erro("O email não existe! Preencha com um email válido.");
        echo "<a href='tela-login.php' target='_self'><span class='material-symbols-outlined back' style='zoom: 210%; margin-left: 23vw;'>chevron_left</span></a>";
        echo "</div>";
       } else{
        $reg = $busca->fetch_object();
        if(testarHash($senha,$reg->senha)){
          echo "<div class='spinner-border text-primary' role='status'>";
          echo "<span class='visually-hidden'></span>";
          echo "</div>";
         echo sucesso("Logado com Sucesso!");
         $_SESSION['email'] = $reg->email;
         $_SESSION['nome'] = $reg->nome;
         $_SESSION['sexo'] = $reg->sexo;
         $_SESSION['nascimento'] = $reg->nascimento;
         $_SESSION['endereco'] = $reg->endereco;
         $_SESSION['telefone'] = $reg->telefone;
         echo "<a href='index-logado.php' target='_self'><span class='material-symbols-outlined back' style='zoom: 210%; margin-left: 23vw;'>chevron_left</span></a>";
        } else{
         echo "<form>";
         echo erro("Senha Incorreta.");
         echo "<a href='tela-login.php' target='_self'><span class='material-symbols-outlined back' style='zoom: 210%; margin-left: 23vw;'>chevron_left</span></a>";
         echo "</form>";
        }
       }
      }
    }
  ?>
 </div>

</body>
</html>