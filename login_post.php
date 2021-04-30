<?php 
session_start();
require_once("includes/db.php");

if(isset($_POST['login'])){
    $email = trim($_POST['loginEmail']);
    $password = trim(md5($_POST['loginPassword']));
}

$has_error = false;

$_SESSION['login_email_value'] = $email;
$_SESSION['login_password_value'] = $password;

if(empty($email)){
    $_SESSION['login_email_address'] = "Please enter your email address";
    $has_error = true;
}
else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['login_valid_email'] = "Please enter a valid email address";
        $has_error = true;       
    }
}
if(empty($password)){
    $_SESSION['login_password_valid'] = "Please enter your password";
    $has_error = true;
}
if($has_error){
    header("location:login.php");
}

$login_data_from_db = "SELECT COUNT(*) AS count FROM users WHERE email='$email' AND password='$password'";
$login_query =  mysqli_query($db_connect, $login_data_from_db);
$login_assoc = mysqli_fetch_assoc($login_query);

if(!$has_error){
    if($login_assoc['count'] == 0){
        $_SESSION['invalid_login'] = "Your Email address or password is incorrect";
        header("location:login.php");
    }else{
        $_SESSION['login_success'] = true;
        //Get User Email Address
        $_SESSION['login_success_email'] = $email;

        //Get User Name
        $login_userName = "SELECT name FROM users WHERE email='$email'";
        $login_userName_connect = mysqli_query($db_connect, $login_userName);
        $login_userName_connect_assoc = mysqli_fetch_assoc($login_userName_connect);
        $login_name = $login_userName_connect_assoc['name'];
        $_SESSION['username'] = $login_name;
        
        //Get User Register date
        $user_joining_date_db = "SELECT joining_date FROM users WHERE email='$email'";
        $user_joining_connect = mysqli_query($db_connect, $user_joining_date_db);
        $user_joining_assoc = mysqli_fetch_assoc($user_joining_connect);
        $user_joining_date = $user_joining_assoc['joining_date'];
        $_SESSION['user_joining_date'] = $user_joining_date;
        
        header("location:dashboard.php");
    }
}

?>