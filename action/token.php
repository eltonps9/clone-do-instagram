<?php

    if($_SESSION['token']==false){
        header("Location:../index.php");
        exit;
    }

?>