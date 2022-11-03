<?php 

require "../config/connect.php";


$comentario=filter_input(INPUT_POST,'comentario');
$id=filter_input(INPUT_POST,'id');



if(isset($id) && isset($comentario)){

    $sql=$pdo->prepare("INSERT INTO comentarios (comentarios, id_log ) VALUES (:comentario, :id_log)");
    $sql->bindValue(':comentario',$comentario);
    $sql->bindValue(':id_log',$id);
    $sql->execute();   

    header("Location:../pages/tela.php");
    exit;
    
}




?> 
