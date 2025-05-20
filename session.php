<?php
session_start();

if(!isset($_SESSION['username']) || !isset($_COOKIE['username'])){
     session_destroy();
     header('location:login.php');
}

if($_COOKIE['username'] < time() ){
    session_destroy();
    header("location:login.php");
}

?>



 