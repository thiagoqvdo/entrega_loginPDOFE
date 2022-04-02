<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();

require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="shortcut icon" href="./imgs/iconPantera.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/global.css">
    </head>
    <body>
    <div class="container">
    <header>
            <div style=" position: relative; width: 100%; height: 100%; display: grid; grid-template-columns: 2fr 5fr;">
            <div style="position: relative; width: 100%; height: 100%;">
            <img class="center_block" style="width: 90px; height: 90px;" src="./imgs/iconPantera.png" alt="IconPage">
            </div>
            <div style="position: relative; width: 100%; height: 100%;">
            <nav class="navbar center_block" style="width: 95%; height: 46px;">
                <ul class="nav_items">
                  <li class="nav_item">
                    <a  class="nav_link" href="../index.php">Home</a>
                  </li>
                  <li class="nav_item">
                    <a  class="nav_link" href="./cadUsuario.php">Cadastrar</a>
                  </li>
                  <li class="nav_item">
                    <a class="nav_link" href="./listaUsuarios.php">Listar</a>
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
                            <a style="text-decoration: none; " href='../controller/logout.php'>Sair</a>                       
                        </button>
                   </li>
              </ul>
              </div>
              </div>               
            </header>
          <div class="center_block" style="width: 400px; height: 328px;">
          <div class="formulario" style="width: 400px;">
          <form action="<?php $cadUser->inserir(); ?>" method="POST">
          <div>
          <h1>Cadastro de Usuário</h1>
          </div>
            <div class="div_input">
              <input class="input_text" type="text" name="nome" required placeholder="Nome aqui ..."/>
            </div>
            <div class="div_input">
              <input class="input_text" type="email" name="email" required placeholder="E-mail aqui ..."/>
            </div>
            <div class="div_input">
              <input class="input_text" type="password" name="pass" required placeholder="Senha aqui ..."/>
            </div>
            <div class="div_input">
              <input class="buttons" type="submit" name="salvar" value="Salvar"/>
              <input class="buttons" type="reset" name="limpar" value="Limpar"/>
              <input class="buttons" type="button" value="Voltar" onclick="location.href='../index.php'"/>
            </div>
            <div class="div_input">
              <input class="buttons" type="button" value="Listar Users" onclick="location.href='listaUsuarios.php'"/>
            </div>
          </form>    
          </div>
        </div>
        </div>
    </body>
</html>
