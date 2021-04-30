<?php
    session_start();
    require_once("includes/db.php");
    $email = $_POST['email'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    $upper = preg_match('@[A-Z]@', $new_password);
    $lower = preg_match('@[a-z]@', $new_password);
    $number = preg_match('@[0-9]@', $new_password);
    $specialCh = preg_match("/[!@#$%&*]/", $new_password);

    if($upper && $lower && $number && $specialCh && strlen($new_password) >= 8){
        $old_password = md5($old_password);
        $check_old_password = "SELECT COUNT(*) AS count FROM users WHERE email='$email' AND password='$old_password'";
        $old_password_query = mysqli_query($db_connect, $check_old_password);
        $old_password_assoc = mysqli_fetch_assoc($old_password_query);

        if($old_password_assoc['count'] == 0){
            $_SESSION['password_not_match'] = "The old password you provided is wrong!";
            header("location:profile_edit.php");
        }
        else{
            $new_password = md5($new_password);        
            $update_password = "UPDATE users SET password='$new_password' WHERE email='$email'";
            $update_password_query = mysqli_query($db_connect, $update_password);
            $_SESSION['password_changed'] = "Your password has changed successfully!";
            header("location:profile_edit.php");
        }
    }
    else{
        $_SESSION['new_password_error'] = "New password must have a Capital Letter, a Small Letter, a Number, a Special Character(!@#$%&*) and should be more than or equal 8 characters";
        header("location:profile_edit.php");
    }   

    
?>