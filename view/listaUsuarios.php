<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// session_start();
// if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
//     echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
//     echo " | <a href='../controller/logout.php'>Sair</a>";
// } else {
//     header("location: login.php");
// }
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$listUsers = $cadUser->getUsuarios();
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
            </header>
            <div class="center_block" style="width: 400px; height: 300px;">
            <div class="users">
            <h1>Lista de Usuários</h1>
            <table><!-- Cria Tabela -->
            <thead><!-- Cria Cabeçalho da Tabela -->
                <tr><!-- Cria linha da Tabela -->
                    <th class="table_element table_head">id</th>
                    <th class="table_element table_head">Usuário</th>
                    <th class="table_element table_head">e-mail</th>
                    <th class="table_element table_head">Funções</th> <!-- Cria cabeçalho de coluna da Tabela -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listUsers as $user): ?>
                <tr>
                    <td class="table_element"><?php echo $user['idUser']; ?></td> <!-- Cria colunas/células da Tabela -->
                    <td class="table_element"><?php echo $user['nome']; ?></td>
                    <td class="table_element"><?php echo $user['email']; ?></td>
                    <td class="table_element">
                        <form action="editarUsuario.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $user['idUser']; ?>"/>
                            <input type="submit" name="editar" value="Editar"/>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button class="buttons" style="margin: 10px;" type="button" onclick="location.href='cadUsuario.php'">Voltar</button>
            </div>
            </div>
    </body>
</html>
