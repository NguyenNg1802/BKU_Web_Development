<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome page</title>
</head>
<body>
    <button onclick="clicked()">Just for fun</button>
    <?php
        session_start();
        if (!isset($_COOKIE[$_SESSION["Full Name"]])) {
            header('Location: http://localhost:8080/web/Exercise%2012/Login.html');
            session_unset();
            session_destroy();
        }
        else {
            echo "<h1>Welcome, ".$_SESSION["Full Name"]."</h1>";
        }
        //echo "<h1>Welcome, ".$_COOKIE[$_SESSION["Full Name"]]."</h1>";
    ?>

    <h1 id="test"></h1>
    
    <script language='javascript'>
        function clicked() {
            <?php
                $expire_time = 20;
                setcookie($_SESSION["Full Name"], $_SESSION["Full Name"], time() + $expire_time);
            ?>
        }
    </script>
</body>
</html>