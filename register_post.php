<?php
    require_once("includes/header.php");
    require_once("includes/db.php");
?>
<?php
    $name = trim($_POST['registerName']);
    $email = trim($_POST['registerEmail']);
    $password = trim($_POST['registerPassword']);
    $confirmPassword = trim($_POST['registerConfirmPassword']);

    $has_error = false;
    
    $_SESSION['name'] = $name;

    if(empty($_POST['registerName'])){
        $_SESSION['error_name'] = "Name is required";
        $has_error = true;
    }elseif(strlen($name) <= 3){
        $_SESSION['error_name'] = "Name is too short";
        $has_error = true;
    }
    $_SESSION['email'] = $email;

    if(empty($_POST['registerEmail'])){
        $_SESSION['error_email'] = "Email is required";
        $has_error = true;
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error_email'] = "Please enter a valid email address";
        $has_error = true;
    }
    if(empty($_POST['registerPassword'])){
        $_SESSION['error_password'] = "Password is required";
        $has_error = true;
    }
    elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%&*]{8,}$/', $password)){
        $_SESSION['error_password'] = "New password must have a Capital Letter, a Small Letter, a Number, a Special Character(!@#$%&*) and should be more than or equal 8 characters";
        $has_error = true;
    }
    else{
        if(empty($_POST['registerConfirmPassword'])){
            $_SESSION['error_confirm_password'] = "Password is required";
            $has_error = true;
        }elseif($_POST['registerPassword'] != $_POST['registerConfirmPassword']){
            $_SESSION['error_confirm_password'] = "Password does not match";
            $has_error = true;
        }
    }

    if(empty($_POST['registerCheckbox'])){
        $_SESSION['error_registerCheckbox'] = "Checkbox is required";
        $has_error = true;
    }

   if($has_error){
        header("location:register.php");
    }else{
        $email_count = "SELECT COUNT(*) AS count FROM users WHERE email='$email'";
        $email_checking =  mysqli_query($db_connect, $email_count);
        $email_assoc_checking = mysqli_fetch_assoc($email_checking);

        if($email_assoc_checking['count'] == 0){
            $password = md5($password);
            $db_insert = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            mysqli_query($db_connect, $db_insert);     
            $_SESSION['register_successful'] = "Congratulations!! Your Registration is completed. You need to login now";
            $_SESSION['user_registration_name'] = $name;
            header("location:login.php"); 
        }else{
            $_SESSION['exist_email_error'] = "This email address is already registered";
            header("location:register.php"); 
            }
    }


    
?>

<?php
  require_once("includes/footer.php");
?>