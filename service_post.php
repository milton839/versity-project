<?php
    session_start();
    require_once("includes/db.php");

    $service_title = strtoupper(htmlentities($_POST['service_title']));
    $service_description = htmlentities($_POST['service_description']);
    $service_icon = $_POST['service_icon'];

    $has_error = false;

    if(empty($service_title)){
        $_SESSION['service_title_error'] = "You must need to give service title";
        $has_error = true;
    }
    if(empty($service_description)){
        $_SESSION['service_description_error'] = "You must need to give service description";
        $has_error = true;
    }
    if(empty($service_icon)){
        $_SESSION['service_icon_error'] = "You must need to give service icon";
        $has_error = true;
    }

    if($has_error == true){
        header('location: service.php');
        die();
    }

    $service_insert = "INSERT INTO services (service_title, service_description, service_icon) VALUES ('$service_title', '$service_description', '$service_icon')";
    mysqli_query($db_connect, $service_insert);
    $_SESSION['service_add_success'] = "Service Added Successfully";
    header('location: service.php');

    

?>