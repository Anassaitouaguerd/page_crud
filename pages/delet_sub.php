<?php
require "connection.php";
if(isset($_GET['id_SUB'])){
    $ID = $_GET['id_SUB'];
    $SQL_SUB_delet = "DELETE FROM subcategory WHERE subcategory_ID = $ID";
    $resulte_SUB_delet = mysqli_query($conn,$SQL_SUB_delet);
    if($resulte_SUB_delet){
        header('location:table_subcategory.php');
    }else{
        echo "feilde";
    }
}
?>