<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan for bilangan genap 1 sampai 10 </br>";
    //parameter pertama yaitu inisiasi variable
    //kedua batas
    //ketiga intervalss
    for($i = 2; $i < 10 ; $i+=2)
    {
        echo "$i </br>";
    }
    echo "<br>";
    echo "Perulangan while bilangan ganjil 1 sampai 10 </br>";
    $y = 1;
    while ($y <= 10)
    {
        echo "$y <br>";
        $y += 2;
        
    }
    echo "</br>";

    ?>
    
    
    <?php
    echo "Perulangan do while bilangan prima 1 sampai 20 </br>";
    $x = 2;
    do {
        $prima = true;
        //mengecek apakah x bilangan prima
        for ($i = 2 ; $i < $x ; $i++)
        {
            if ($x % $i == 0)
            {
                $prima = false;
                break;
            }
        }
        //cetak x yang merupakan bilangan primas
        if ($prima)
        {
            echo "$x </br>";
        }

        $x++;

    } while ($x < 20);
    ?>
</body>
</html>