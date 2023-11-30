<?php
include_once "../../config.php";
include_once "../../controllers/MahasiswaController.php";
require "../../index.php";

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

            if ($result) {
                header("location:../mahasiswa");
            } else {
                header("location:edit.php");
            }
        }
    } else {
        echo "mahasiswa tidak ditemukan";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="../../style.css">
</head>

<body>

    <?php
    if ($mahasiswaData) {
    ?>
        <div class="py-3">
            <form class="container" action="" method="post">
                <h3>Edit Data Mahasiswa</h3>
                <?php
                foreach ($mahasiswaData as $d => $value) {
                ?>
                    <table>
                        <tr>
                            <td width="100">
                                <?php echo $d; ?>
                            </td>
                            <td>
                                <input class="form-control" type="text" name="<?php echo $d ?>" value="<?php echo $value; ?>">
                            </td>
                        </tr>

                    <?php
                }
                    ?>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn btn-primary" type="submit" name="submit" value="simpan">
                            <a href="../mahasiswa" class="btn btn-secondary" type="button">Kembali</a>
                        </td>
                    </tr>
                    </table>


            </form>
        <?php
    }
        ?>
        </div>
</body>

</html>