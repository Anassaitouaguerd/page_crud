<?php
require "connection.php";
if(isset($_POST['Update_info_RC'])){
    $name_RC = $_POST['name_RC'];
    $Category_id = $_POST['category_id'];
    $RC_ID = $_POST['ressource_id'];
    $SQL_RC_UP = "UPDATE ressource SET name_ressource = '$name_RC' , Category_ID = '$Category_id' WHERE ressource_ID = $RC_ID";
    $resulte_RC_UP = mysqli_query($conn,$SQL_RC_UP);
    if($resulte_RC_UP){
        header('location:table_ressources.php');
    }else{
        echo "feilde";
    }
}
?>