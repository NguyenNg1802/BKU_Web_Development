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

    $sql = "SELECT devvn_xaphuongthitran.name FROM devvn_xaphuongthitran INNER JOIN devvn_quanhuyen on devvn_quanhuyen.maqh=devvn_xaphuongthitran.maqh AND devvn_quanhuyen.name='".$_POST["name"]."'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        $ward_list = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($ward_list, $row["name"]);
            //echo $row["name"];
        }
        $string=implode(",",$ward_list);
        echo $string;
    }
    else {
        echo "0 result";
    }
    mysqli_close($connect);
?>