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

    $sql = "INSERT INTO tbl_students VALUES ('".$_GET["id"]."','".$_GET["fname"]."','".$_GET["phone"]."','".$_GET["email"]."')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        echo "Data inserted successfully\n";
    }
    else {
        echo "Error in insert";
    }

    mysqli_close($connect);
?>