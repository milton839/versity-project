<?php
    session_start();
    require_once("includes/db.php");

    $award_title = strtoupper(htmlentities($_POST['award_title']));
    $award_count = htmlentities($_POST['award_count']);
    $award_icon = $_POST['award_icon'];

    $has_error = false;

    if(empty($award_title)){
        $_SESSION['award_title_error'] = "You must need to give award title";
        $has_error = true;
    }
    if(empty($award_count)){
        $_SESSION['award_count_error'] = "You must need to give award count";
        $has_error = true;
    }
    if(empty($award_icon)){
        $_SESSION['award_icon_error'] = "You must need to give award icon";
        $has_error = true;
    }

    if($has_error == true){
        header('location: awards.php');
        die();
    }

    $award_insert = "INSERT INTO awards (award_title, award_count, award_icon) VALUES ('$award_title', '$award_count', '$award_icon')";
    mysqli_query($db_connect, $award_insert);
    $_SESSION['award_add_success'] = "Award Added Successfully";
    header('location: awards.php');

    

?>