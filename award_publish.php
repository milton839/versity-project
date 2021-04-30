<?php
    require_once("includes/db.php");
    $award_id = $_GET['award_id'];
    $award_work = $_GET['work'];

    if($award_work == 'publish'){
        $update_query = "UPDATE awards SET status = 2 WHERE id=$award_id";
        mysqli_query($db_connect, $update_query);
    }
    else{
        $update_query = "UPDATE awards SET status = 1 WHERE id=$award_id";
        mysqli_query($db_connect, $update_query);
    }
    header('location: awards.php');
?>