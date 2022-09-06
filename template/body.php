<?php
require_once "../action/usuario.php";
require_once "../action/comentarios.php";

?>
<meta content="charset=UTF-8">
<link rel="stylesheet" href="../assets/css/body_style.css">

<div class="container">
    <!-- postagem feita -->
    <?php
        foreach($user as $usu):
    ?>
        <div class="post">

            <div class="infor">
                <div class="img">
                    <img src="../assets/images/<?=$usu['foto'];?>" alt="perfil">

                </div>
                <strong>
                </strong>
                <div class="comp">
                    <div class="pontos">-</div>
                    <div class="pontos">-</div>
                </div>
            </div>
            
            <img class="postagem" src="../assets/images/<?=$usu['post'];?>" alt="postagem ">
            
            <div class="entreter">
                <div class="like_coment">
                    <img src="../assets/images/svg/like-svgrepo-com.svg" alt="like">
                    <img src="../assets/images/svg/menu-hamburguer.svg" alt="comentario">
                    <img src="../assets/images/svg/informacoes.svg" alt="enviar">
                </div>
                <div class="coment_ver">
                    <p>
                        <?=$usu['descr'];?>
                    </p>

                </div>
                <div>
                    <strong>Ainda em desenvolvimento</strong>
                </div>
                <form action="../action/comentarios.php?id=<?=$usu['id'];?>" method="POST" class="coment_post">

                    <input type="text" name="comentario" id="comentario">
                    <input type="submit" value="comentar">
                </form>
            </div>
            
        </div>
    <?php
    endforeach;
    ?>
</div>
