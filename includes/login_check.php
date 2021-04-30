<?php 
    if($_SESSION['login_success'] == false){
        $_SESSION['login_success_error'] = "You have to login first to see this page";
        header("location:login.php");
    }
?>