<?php
require_once "../config/connect.php";

$pesquisa=filter_input(INPUT_POST,'pesq');



if($pesquisa){
    $usuario_pesq=[];
    $sql=$pdo->query("SELECT * FROM login ");
    
    if($sql){
        $usuario_pesq=$sql->fetch(PDO:: FETCH_ASSOC);
        header("Location:../template/body_pesquisa.php");
        exit;
    }

}
header("Location:../pages/tela.php");
exit;


?>