<?php
    session_start();
    require_once("includes/functions.php");
    $skill_id = $_GET['skill_id'];
    falcon_delete('skills', $skill_id);
    header('location: skills.php');
?>