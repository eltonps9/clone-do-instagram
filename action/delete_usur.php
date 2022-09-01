<?php
session_start();
require_once "../config/connect.php";

$id = filter_input(INPUT_GET, 'id');


if(isset($id)){

    $sql=$pdo->prepare("DELETE  FROM login WHERE id=:id");
    $sql->bindValue(':id',$id);
    $sql->execute();

    $_SESSION['cad']="usuario excluido!";
    header("Location:../pages/cadastro.php");
    exit;

}else{

    $_SESSION['aviso']="Algo de errado aconteceu";
    header("Location:../index.php");
    exit;

}