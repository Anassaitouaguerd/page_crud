<?php
require "connection.php";
if(isset($_POST['Update_info'])){
    $name_category_UP = $_POST['nameUP_CT'];
    $id_CT = $_POST['user_id_CT'];
    $SQL_UP = "UPDATE category SET Name_CT = '$name_category_UP' WHERE Category_ID = '$id_CT'";
    $result_UP = mysqli_query($conn,$SQL_UP);
    if($result_UP){
        header('location:table_Category.php');
    }else{
        echo "feiled";
    }
}


?>