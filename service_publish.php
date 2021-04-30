<?php
    require_once("includes/db.php");
    $service_id = $_GET['service_id'];
    $service_work = $_GET['work'];

    if($service_work == 'publish'){
        $update_query = "UPDATE services SET status = 2 WHERE id=$service_id";
        mysqli_query($db_connect, $update_query);
    }
    else{
        $update_query = "UPDATE services SET status = 1 WHERE id=$service_id";
        mysqli_query($db_connect, $update_query);
    }
    header('location: service.php');

?>