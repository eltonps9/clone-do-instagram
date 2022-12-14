<?php
session_start();
require_once "../config/connect.php";

    
$val_usuario=filter_input(INPUT_POST, 'usuario');
$val_senha=filter_input(INPUT_POST, 'senha');

// token a ser inserido no banco de dados
$token=md5(time(),15);


if(isset($val_usuario) && isset($val_senha) ){
        
    //verificação do usuario 
    $sql=$pdo->prepare("SELECT * FROM login WHERE email=:email && senha=:senha");
    $sql->bindValue(':email',$val_usuario);
    $sql->bindValue(':senha',$val_senha);
    $sql->execute();

    if($sql->rowCount()>0){
        //atualização do token
        $sql_update=$pdo->prepare("UPDATE login SET token=:token WHERE email=:usuario ");
        $sql_update->bindValue('token',$token);
        $sql_update->bindValue(':usuario',$val_usuario);
        $sql_update->execute();

        $_SESSION['token']= $token;
        $_SESSION['usuario']= $val_usuario;
        header("Location:../pages/tela.php");
        exit;

        
    }else{
        $_SESSION['aviso']= "Nenhum usuário encontrado ou informação errada, cadastre-se!";
    
        header("Location:../index.php");
        exit;
    }
    
}