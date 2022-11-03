<?php

require_once "../action/usuario.php";
require_once "../action/comentarios.php";


$infor_usuario=  $_SESSION['infor-usuario'];
$user1=[];
if(isset($_SESSION['token'])){

    $token= $_SESSION['token'];
    $usur= $_SESSION['usuario'];
    $id_user= $user['id'];


    $sql=$pdo->prepare("SELECT postagem.*, login.id, login.nome, login.foto FROM login INNER JOIN postagem ON login.id =  postagem.id_post ORDER BY postagem.id DESC ");
    
    $sql->execute();  


    if($sql){

        $user1=$sql->fetchAll(PDO:: FETCH_ASSOC);
    
    }else{

        $_SESSION['aviso']=' error 404';
        header("Location:../index.php");
        exit;
    }

}



?>
<meta content="charset=UTF-8">
<link rel="stylesheet" href="../assets/css/body_style.css">

<div class="container">

    <!-- postagem feita -->
        <?php  
            foreach($user1 as $key): 
        ?>
            <div class="post">
                <div class="infor">
                    <div class="img">
                        <img src="../assets/images/<?=$key['foto'];?>" alt="perfil">
                    </div>
                    <strong>
                    </strong>
                    <div class="comp">
                        <div class="pontos">-</div>
                        <div class="pontos">-</div>
                    </div>
                </div>
    
                <img class="postagem" src="../assets/images/<?=$key['post'];?>" alt="postagem ">
    
                <div class="entreter">
                    <div class="like_coment">
                        <img src="../assets/images/svg/like-svgrepo-com.svg" alt="like">
                        <img src="../assets/images/svg/menu-hamburguer.svg" alt="comentario">
                        <img src="../assets/images/svg/informacoes.svg" alt="enviar">
                    </div>
                    <div class="coment_ver">
                        <p>
                            <?=$key['descricao'];?>
                        </p>
    
                    </div>
                    <div>
                        <strong>Ainda em desenvolvimento</strong>
                    </div>
                    <form action="../action/comentarios.php" method="POST" class="coment_post">
                        <input type="hidden" name="id"  value=" <?=$infor_usuario['id'];?>">
                        <input type="text" name="comentario" id="comentario">
                        <input type="submit" value="comentar">
                    </form>
                </div>
                
            </div>
        <?php 
            endforeach;
        ?>

</div>