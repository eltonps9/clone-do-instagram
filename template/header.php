<?php
require_once "../config/connect.php";
require_once "../action/usuario.php";


?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$user['nome'];?>(@<?=$user['usuario'];?>)</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/header_style.css">
</head>
<body>
    
    <header>
        <div class="logo">
            EPS-Clone_INSTAGRAM
        </div>
        <div class="pesq">
            <form action="../action/pesquisar.php" class="pesq-2" method="post">
                
                <input type="search" name="pesq" class="pesq" placeholder="Pesquisar" >
                
                
                
            </form>
        </div>
        <div class="icones">
            <ul>
                <li><a href="../pages/tela.php"><img src="../assets/images/svg/casa.svg" alt=""></a></li>
                <li  >
                <button onclick="publicar()" class="public_header">+</button>    
                </li>
                <li class="z-index" onclick="menuconfig()"><img src="../assets/images/<?=$user['foto'];?>" alt="" id="img"></li>
            </ul>
            
        </div>
        
    </header>


     <!-- tela de publicação-->

    <div id="public" >
        <form action="../action/publicar.php" id="public--2" method="post">
            <label class="label" for="arquivo" id="foto_ft" onclick="foto()"></label>
            <input type="hidden" name="id" value="<?=$user['id'];?>" >
            <input type="file" name="arquivo" accept="image/*" id="imagem" value="abrir">
            <div class="enviar">
                <input type="text" name="descricao" id="descricao">
                <input type="submit" value="ok" id="submit">
            </div>
        </form>
    <button onclick="publicar()" class="public_header" id="button-x">X</button>   

    </div>

    <!-- tela de configuração-->
    <div id="menuconfig" >

        <ul>
            <li onclick="config()"><a>Configurações</a></li>
            <li><a href="../pages/perfil.php">Perfil</a></li>
            <li  onclick="mudar_conta()"><a>Trocar de conta</a></li>
            <li><a href="../action/logout.php" >Sair</a></li>

        </ul>

    </div>

    <!-- tela de configuração usuario-->

    <div id="menu-config"  >

        <ul>
            <li><a href="../action/delete_usur.php?id=<?=$user['id'];?>" onclick="confirm('tem certeza que quer excluir sua conta?')" id="excluir">excluir conta</a></li>
            <li><a href="../pages/editar_perfil.php?id=<?=$user['id'];?>" id="editar">Atualizar perfil</a></li>
            <li onclick="config()"><a >voltar</a></li>

        </ul>

    </div>

    <!-- tela de login do usuario-->
    
    <div class="login">

        
        
        <form action="../action/login_action.php" method="post">
            
            <strong>
                CLONE-INSTAGRAM

            </strong>

            <input type="hidden" name="id" value="<?=$user['id'];?>">

            <label for="usuario"></label>
            <input type="text" name="usuario" id="infor" autofocus required placeholder="Telefone ou email">

            <br>
            <label for="senha"></label>
            <input type="password" name="senha" id="senha" required placeholder="senha">

            <br>
            <input id="input" type="submit" value="Entrar" id="button">

            <button onclick="mudar_conta()" class="off_login" id="off-login">X</button>   
        
            
        </form>

    </div>
    <script src="../assets/js/script.js"></script>


    