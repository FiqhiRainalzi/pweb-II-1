<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <form method="POST">
        <!-- input panjang dan lebar  -->
        <label for="panjang">Masukan panjang</label><br>
        <input type="text" name="panjang"><br>
        <label for="lebar">Masukan lebar</label><br>
        <input type="text" name="lebar"><br>
        <input type="submit" value="proses" name="hitung_persegi"><br>
    </form>
    <form method="POST">
        <!-- input jari jari lingkaran -->
        <label for="jari-jari">Masukan Jari-jari</label><br>
        <input type="text" name="jari-jari"><br>
        <input type="submit" value="proses" name="hitung_lingkaran"><br>
    </form>
    
    
    <?php
        function persegi_panjang($p,$l)
        {
            return $p*$l;
        }
        
        function lingkaran($r)
        {
            return 3.14*$r*$r;
        }
   
        
    if(isset($_POST["hitung_persegi"]))
    {
        $p = $_POST["panjang"];
        $l = $_POST["lebar"];

        if(!is_numeric($p) || !is_numeric($l))
        {
            echo "Silahkan masukan angka";
        }
        else 
        {
            $luaspersegipanjang = persegi_panjang($p,$l);
            echo "Luas persegi panjang " . $luaspersegipanjang;
        }
    }

    if(isset($_POST["hitung_lingkaran"]))
    {
        $r = $_POST["jari-jari"];

        if(!is_numeric($r))
        {
            echo "Masukan angka";
        }
        else
        {
            $luaslingkaran = lingkaran($r);
            echo "Luas Lingkaran " . $luaslingkaran;
        }
    }
    

    ?>
</body>
</html>