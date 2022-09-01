<?php
session_start();
require_once "../config/connect.php";


$foto=filter_input(INPUT_POST,'arquivo');
$foto_descricao=filter_input(INPUT_POST,'descricao');
$id=filter_input(INPUT_POST,'id');

if(isset($foto)){

    $sql_sl=$pdo->prepare("SELECT * FROM login WHERE id=:id"); 
    $sql_sl->bindValue(':id',$id);
    $sql_sl->execute();

    if($sql_sl->rowCount()>0){
        $sql=$pdo->prepare("INSERT INTO login (post,descr) VALUES(:foto,:descr)");
        $sql->bindValue(':foto',$foto);
        $sql->bindValue(':descr',$foto_descricao);
        $sql->execute();
    
    }
}
