<?php
session_start();
require_once "../config/connect.php";


$nome=filter_input(INPUT_POST,'nome');
$infor=filter_input(INPUT_POST,'detalhes');
$token=filter_input(INPUT_POST,'token');


if (isset($token)) {
    
    $sql=$pdo->prepare("UPDATE login SET  infor=:infor , nome=:nome WHERE token=:token");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':infor',$infor);
    $sql->bindValue(':token',$token);
    $sql->execute();
    
    header("Location:../pages/perfil.php");
    exit;
    
}else{ 
    header("Location:../pages/editar_perfil.php");
    exit;
}



