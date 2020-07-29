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

    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    $ip = get_client_ip();
    $email_address = $_POST["email"];
    $expire = 20;
    $full_name = 'Full Name';

    session_start();

    $sql = "SELECT * FROM Users WHERE `E-mail` = '".$_POST["email"]."'";
    $query = mysqli_query($connect, $sql);
    if (mysqli_num_rows($query) > 0 ) {
        $row = mysqli_fetch_assoc($query);
        if ($_POST["password"] == $row['Password']) {
            setcookie($row['Full Name'], $row['Full Name'], time() + $expire);
            $_SESSION['Full Name'] = $row['Full Name'];
            $_SESSION['LAST_ACTIVITY'] = time();
            //echo "Welcome, ".$row['Full Name']."!";
            //echo "Welcome, ".$_COOKIE["email_address"].";".$_COOKIE["ip"];
            echo true;
        }
        else {
            echo "Incorrect username or password!";
        }
    }
    else {
        echo "You seemed haven't registered account yet!";
    }

    mysqli_close($connect);
?>