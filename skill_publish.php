<?php
    require_once("includes/db.php");
    $skill_id = $_GET['skill_id'];
    $skill_work = $_GET['work'];

    if($skill_work == 'publish'){
        $update_query = "UPDATE skills SET status = 2 WHERE id=$skill_id";
        mysqli_query($db_connect, $update_query);
    }
    else{
        $update_query = "UPDATE skills SET status = 1 WHERE id=$skill_id";
        mysqli_query($db_connect, $update_query);
    }
    header('location: skills.php');

    

?>