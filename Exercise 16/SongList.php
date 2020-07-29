<?php
    $host = 'Localhost';
    $user = "root";
    $password = "";
    $database = "CLC2015";

    $connect = mysqli_connect($host, $user, $password, $database);
    mysqli_set_charset($connect,'utf8');

    $sql = "SELECT * FROM songs";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        $music_list = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($music_list, $row["title"]);
            //echo $row["name"];
        }
        $string=implode(",",$music_list);
        echo $string;
    }
    else {
        echo "0 result";
    }
    mysqli_close($connect);
?>