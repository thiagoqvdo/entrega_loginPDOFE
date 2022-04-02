<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cLogin.php';
$login = new cLogin();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="shortcut icon" href="./imgs/iconPantera.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/login.css">
    </head>
    <body>
        <section class="container" style="height: 100vh;">
        <div class="center_block" style="width: 375px; height: 375px;">
        <div class="formulario">
            <form action="<?php $login->login(); ?>" method="POST" name="form">
                <div>
                <h1 class="big_title">Login</h1>
                </div>
                <div class="div_input">
                    <input class="input_text" type="email" name="email" required placeholder="E-mail aqui ..."/>
                </div>
                <div class="div_input">
                    <input class="input_text" type="password" name="pass" required placeholder="Senha aqui ..."/>
                </div>
                <div class="div_input">
                    <input class="buttons" type="submit" name="logar" value="Logar"/>
                    <input class="buttons" type="reset" name="limpar" value="Limpar"/>
                </div>
        </form>
        </div>
        </div>
        </section>
    </body>
</html>
