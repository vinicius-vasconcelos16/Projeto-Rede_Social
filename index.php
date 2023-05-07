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
<body style="background-color: <?=$color?>">
 <!--Barra de Navegação-->
 <header  style="display: <?=$display?>">
  <div id="barra-navegacao">
   <ul class="nav justify-content-center">
    <li class="nav-item" id="menu-nav">
      <a class="nav-link active disabled" aria-current="page" href="#" style="opacity: 80%;"> <span class="material-symbols-outlined">home</span> Menu</a>
    </li>
    <li class="nav-item" id="contato-nav">
      <a class="nav-link" href="tela-login.php"><span class="material-symbols-outlined">login</span> Login</a>
    </li>
    <li class="nav-item" id="conta-nav">
      <a class="nav-link" href="registrar-user.php"><span class="material-symbols-outlined">person_add</span> Registrar-se</a>
    </li>
   </ul>
  </div>  
 </header>
 <main style="padding: 0px;">
    <div class="container text-center" style="margin: 0;">
        <div class="row align-items-start">
          <div class="col-sm-3 fixed" style="background-color: lightgrey; margin: 40px;margin-right: 4vw; padding: 0px; border: 2px solid black;">
              <img src="img/sem-foto.png" class="img-fluid" alt="unloged-user.png">
          </div>
          <div class="col-sm-8 p-3" style="border-left: 2px solid black;">

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="paisagem">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

            <div class="row g-0 bg-body-secondary position-relative" style="border-radius: 20px; border: 2px solid #F45BD9; margin-top: 40px; margin-left: 10px; margin-bottom: 20px;">
              <div class="col-md-6 mb-md-0 p-md-4">
                <img src="img/paisagem1.avif" style="border: 2px solid black; border-radius: 20px;" class="w-100" alt="...">
              </div>
              <div class="col-md-6 p-4 ps-md-0">
                <h5 class="mt-0">Columns with stretched link</h5>
                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                <a href="#" class="stretched-link">Go somewhere</a>
              </div>
            </div>

          </div>
        </div>
    </div>
 </main>

</body>
</html>