<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$user = null;
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
if(isset($_POST['editar'])){
    $user = $cadUser->getUsuarioById($_POST['id']);
}
?>
<html>
<head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
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
            </header>
            <div class="center_block" style="width: 400px; height: 328px;">
          <div class="formulario" style="width: 400px;">
        <form action="<?php $cadUser->update(); ?>" method="POST">
            <div>
          <h1>Cadastro de Usuário</h1>
          </div>
          <input type="hidden" name="id" required value="<?php echo $user[0]['idUser']; ?>"/>
            <div class="div_input">
              <input class="input_text" type="text" name="nome" required value="<?php echo $user[0]['nome']; ?>"/>
            </div>
            <div class="div_input">
              <input class="input_text" type="email" name="email" required value="<?php echo $user[0]['email']; ?>"/>
            </div>
            <div class="div_input">
              <input class="buttons" type="submit" name="update" value="Salvar"/>
              <input class="buttons" type="button" value="Cancelar" onclick="location.href='listaUsuarios.php'"/>
            </div>
        </form
        ></div>
        </div>
        </div>
    </body>
</html>
