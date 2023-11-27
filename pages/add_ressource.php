<?php
require "connection.php";
if(isset($_POST['save_info_RC'])){
    $name_RC = $_POST['name_RC'];
    $Category_id = $_POST['category_id'];
    $SQL_RC = "INSERT INTO ressource (`name_ressource` , `Category_ID`) VALUES ('$name_RC' , '$Category_id')";
    $resulte_RC = mysqli_query($conn,$SQL_RC);
    if($resulte_RC){
        header('location:table_ressources.php');
    }else{
        echo "feilde";
    }
}
?>