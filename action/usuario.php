<?php
require "../config/connect.php";

$user=[];
$user1=[];
$token=$_SESSION['token'];
$usuario=$_SESSION['usuario'];
$sql=$pdo->query("SELECT * FROM login");

if(isset($token)){

    $sql=$pdo->prepare("SELECT * FROM login  WHERE email=:email");
    $sql->bindValue(':email',$usuario);
    $sql->execute();


    if($sql->rowCount() > 0){

        $user=$sql->fetch(PDO:: FETCH_ASSOC);

        $_SESSION['infor-usuario']= $user;

    }else{

        $_SESSION['aviso']=' error 404';
        header("Location:../index.php");
        exit;
    }
    

}

?>