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
    <title>clone-instagram</title>
    <link rel="stylesheet" href="../assets/css/header_style.css">
</head>
<body>
    
    <header>
        <div class="logo">
            EPS-Clone_INSTAGRAM
        </div>
        <div class="pesq">
            <form action="../config/pesquisar.php" class="pesq-2">
                
                <input type="search" name="pesq" class="pesq" placeholder="Pesquisar" >
                <img src="../assets/images/svg/procurar.svg" alt="">
                
                
                
            </form>
        </div>
        <div class="icones">
            <ul>
                <li><a href="../pages/tela.php"><img src="../assets/images/svg/casa.svg" alt=""></a></li>
                <li  >
                <button onclick="publicar()" class="public_header">+</button>    
                </li>
                <li><a href="../pages/perfil.php"><img src="../assets/images/svg/informacoes.svg" alt=""></a></li>
                <li class="z-index" ><a href="../action/logout.php" onclick="menuconfig()"><img src="../assets/images/<?=$user['foto'];?>" alt="" id="img"></a></li>
            </ul>
            
        </div>
        
    </header>


     <!-- tela de publicação-->

    <div id="public" >
        <form action="../action/publicar.php" id="public--2" method="post">
            <label for="arquivo" id="foto_ft" onclick="foto()"></label>
            <input type="file" name="arquivo" accept="image/*" id="imagem" value="abrir">
            <div class="enviar">
                <input type="text" name="descricao" id="descricao">
                <input type="submit" value="ok" id="submit">
            </div>
        </form>
    <button onclick="publicar()" class="public_header" id="button-x">x</button>   

    </div>

    <!-- tela de configuração-->
    <div id="menuconfig" >
        

    <button onclick="menuconfig()" class="menu_fechar" id="menu_fechar">x</button>   
    </div>
    <script src="../assets/js/script.js"></script>


    