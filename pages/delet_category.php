<?php 
require "connection.php";
if(isset($_GET['id_CT'])){
    $id_cat = $_GET['id_CT'];
    $SQL_DELET = "DELETE FROM category WHERE Category_ID = '$id_cat'";
    $result_delet = mysqli_query($conn,$SQL_DELET);
    if($result_delet){
        header('location: table_Category.php');
    }else{
        echo "fielde";
    }
}

?>