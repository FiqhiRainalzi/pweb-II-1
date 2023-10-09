<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <?php
    echo "persegi panjang = ";
    function persegi_panjang($p,$l)
    {
        return $p*$l;
    }
    echo persegi_panjang(5,1);
    echo "</br>";
    echo "luas lingkaran = ";
    function lingkaran($r)
    {
        return 3.14*$r*$r;
    }
    echo lingkaran(10);
    ?>
</body>
</html>