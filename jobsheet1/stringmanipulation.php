<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maniplasi string</title>
</head>
<body>
    <?php
    $x = "Selamat Belajar PHP!";

    echo strtoupper($x) ;
    echo "</br>";
    echo strtolower($x) ;
    echo "</br>";
    echo substr($x,0,7);
    ?>
</body>
</html>