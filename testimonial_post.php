<?php
require_once("includes/header.php");
require_once("includes/db.php");

$testimonial_text = $_POST['testimonial_text'];
$testimonial_name = $_POST['testimonial_name'];
$testimonial_designation = $_POST['testimonial_designation'];
$testimonial_star = $_POST['testimonial_star'];

$has_error = false;

$_SESSION['testimonial_text'] = $testimonial_text;
if (empty($testimonial_text)) {
    $_SESSION['testimonial_text_error'] = "Required something text*";
    $has_error = true;
}

$_SESSION['testimonial_name'] = $testimonial_name;
if (empty($testimonial_name)) {
    $_SESSION['testimonial_name_error'] = "Required testimonial name";
    $has_error = true;
}

$_SESSION['testimonial_designation'] = $testimonial_designation;
if (empty($testimonial_designation)) {
    $_SESSION['testimonial_designation_error'] = "Required testimonial designation";
    $has_error = true;
}

$_SESSION['testimonial_star'] = $testimonial_star;
if (empty($testimonial_star)) {
    $_SESSION['testimonial_star_error1'] = "Required testimonial stars";
    $has_error = true;
}

if ($testimonial_star>5) {
    $_SESSION['testimonial_star_number_error'] = "Stars give 5 or less than 5";
    $has_error = true;
}

if($has_error){
header("location: testimonial.php");
}
else{
    $testimonial_insert_query = "INSERT INTO testimonials (testimonial_text,testimonial_name,testimonial_designation,testimonial_star) VALUES ('$testimonial_text','$testimonial_name','$testimonial_designation',$testimonial_star)";
    mysqli_query($db_connect,$testimonial_insert_query);

    $last_inserted_id = mysqli_insert_id($db_connect);

    if($_FILES['testimonial_photo']['name']){
        $uploaded_file_name = $_FILES['testimonial_photo']['name'];
        $uploaded_file_explode = explode(".", $uploaded_file_name);
        $extension = end($uploaded_file_explode);
        $allow_file = ['png', 'jpeg', 'jpg', 'gif', 'PNG', 'JPEG', 'JPG', 'GIF'];
        if(in_array($extension, $allow_file)){
            $uploaded_file_size =  $_FILES['testimonial_photo']['size'];
            if($uploaded_file_size <= 100000000000){
                $new_file_name = $last_inserted_id."."."$extension";
                $temp_location_name = $_FILES['testimonial_photo']['tmp_name'];
                $new_location_name = "uploads/testimonial/".$new_file_name;
                move_uploaded_file($temp_location_name, $new_location_name);
                //update query korte hbe
                $update_query = "UPDATE testimonials set testimonial_photo = '$new_file_name' WHERE id = $last_inserted_id";
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
    $_SESSION['testimonial_add_success'] = "Your Testimonial Added Successfully";
    header("location: testimonial.php");
}


?>
