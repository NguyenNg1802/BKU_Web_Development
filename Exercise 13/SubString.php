<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contain string</title>
</head>
<body>
    <?php
        $first = "hello";
        $second = "ll";
        if (strpos($first, $second)) {
            echo "<h1>".$second." contains in ".$first."</h1>";
        }
    ?>
</body>
</html>