<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="POST">
        <label for="nilai">Masukan Nilai</label>
        <input type="text" name="nilai" id="nilai">
        <input type="submit" value="cek">
    </form>

    <?php
    //mengambil nilai yang dimasukan oleh pengguna dari formulir
        $x = $_POST["nilai"];
    //mengecek nilai apakah angka atau bukan
    if (!is_numeric($x)){
        echo "silahkan masukan angka!";
    }
    
    else {
    if ($x > 0)
    {
        echo "merupakan bilangan positif";
    }
    else if ($x < 0)
    {
        echo "merupakan bilangan negatif";
    }
    else 
    {
        echo "bilangan 0";
    }
    }
    ?>
</body>
</html>