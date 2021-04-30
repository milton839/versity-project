<?php 
    session_start();
    $_SESSION['password_generate']  = substr(strtoupper(uniqid()), 5, 8);
    header("location: register.php");
    
?>