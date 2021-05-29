<?php
    $dbServername="localhost";
    $dbusername="root";
    $dbpass= "";
    $dbname="ecommerce";
    $conn=mysqli_connect($dbServername, $dbusername, $dbpass, $dbname);
    if($conn->connect_error){
        die("connection failed: " . $conn->connect->error);
    }
?>