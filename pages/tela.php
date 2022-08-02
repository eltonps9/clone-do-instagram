<?php
session_start();
require_once "../config/connect.php";
require_once "../template/header.php";

if($_SESSION['token']==false){
    header("Location:../index.php");
    exit;
}


