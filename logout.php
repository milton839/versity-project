<?php 
    session_start();
    unset($_SESSION['login_success']);
    unset($_SESSION['login_success_email']);
    unset($_SESSION['username']);
    unset($_SESSION['user_joining_date']);
    $_SESSION['logout_successful'] = "Log Out Successfully Done!";
    header("location:login.php");
    
?>