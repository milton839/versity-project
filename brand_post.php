<?php
    session_start();
    require_once("includes/db.php");

    if($_FILES['brand_logo']['name']){
        $uploaded_file_name = $_FILES['brand_logo']['name'];
        $uploaded_file_explode = explode(".", $uploaded_file_name);
        $extension = end($uploaded_file_explode);
        $allow_file = ['png', 'jpeg', 'jpg', 'gif', 'PNG', 'JPEG', 'JPG', 'GIF'];
        if(in_array($extension, $allow_file)){
            $uploaded_file_size =  $_FILES['brand_logo']['size'];
            if($uploaded_file_size <= 100000){
                $new_file_name = "brand-logo"."-".time()."-".rand(1000000, 9999999)."."."$extension";
                $temp_location_name = $_FILES['brand_logo']['tmp_name'];
                $new_location_name = "uploads/brands/".$new_file_name;
                move_uploaded_file($temp_location_name, $new_location_name);
                $brand_insert = "INSERT INTO brands (brand_logo) VALUES ('$new_file_name')";
                mysqli_query($db_connect, $brand_insert);
                $_SESSION['file_added_success'] = "Your file Added Successfully";
                header('location: brands.php');
            }
            else{
                $_SESSION['file_error'] = "Your file size should be less then or equal 100KB";
                header('location: brands.php');
            }
        }
        else{
            $_SESSION['file_error'] = "Please add a image file that have extension like (png, jpeg, jpg, gif, PNG, JPEG, JPG, GIF)";
            header('location: brands.php');    
        }
    }
    else{
        $_SESSION['file_error'] = "Please select a image file";
        header('location: brands.php');
    }

?>