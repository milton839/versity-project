<?php
    session_start();
    require_once("includes/db.php");

    $skill_name = htmlentities($_POST['skill_name']);
    $skill_description = htmlentities($_POST['skill_description']);
    $skill_percentage = $_POST['skill_percentage'];
    $skill_id = $_POST['skill_id'];

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
    
    $update_skill = "UPDATE skills SET skill_name='$skill_name', skill_description='$skill_description', skill_percentage='$skill_percentage' WHERE id='$skill_id'";
    $update_query = mysqli_query($db_connect, $update_skill);
    $_SESSION['skill_update'] = "Skill Update Successfully";
    header('location: skills.php');





?>