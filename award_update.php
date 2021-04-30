<?php
    session_start();
    require_once("includes/db.php");

    $award_title = strtoupper(htmlentities($_POST['award_title']));
    $award_count = htmlentities($_POST['award_count']);
    $award_icon = $_POST['award_icon'];
    $award_id = $_POST['award_id'];

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

    $update_query = "UPDATE awards SET award_title = '$award_title', award_count = '$award_count', award_icon = '$award_icon' WHERE
    id=$award_id";
    mysqli_query($db_connect, $update_query);
    $_SESSION['award_updated_success'] = "Award Updated Successfully";
    header("location: awards.php");

?>