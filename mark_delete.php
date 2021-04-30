<?php
    require_once("includes/db.php");
    
    if(isset($_POST['check_delete'])){
        $check_delete = ($_POST['check_delete']);
            foreach($check_delete as $mark_delete){
            $update_query = "UPDATE contact_messages SET delete_status = 2 WHERE id=$mark_delete";
            mysqli_query($db_connect, $update_query);
        }
        header('location: inbox.php');
    }
    else{
        header('location: inbox.php');
    }
?>