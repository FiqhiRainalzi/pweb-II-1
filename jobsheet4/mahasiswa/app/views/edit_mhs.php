<?php
include '../classes/databases.php';
$db = new databases();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="../../public/assets/style.css">
</head>
<body>
<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach ($db->edit($_GET['id']) as $d) {
    ?>
        <table>
            <tr>
                <td><label  class="col-sm-2 col-form-label">NIM</label> </td>
                <td>
                    <input class="form-control" type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <input class="form-control" type="text" name="nim" value="<?php echo $d['nim'] ?>">
                </td>
            </tr>
            <tr>
                <td><label  class="col-sm-2 col-form-label">Nama</label> </td>
                <td><input class="form-control" type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
            </tr>
            <tr>
                <td><label  class="col-sm-2 col-form-label">Alamat</label> </td>
                <td><textarea class="form-control" name="alamat" cols="16" rows="2"><?php echo $d['alamat'] ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input class="btn btn-primary" type="submit" value="Simpan">
                    <a class="btn btn-secondary" href="tampil_mhs.php">Kembali</a>
                </td>
            </tr>
        </table>
    <?php
    }
    ?>
</form>
</body>
</html>
