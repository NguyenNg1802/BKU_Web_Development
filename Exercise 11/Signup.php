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

    $sql = "INSERT INTO Users VALUES ("."0".",'".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["confirm"]."')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        echo "Data inserted successfully\n";
    }
    else {
        echo "Error in insert" . $connect->error;
    }

    mysqli_close($connect);
?>