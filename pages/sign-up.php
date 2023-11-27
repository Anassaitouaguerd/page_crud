<?php

 if(isset($_POST['submit_info'])){
     require "connection.php";
     $name_user = $_POST['Name_user'];
     $email_user = $_POST['email_user'];
     $pass_user = $_POST['pass_user'];
    $SQL_CHECK = "SELECT * FROM users WHERE `Name` = '$name_user' AND Email = '$email_user' AND password_user = '$pass_user'";
    $result_check = mysqli_query($conn,$SQL_CHECK);
    if( mysqli_num_rows($result_check) > 0){
        echo "this user is alredy signing";
    }else{
        $SQL_SIGN = "INSERT INTO users (`Name` , Email , password_user)
        VALUES ('$name_user' , '$email_user' , '$pass_user')" ; 
        $result_sign = mysqli_query($conn , $SQL_SIGN);
        if($result_sign){
           
                header('location:../index.php');
            
        }else{
            echo "sign up is field";
        }
    }

 }
?>