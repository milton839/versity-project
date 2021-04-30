<?php
    session_start();
    require_once("includes/functions.php");
    $testimonial_id = $_GET['testimonial_id'];
    falcon_delete('testimonials', $testimonial_id);
    header('location: testimonial.php');
?>