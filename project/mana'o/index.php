<?php

  include_once('includes/init.php');
  
  if(!isset($_SESSION['username'])){
    header("Location:templates/login.php");
    exit();
  }
?>