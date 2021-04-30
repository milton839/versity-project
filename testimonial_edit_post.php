<?php
require_once("includes/header.php");
require_once("includes/db.php");

$testimonial_id = $_POST['testimonial_id'];

if($_FILES['new_testimonial_photo']['name']){
 $delete_file_location = "uploads/testimonial/".$_POST['new_testimonial_photo'];
unlink($delete_file_location);
//photo upload start
if($_FILES['new_testimonial_photo']['name']){
    $uploaded_file_name = $_FILES['new_testimonial_photo']['name'];
    $uploaded_file_explode = explode(".", $uploaded_file_name);
    $extension = end($uploaded_file_explode);
    $allow_file = ['png', 'jpeg', 'jpg', 'gif', 'PNG', 'JPEG', 'JPG', 'GIF'];
    if(in_array($extension, $allow_file)){
        $uploaded_file_size =  $_FILES['new_testimonial_photo']['size'];
        if($uploaded_file_size <= 100000000000){
            $new_file_name = $testimonial_id."-".rand(1,1000)."."."$extension";
            $temp_location_name = $_FILES['new_testimonial_photo']['tmp_name'];
            $new_location_name = "uploads/testimonial/".$new_file_name;
            move_uploaded_file($temp_location_name, $new_location_name);
            //update query korte hbe
            $update_query = "UPDATE testimonials set testimonial_photo = '$new_file_name' WHERE id = $testimonial_id";
            mysqli_query($db_connect, $update_query);
        }
        else{
            $_SESSION['file_error'] = "Your file size should be less then or equal 100KB";
            header('location: testimonial.php');
        }
    }
    else{
        $_SESSION['file_error'] = "Please add a image file that have extension like (png, jpeg, jpg, gif, PNG, JPEG, JPG, GIF)";
        header('location: testimonial.php');    
    }
}
else{
    $_SESSION['file_error'] = "Please select a image file";
    header('location: testimonial.php');
}
//photo upload end
}
$testimonial_text = $_POST['testimonial_text'];
$testimonial_name = $_POST['testimonial_name'];
$testimonial_designation = $_POST['testimonial_designation'];
$testimonial_star = $_POST['testimonial_star'];



$update_query = "UPDATE testimonials SET testimonial_text = '$testimonial_text', testimonial_name ='$testimonial_name', testimonial_designation = '$testimonial_designation', testimonial_star = '$testimonial_star' WHERE id = $testimonial_id";
mysqli_query($db_connect,$update_query);
header("location: testimonial.php");
?>