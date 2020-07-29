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

    $sql = "SELECT * FROM Users WHERE `E-mail` = '".$_POST["email"]."'";
    $query = mysqli_query($connect, $sql);
    if (mysqli_num_rows($query) > 0 ) {
        echo "False";
    }
    else {
        echo "True";
    }

    mysqli_close($connect);
?>