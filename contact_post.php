<?php
    session_start();
    require_once("includes/db.php");
    $guest_name = $_POST['guest_name'];
    $guest_email = $_POST['guest_email'];
    $guest_message = htmlentities($_POST['guest_message']);

    $has_error = false;

    if(!$guest_name){
        $_SESSION['empty_name'] = 'Name field is required';
        $has_error = true;
    }
    if(!$guest_email){
        $_SESSION['empty_email'] = 'Email field is required';
        $has_error = true;
    }
    if(!$guest_message){
        $_SESSION['empty_message'] = 'Message field is required';
        $has_error = true;
    }
    if($has_error == true){
        header("location: index.php#contact");
        die();
    }
    
    date_default_timezone_set("Asia/Dhaka");
    $message_date_time = date('Y-m-d H:i:s');
    $message_insert = "INSERT INTO contact_messages (guest_name, guest_email, guest_message, message_date_time) VALUES ('$guest_name', '$guest_email', '$guest_message', '$message_date_time')";
    mysqli_query($db_connect, $message_insert);
    $guest_name = ucwords($guest_name); 
    $_SESSION['send_message_successfully'] = "Dear $guest_name, Your Message Sent Successfully!";
    header("location: index.php#contact");
?>