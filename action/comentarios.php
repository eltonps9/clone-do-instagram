<?php 
session_start();

require "../config/connect.php";


$comentario=filter_input(INPUT_POST,'comentario');
$id=filter_input(INPUT_GET,'id');

/*   mexer nessa inserção de comentarios
if(isset($id)){

       
    
        $sql=$pdo->prepare("INSERT INTO comentarios (comentarios,id_login)VALUES(:comentario,:id) WHERE id-coment=:id");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':comentario',$comentario);
        $sql->execute();   
    
        header("Location:../pages/tela.php");
        exit;
        
    }


?> 
*/