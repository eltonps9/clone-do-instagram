<?php
session_start();


if($_SESSION['token']){
    session_unset();

        
    $_SESSION['aviso']="desconectado";
    header("Location:../index.php");
    exit;
}