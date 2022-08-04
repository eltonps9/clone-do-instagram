<?php
session_start();
require_once "../config/connect.php";

$nome=filter_input(INPUT_POST,'nome');
$email=filter_input(INPUT_POST,'infor');
$senha=filter_input(INPUT_POST,'senha');
$usuario=filter_input(INPUT_POST,'usuario');
$token=md5(time(),50);


if(isset($nome) && isset($email) && isset($senha) && isset($usuario)){

    $sql_sl=$pdo->prepare("SELECT * FROM login WHERE senha=:senha && email=:email"); 
    $sql_sl->bindValue(':senha',$senha);
    $sql_sl->bindValue(':email',$email);
    $sql_sl->execute();

    

    if($sql_sl->rowCount()==0){
        $sql=$pdo->prepare("INSERT INTO login (nome, usuario, senha, email, token)VALUES(:nome,:usuario,:senha,:email,:token)");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':usuario',$usuario);
        $sql->bindValue(':senha',$senha);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':token',$token);
        $sql->execute();
        
    
        $_SESSION['token']=$token;
        header("Location:../pages/tela.php");
        exit;
    }else{
        $_SESSION['cad']="Email ou senha já existe! ";
        header("Location:../pages/cadastro.php");
        exit;
    }
}

