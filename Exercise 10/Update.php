<?php
    $host = 'Localhost';
    $user = "root";
    $password = "";
    $database = "CLC2015";

    $connect = mysqli_connect($host, $user, $password, $database);
    mysqli_set_charset($connect,'utf8');
    // if ($connect) {
    //     echo "Connected successfully to CLC2015 database\n";
    // }

    $sql = "UPDATE tbl_students SET `Full Name`='".$_GET["fname"]."', phone='".$_GET["phone"]."', email='".$_GET["email"]."' WHERE `Student ID`='".$_GET["id"]."'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        echo "Data updated successfully\n";
    }
    else {
        echo "Error in update";
    }

    mysqli_close($connect);
?>