<?php
    require_once("includes/login_check.php");
    require_once("includes/db.php");
    $update_query = "UPDATE contact_messages SET message_status = 2";
    mysqli_query($db_connect, $update_query);
    header('location:inbox.php');
?>