<!-- =========================== insert to table users ================================ -->
<?php
                    
     require "connection.php";
      if(isset($_POST['save_info'])){
          $name = $_POST['name_app'];
          $email = $_POST['email_app'];
          $role = $_POST['role_app'];
          $SQL = "INSERT INTO users (`Name`, `Email`, `Role`) VALUES ('$name', '$email', '$role')";
          $result = mysqli_query($conn,$SQL);
      
          if ($result) header('location:tables.php');
          else{
            echo "feiled" ;
          }
      }
?>