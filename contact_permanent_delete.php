<?php
    require_once("includes/db.php");
    $id = $_GET['contact_message_id'];
    if($_GET['delete_type'] == 'single'){
        $delete_query = "DELETE FROM contact_messages WHERE id='$id' AND delete_status=2";
        mysqli_query($db_connect, $delete_query);
        header("location: trash_message.php");
    }
    else{
        $delete_query = "DELETE FROM contact_messages WHERE delete_status=2";
        mysqli_query($db_connect, $delete_query);
        header("location: trash_message.php");
    }
    header("location: trash_message.php");

?>