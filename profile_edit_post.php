<?php 
    session_start();
    require_once("includes/db.php");
    $email = $_POST['email'];
    $name = $_POST['name'];
    
    if(empty($name)){
        $_SESSION['name_empty'] = "You must need to submit a valid name";
        header("location:profile_edit.php");
    }
    else{
        $update_query = "UPDATE users SET name='$name' WHERE email='$email'";
        $update_query_connect = mysqli_query($db_connect, $update_query);
        if($_SESSION['username'] == $name){
            $_SESSION['name_exist'] = 'This name is already exist!';
            header("location:profile_edit.php");
        }
        else{
            $_SESSION['new_username'] = "Your name set to " .$name. " from " .$_SESSION['username']."!";
            $_SESSION['username'] = $name;
            header("location:profile_edit.php");
        }
    }
?>