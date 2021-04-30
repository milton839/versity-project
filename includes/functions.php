<?php
    // require_once("includes/login_check.php");
    require_once("includes/db.php");
    function falcon_all($table_name){
        global $db_connect;
        $select_all_data = "SELECT * FROM $table_name ORDER BY id ASC";
        return mysqli_query($db_connect, $select_all_data);
    }

    function falcon_count($table_name){
        global $db_connect;
        $data_count = "SELECT COUNT(*) FROM $table_name";
        $data_count_query = mysqli_query($db_connect, $data_count);
        $data_count_row = mysqli_fetch_row($data_count_query);
        return $data_count_row[0];
    }
    
    function falcon_delete($table_name, $id){
        global $db_connect;
        $delete_query = "DELETE FROM $table_name WHERE id='$id'";
        return mysqli_query($db_connect, $delete_query);
    }
    function falcon_all_delete($table_name){
        global $db_connect;
        $delete_query = "DELETE FROM $table_name";
        return mysqli_query($db_connect, $delete_query);
    }
    function falcon_setting($setting_name){
        global $db_connect;
       $get_setting_query = "SELECT setting_data FROM settings WHERE setting_name = '$setting_name'";
       $data_from_db = mysqli_query($db_connect, $get_setting_query);
       $data_after_assoc = mysqli_fetch_assoc($data_from_db);
       print_r($data_after_assoc['setting_data']);
    }
    function falcon_setting_image($setting_name){
        global $db_connect;
       $get_setting_query = "SELECT setting_data FROM settings_image WHERE setting_name = '$setting_name'";
       $data_from_db = mysqli_query($db_connect, $get_setting_query);
       $data_after_assoc = mysqli_fetch_assoc($data_from_db);
       print_r($data_after_assoc['setting_data']);
    }

?>