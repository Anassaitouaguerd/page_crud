<?php
if(isset($_POST['login'])){
    require "connection.php";
    $email_user = $_POST['email_user'];
    $pass_user = $_POST['pass_user'];
    $SQL_login = "SELECT * FROM users WHERE Email = '$email_user' AND password_user = '$pass_user'";
    $result_login = mysqli_query($conn , $SQL_login);
    if(mysqli_num_rows($result_login) > 0){
        $SQL_NAME = "SELECT `Name` FROM users WHERE Email = '$email_user' ";
        $result_name = mysqli_query($conn,$SQL_NAME);
        $name = mysqli_fetch_assoc($result_name);
        session_start();
        $_SESSION['user_name'] = $name['Name'];
        header('location:dashboard.php');
    }else{
        echo "this user is not regesterd go to sing _ up page";
    }
}




?>