<?php
    require_once("includes/login_check.php");
    require_once("includes/db.php");
    $contact_id = $_GET['contact_message_id'];
    $update_query = "UPDATE contact_messages SET message_status = 1 WHERE id=$contact_id";
    mysqli_query($db_connect, $update_query);
    header('location:inbox.php');
?>