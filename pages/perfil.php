<?php
session_start();
require_once "../action/usuario.php";
require_once "../template/header.php";
?>
<meta content="charset=UTF-8">
<link rel="stylesheet" href="../assets/css/perfil_style.css">

<div class="container">
    <header class="-header">
        <nav>
            <div class="foto">
                <img src="../assets/images/<?=$user['foto'];?>" alt="minha foto">
            </div>
            <div class="infor">
                <div class="infor_usur">
                    <p><?=$user['usuario'];?></p>
                    <a href="./editar_perfil.php">Editar perfil</a>
                </div>
                <div class="infor_publi">
                    <p><strong>3</strong> publicações</p>
                    <p><strong>20</strong> seguidores</p>
                    <p><strong>8</strong> seguindo</p>
                </div>
                <div class="details">
                    <strong><?=$user['nome'];?></strong>
                    <p><?=$user['infor'];?></p>
                </div>
                
                
            </div>
            
        </nav>
        <div>
            <strong>Ainda em desenvolvimento</strong>
        </div>
        <div class="store-fixed">
                
            <img src="" alt="store 1" class="store--fixeds">
            <img src="" alt="store 2" class="store--fixeds">
            <img src="" alt="store 3" class="store--fixeds">
            <img src="" alt="store 4" class="store--fixeds">
            
        </div>

    </header>
    <nav class="public">
        <strong>publicacoes</strong>
    </nav>
</div>
