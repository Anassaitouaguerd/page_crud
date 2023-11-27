<?php
require "connection.php";
if(isset($_POST['Update_info_RC'])){
    $name_SUB = $_POST['name_sub'];
    $Category_id = $_POST['category_id'];
    $SUB_ID = $_POST['SUB_id'];
    $SQL_SUB_UP = "UPDATE subcategory SET sub_category = '$name_SUB' , Category_ID = '$Category_id' WHERE subcategory_ID = $SUB_ID";
    $resulte_SUB_UP = mysqli_query($conn,$SQL_SUB_UP);
    if($resulte_SUB_UP){
        header('location:table_subcategory.php');
    }else{
        echo "feilde";
    }
}
?>