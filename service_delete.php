<?php
    session_start();
    require_once("includes/functions.php");
    $services_id = $_GET['service_id'];
    falcon_delete('services', $services_id);
    header('location: service.php');
?>