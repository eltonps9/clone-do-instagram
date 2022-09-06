<?php
require "../config/connect.php";


$img= md5(time(),).".jpg";
$id=filter_input(INPUT_GET,'id');


if($id && $_FILES){
    
    $sql=$pdo->prepare("SELECT * FROM login  WHERE id=:id");
    $sql->bindValue(':id',$id);
    $sql->execute();

    if($sql->rowCount()!=0){
        
        $sql=$pdo->prepare("UPDATE login SET  foto=:img WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':img',$img);
        $sql->execute();

        if($_FILES ){
            
            move_uploaded_file($_FILES['arquivo']['tmp_name'],"../assets/images/".$img);
            header("Location:../pages/editar_perfil.php");
            exit;

        }else{
            echo "algo de errado";
        }

        header("Location:../pages/editar_perfil.php");
        exit;
    }else{
        echo "nao achei nada";
    }
}

?>