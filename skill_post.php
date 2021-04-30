<?php
    session_start();
    require_once("includes/db.php");

    $skill_name = htmlentities($_POST['skill_name']);
    $skill_description = htmlentities($_POST['skill_description']);
    $skill_percentage = $_POST['skill_percentage'];

    $has_error = false;

    if(empty($skill_name)){
        $_SESSION['skill_name_error'] = "You must need to give skill name";
        $has_error = true;
    }
    if(empty($skill_description)){
        $_SESSION['skill_description_error'] = "You must need to give skill description";
        $has_error = true;
    }
    if(empty($skill_percentage)){
        $_SESSION['skill_percentage_error'] = "You must need to give skill percentage";
        $has_error = true;
    }

    if($has_error == true){
        header('location: skills.php');
        die();
    }

    $skill_insert = "INSERT INTO skills (skill_name, skill_description, skill_percentage) VALUES ('$skill_name', '$skill_description', '$skill_percentage')";
    mysqli_query($db_connect, $skill_insert);
    $_SESSION['skill_add_success'] = "Skill Added Successfully";
    header('location: skills.php');

    

?>