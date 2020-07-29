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

    $sql = "SELECT * FROM tbl_students";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
            echo
                "
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
              </thead>
                "
            ; 
        while ($row = mysqli_fetch_assoc($result)) {
            echo
                "<tr>
                    <td>".$row["Student ID"]."</td>
                    <td>".$row["Full Name"]."</td>
                    <td>".$row["Phone"]."</td>
                    <td>".$row["Email"]."</td>
                </tr>"
            ; 
        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }
    mysqli_close($connect);
?>