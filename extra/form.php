<?php 
session_start();


// sign up form redirecting

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
}else{
    echo header("location:index.php");
}

// Name Validation

if(empty($_POST['name'])){
    $_SESSION['name'] = "Name is required";
    echo header("location:index.php");
}else{
    if(strlen($name) <= 2){
        $_SESSION['name'] = "Name is too short";
        echo header("location:index.php");    
    }else{
        echo "Name : ".$name."<br>";
    }
}
    
// Email Validation

if(empty($_POST['email'])){
    $_SESSION['email'] = "Email is required";
    echo header("location:index.php");
}else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['email'] = "Please Inter Valid Email";
        echo header("location:index.php");
    }else{
        echo "Email : ".$email."<br>";
    }
}

// phone Number Validation

if(empty($_POST['phone'])){
    $_SESSION['phone'] = "Number is required";
    echo header("location:index.php");
}else{
    if(!preg_match('/^[0-9]*$/', $phone)){
        $_SESSION['phone'] = "Please Inter Valid Number";
        echo header("location:index.php");
    }else{
        if(strlen($phone) <= 7){
            $_SESSION['phone'] = "Number is too short";
            echo header("location:index.php");
        }else{
            echo "Number : ".$phone."<br>";
        }
    }
}

// Password Validation

if(empty($_POST['password'])){
    $_SESSION['password'] = "Password is required";
    echo header("location:index.php");
}else{
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $password)){
        $_SESSION['password'] = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
        echo header("location:index.php");
    }else{
        echo "Password : ".$password."<br>";
    }
}




?>