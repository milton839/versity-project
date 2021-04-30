<?php
session_start();
require_once("includes/functions.php");
// require_once("includes/db.php");
foreach ($_FILES as $setting_name => $file) {
    if ($file['name']) {
        $select_query_to_get_old_photo_name = "SELECT setting_data FROM settings_image WHERE setting_name = '$setting_name'";
        $from_db = mysqli_query($db_connect, $select_query_to_get_old_photo_name);
        $after_assoc = mysqli_fetch_assoc($from_db);
         //=========delete the old photo
        $uploaded_file_name = $_FILES[$setting_name]['name'];
        $uploaded_file_explode = explode(".", $uploaded_file_name);
        $extension = end($uploaded_file_explode);
        $allow_file = ['png', 'jpeg', 'jpg', 'gif', 'PNG', 'JPEG', 'JPG', 'GIF'];
        if (in_array($extension, $allow_file)) {
            
            $uploaded_file_size =  $_FILES[$setting_name]['size'];
            if ($uploaded_file_size <= 1000000000) {
                print_r($uploaded_file_size);
                die();
                unlink($after_assoc['setting_data']);
                $new_file_name = $setting_name . "." . "$extension";
                $temp_location_name = $_FILES[$setting_name]['tmp_name'];
                $new_location_name = "assets/frontend_assets/img/banner/" . $new_file_name;
                move_uploaded_file($temp_location_name, $new_location_name);
                //update query korte hbe
                $update_query = "UPDATE settings_image set setting_data = '$new_location_name' WHERE setting_name = '$setting_name'";
                mysqli_query($db_connect, $update_query);
            } else {
                $_SESSION['file_error2'] = "Your file size should be less then or equal 10000000KB";
                header('location: settings.php');
            }
    
        } else {
            $_SESSION['file_error1'] = "Please add a image file that have extension like (png, jpeg, jpg, gif, PNG, JPEG, JPG, GIF)";
            header('location: settings.php');
         }
    } else {
        $_SESSION['file_error'] = "If You update your image,please select a image file";
        // header('location: settings.php');
    }
}
