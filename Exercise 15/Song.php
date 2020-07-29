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

    // $sql = "insert into tbl_students values (1552254, 'Nguyễn Anh Dũng', 0829999998, 'dung@gmail.com')";
    // $query = mysqli_query($connect, $sql);
    // if ($query) {
    //     echo "Data inserted successfully\n";
    // }

    $s = $_POST["name"];
    $s = $s.'%';
    $sql = "SELECT * FROM songs WHERE title LIKE "."'".$s."'";
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