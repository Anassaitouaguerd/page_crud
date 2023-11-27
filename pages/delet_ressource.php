<?php
require "connection.php";
if(isset($_GET['id_RC'])){
    $ID = $_GET['id_RC'];
    $SQL_RC_delet = "DELETE FROM ressource WHERE ressource_ID = $ID";
    $resulte_RC_delet = mysqli_query($conn,$SQL_RC_delet);
    if($resulte_RC_delet){
        header('location:table_ressources.php');
    }else{
        echo "feilde";
    }
}
?>