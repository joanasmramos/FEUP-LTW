<?php
    include_once('../includes/init.php');

    if(getUserID() !== null  && getUsername() !== null) {
        $_SESSION = array();
        header('Location:../index.php');   
    } else {
        $_SESSION['ERROR'] = "Error logging out!";
        header("Location:".$_SERVER['HTTP_REFERER']."");
    }
?>