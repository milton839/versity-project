<?php
    require_once("includes/db.php");
    
    if(isset($_POST['check_delete'])){
        $check_delete = ($_POST['check_delete']);
            foreach($check_delete as $mark_delete){
            $update_query = "UPDATE contact_messages SET delete_status = 1 WHERE id=$mark_delete";
            mysqli_query($db_connect, $update_query);
        }
        header('location: trash_message.php');
    }
    else{
        header('location: trash_message.php');
    }
?>