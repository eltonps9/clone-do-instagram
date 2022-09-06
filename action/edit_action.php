<?php
session_start();
require_once "../config/connect.php";


$nome=filter_input(INPUT_POST,'nome');
$infor=filter_input(INPUT_POST,'detalhes');
$id=filter_input(INPUT_GET,'id');


if (isset($id)) {
    
    $sql=$pdo->prepare("SELECT * FROM login WHERE id=:id");
    $sql->bindValue(':id',$id);
    $sql->execute();

    if($sql->rowCount()!=0){
        $sql=$pdo->prepare("UPDATE login SET  infor=:infor , nome=:nome WHERE id=:id");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':infor',$infor);
        $sql->bindValue(':id',$id);
        $sql->execute();
        
        header("Location:../pages/perfil.php");
        exit;
    }else{ 
        header("Location:../pages/editar_perfil.php");
        exit;
    }
    
}else{ 
    header("Location:../pages/editar_perfil.php");
    exit;
}



