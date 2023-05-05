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
  <title>Menu - Vinclass</title>
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
      <a class="nav-link active disabled" aria-current="page" href="#" style="opacity: 80%;"> <span class="material-symbols-outlined">home</span> Menu</a>
    </li>
    <li class="nav-item" id="contato-nav">
      <a class="nav-link" href="user-contato.php"><span class="material-symbols-outlined">support_agent</span> Contato</a>
    </li>
    <li class="nav-item" id="conta-nav">
      <a class="nav-link" href="user-dados.php"><span class="material-symbols-outlined">account_circle</span> Minha Conta</a>
    </li>
   </ul>
  </div>  
 </header>
 <main>
    <h1>Menu</h1>
 </main>

</body>
</html>