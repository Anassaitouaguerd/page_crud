<?php
require "connection.php";
if(isset($_POST['save_info_RC'])){
    $name_SUB = $_POST['name_SUB'];
    $Category_id = $_POST['category_id'];
    $SQL_SUB = "INSERT INTO subcategory (`sub_category` , `Category_ID`) VALUES ('$name_SUB' , '$Category_id')";
    $resulte_SUB = mysqli_query($conn,$SQL_SUB);
    if($resulte_SUB){
        header('location:table_subcategory.php');
    }else{
        echo "feilde";
    }
}
?>