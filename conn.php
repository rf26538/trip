<?php
    $servername ="localhost";
        $username ="root";
        $password ="";

        $conn = mysqli_connect($servername, $username, $password);

        if(!$conn){
        die("connecton faield" . mysqli_connect_error());
        }
         // echo "connection Ok";
?>