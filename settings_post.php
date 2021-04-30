<?php 
require_once("includes/functions.php");
foreach($_POST['setting_name'] as $setting_name => $setting_data){
    $update_query = "UPDATE settings SET setting_data = '$setting_data' WHERE setting_name = '$setting_name'";
    mysqli_query($db_connect, $update_query);
}
header('location: settings.php');
?>