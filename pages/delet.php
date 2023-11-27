<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE User_ID = '$id'";
    $result_delet = mysqli_query($conn, $query);
    if ($result_delet) {
        header('location:tables.php');
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
}
?>