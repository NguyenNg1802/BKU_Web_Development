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

    $sql = "DELETE FROM tbl_students WHERE `Student ID`='".$_GET["id"]."'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        echo "Data deleted successfully\n";
    }
    else {
        echo "Error in delete";
    }

    mysqli_close($connect);
?>