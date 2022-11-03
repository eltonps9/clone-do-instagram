<?php
require "../config/connect.php";


$descricao=filter_input(INPUT_POST,'descricao');
$img= md5(time(),).".jpg";
$id=filter_input(INPUT_GET,'id');


if($descricao && $_FILES){
    
    $sql=$pdo->prepare("SELECT * FROM login  WHERE id=:id");
    $sql->bindValue(':id',$id);
    $sql->execute();

    if($sql->rowCount()!=0){
        
        $sql=$pdo->prepare("INSERT INTO postagem (descricao, post, id_post)VALUES (:descr, :img, :id) ");
        $sql->bindValue(':descr',$descricao);
        $sql->bindValue(':id',$id);
        $sql->bindValue(':img',$img);
        $sql->execute();

        if($_FILES ){
            
            move_uploaded_file($_FILES['arquivo']['tmp_name'],"../assets/images/".$img);
            header("Location:../pages/tela.php");
            exit;

        }else{
            echo "algo de errado";
        }

        header("Location:../pages/tela.php");
        exit;
    }else{
        echo "nao achei nada";
    }
}

?>
