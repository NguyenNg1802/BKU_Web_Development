<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $result = preg_replace('/[^a-zA-Z0-9]/', '', 'Nguyen Chi Binh Nguyen&*&*#&*!');
        echo "Result: ".$result;
    ?>
</body>
</html>