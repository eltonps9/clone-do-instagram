<?php
session_start();
require_once "../action/usuario.php";
require_once "../template/header.php";
?>
<meta content="charset=UTF-8">
<link rel="stylesheet" href="../assets/css/edite_style.css">

<div class="container">
    <header class="-header">
        <nav>
            <div class="infor">
                detalhes
            </div>
            <div class="edite">
                <div class="edite_usur"> 
                    <img src="../assets/images/<?=$user['foto'];?>" alt="minha foto">
                    <p><?=$user['usuario'];?><a onclick="alt_foto()">Alterar foto do perfil</a></p>
                    
                </div>
                <form class="details" action="../action/edit_action.php" method="POST">
                        <input type="hidden" name="token" value="<?=$user['token'];?>">

                        <input type="text" name="nome" value="<?=$user['nome'];?>">
                        <input type="text" name="detalhes" value="<?=$user['infor'];?>">
                        <input type="submit" value="Enviar" id="botton">
                    
                    
                </form>
                <div>
                    <strong>Ainda em desenvolvimento</strong>
                </div>
            </div>
            
        </nav>
    </header>

    <!-- alterar foto perfil -->
    <div id="perfil_ft" >
        <form action="../action/publicar.php" id="ft_perfil" method="post">
            <label for="arquivo" id="foto_perfil" onclick="alt()"></label>
            <input type="hidden" name="id" value="<?=$user['id'];?>" >
            <input type="file" name="arquivo" accept="image/*" id="imagem_perfil" value="abrir">
            <div class="submit">
                <input type="submit" value="mudar" id="enter">
            </div>
        </form>
    <button onclick="alt_foto()" class="enviar" id="fechar">X</button>   

    </div>
</div>
<script src="../assets/js/script.js"></script>