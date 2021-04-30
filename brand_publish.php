<?php
    require_once("includes/db.php");
    $brand_id = $_GET['brand_id'];
    $brand_work = $_GET['work'];

    if($brand_work == 'publish'){
        $update_query = "UPDATE brands SET status = 2 WHERE id=$brand_id";
        mysqli_query($db_connect, $update_query);
    }
    else{
        $update_query = "UPDATE brands SET status = 1 WHERE id=$brand_id";
        mysqli_query($db_connect, $update_query);
    }
    header('location: brands.php');

?>