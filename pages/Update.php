<?php
require "connection.php";
    if ( isset($_POST['Update_info'])) {
        $name = $_POST['name_app'];
        $email = $_POST['email_app'];
        $role = $_POST['role_app'];
        $id_user = $_POST['user_id'];

        $stmt = ("UPDATE users SET `Name` = '$name', Email = '$email', `Role` = '$role' WHERE User_ID = '$id_user'");
        $result = mysqli_query($conn,$stmt);

        if ($result) {
            header('Location: tables.php');
            
        } else {
            echo "Update failed";
        }
    }
?>