<?php
    session_start();
    require_once("includes/functions.php");
    $brand_id = $_GET['brand_id'];
    falcon_delete('brands', $brand_id);
    header('location: brands.php');
?>