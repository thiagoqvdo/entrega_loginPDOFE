<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='controller/logout.php'>Sair</a>";
} else {
-->
<?php
session_start();
if (!isset($_SESSION['logadoT']) && $_SESSION['logadoT'] != true) {
    header("location: view/login.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="shortcut icon" href="./view/imgs/iconPantera.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./view/css/reset.css">
        <link rel="stylesheet" href="./view/css/global.css">
        <link rel="stylesheet" href="./view/css/home.css">
    </head>
    <body>
        <div class="container">
        <header>
            <div style=" position: relative; width: 100%; height: 100%; display: grid; grid-template-columns: 2fr 5fr;">
            <div style="position: relative; width: 100%; height: 100%;">
            <img class="center_block" style="width: 90px; height: 90px;" src="./view/imgs/iconPantera.png" alt="IconPage">
            </div>
            <div style="position: relative; width: 100%; height: 100%;">
            <nav class="navbar center_block" style="width: 95%; height: 46px;">
                <ul class="nav_items">
                  <li class="nav_item">
                    <a  class="nav_link" href="./index.php">Home</a>
                  </li>
                  <li class="nav_item">
                    <a  class="nav_link" href="./view/cadUsuario.php">Cadastrar</a>
                  </li>
                  <li class="nav_item">
                    <a class="nav_link" href="./view/listaUsuarios.php">Listar</a>
                  </li>
                </ul>
               </nav>
            </div>
            </div>
            <div style="position: relative; width: 100%; height: 100%;">
                <div class="center_block" style="width: 280px; height: 38px;">
              <ul class="user">
                   <li class="user_info">
                       <h3 class="user_name">
                            <?php echo $_SESSION['usuarioT']?>
                       </h3>
                   </li>
                   <li class="user_info">
                       <h3 class="user_email">
                       <?php echo $_SESSION['emailT']?>
                       </h3>
                   </li>
                   <li>
                       <button class="sair_button"> 
                            <a style="text-decoration: none; " href='./controller/logout.php'>Sair</a>                       
                        </button>
                   </li>
              </ul>
              </div>
              </div>               
            </header>
            <div style="width: 100%; height: 450px; flex-direction: column; display: flex; align-items: center;">
            <img  src="./view/imgs/pantera.png" alt="Pantera cor de rosa">
            <h1 style="font-size: 4em; width: 100%; text-align: center;">Bem-vindo!</h1>
            </div>
            
        </div>
    </body>
</html>
