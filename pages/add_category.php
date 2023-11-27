<?php
require "connection.php";
if(isset($_POST['save_info'])){
    $name_ct = $_POST['name_CT'];

    $SQL_CT = "INSERT INTO category(Name_CT) VALUES ('$name_ct')" ;
    $result_CT = $conn->query($SQL_CT);
    if($result_CT){
        header('location:table_Category.php');
    } else{
        echo "add fieled ";
    }
}

?>