<?php
session_start();
    include "conn.php";
    if (isset($_POST["name"])){
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $other = $_POST['other'];
    
            $sql = "INSERT INTO `trip_db`.`trip` (`name`, `gender`, `age`, `email`, `phone`, `other`) VALUES('$name', '$gender', '$age', '$email', '$phone', '$other')";
            
            // echo $sql;
            if($conn->query($sql) == true){
                // echo "data inserted successfully";
                $_SESSION['message'] = "data inserted successfully";
                header("Location:index.php");
            }else{
                // echo "ERROR: $sql <br> $conn->error";
                $_SESSION['message'] = "Something went wrong";
                header("Location:index.php");
            }
            $conn->close();
    }
?>