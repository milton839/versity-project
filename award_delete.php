<?php
    session_start();
    require_once("includes/functions.php");
    $award_id = $_GET['award_id'];
    falcon_delete('awards', $award_id);
    header('location: awards.php');
?>