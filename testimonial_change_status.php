<?php
    require_once("includes/db.php");
    $testimonial_id = $_GET['testimonial_id'];
    $testimonial_work = $_GET['work'];
    if($testimonial_work == 'publish'){
        $update_query = "UPDATE testimonials SET status = 2 WHERE id=$testimonial_id";
        
    }
    else{
        $update_query = "UPDATE testimonials SET status = 1 WHERE id=$testimonial_id";
        
    }
    mysqli_query($db_connect, $update_query);
    header('location: testimonial.php');

?>