<?php
include_once "../../config.php";
include_once "../../controllers/LayananController.php";
require "../../index.php"; 
session_start();



$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_layanan'])) {
    $id_layanan = $_GET['id_layanan'];

    $layananController = new LayananController($db);
    $layananData = $layananController->getLayanan($id_layanan);

    if ($layananData) {
        if (isset($_POST['id_layanan'])) {
            $id_layanan = $_POST['id_layanan'];
            $nama_jenis = $_POST['nama_jenis'];
            $tarif = $_POST['tarif'];
            $waktu = $_POST['waktu'];

            $result = $layananController->updateLayanan($id_layanan, $nama_jenis, $tarif, $waktu);

            if ($result) {
               $_SESSION['edit'] = 'Edit Sukses!';
                header("location:../layanan");
            } else {
                header("location:edit.php");
            }
        }
    } else {
        echo "layanan tidak ditemukan";
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
    <form action="" method="post">
        <?php
        foreach ($layananData as $d) {
        ?>
            <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body">
                        <h3 class="d-flex flex-column text-center  py-0 px-5 ">Edit Data Layanan</h3>
                        <tr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <td>
                                            <label class="col-form-label">Jenis Layanan</label>
                                            <input class="form-control" type="hidden" name="id_layanan" value="<?php echo $d['id_layanan'] ?>">
                                            <input class="form-control" type="text" name="nama_jenis" value="<?php echo $d['nama_jenis'] ?>">
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <td>
                                            <label class=" col-form-label">Tarif</label>
                                            <input class="form-control" type="text" name="tarif" value="<?php echo $d['tarif'] ?>">
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <td><label class="col-form-label">Waktu</label> </td>
                                        <td><input class="form-control" name="waktu" cols="16" rows="2" value="<?php echo $d['waktu'] ?> "></input></td>
                                    </div>
                                </div>
                            </div>
                        </tr>
                            <div class="py-2">
                                <td>
                                    <input class="btn btn-primary" type="submit" value="Simpan">
                                    <a class="btn btn-secondary" href="../layanan">Kembali</a>
                                </td>
                            </div>
                        </tr>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </form>
</body>

</html>