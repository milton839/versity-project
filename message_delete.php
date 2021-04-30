<?php
    require_once("includes/db.php");
    $id = $_GET['contact_message_id'];
    if($_GET['delete_type'] == 'single'){
        $update_query = "UPDATE contact_messages SET delete_status = 2 WHERE id=$id";
        mysqli_query($db_connect, $update_query);
        header("location: inbox.php");
    }
    else{
        $update_query = "UPDATE contact_messages SET delete_status = 2";
        mysqli_query($db_connect, $update_query);
        header("location: inbox.php");
    }
    header("location: inbox.php");

?>