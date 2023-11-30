<?php
include_once "../../config.php";
include_once "../../controllers/TransaksiController.php";
require "../../index.php"; 
session_start();
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_transaksi'])) {
    $id_transaksi = $_GET['id_transaksi'];

    $transaksiController = new TransaksiController($db);
    $transaksiData = $transaksiController->getTransaksi($id_transaksi);

    if ($id_transaksi) {
        if (isset($_POST['id_transaksi'])) {
            $id_transaksi = $_POST['id_transaksi'];
            $nama = $_POST['nama'];
            $tgl_pesan = $_POST['tgl_pesan'];
            $jenis_sepatu = $_POST['jenis_sepatu'];
            $jenis_service = $_POST['jenis_service'];
            $alamat = $_POST['alamat'];
            $status = $_POST['status'];

            $result = $transaksiController->updateTransaksi($id_transaksi, $nama, $tgl_pesan, $jenis_sepatu, $jenis_service, $alamat, $status);

            if ($result) {
                $_SESSION['edit'] = 'Edit Sukses!';
                header("location:../transaksi");
            } else {
                header("location:tambah.php");
            }
        } else {
            echo "";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="../../style.css">
    <title>Document</title>
</head>

<body>
        <form action="" method="post">
        <?php foreach ($transaksiData as $d) { ?>
            <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body">
                        <h3 class="d-flex flex-column text-center  py-0 px-5 ">Edit Data Transaksi</h3>
                        <tr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <td>
                                            <label class="col-form-label">Nama</label>
                                            <input class="form-control" type="hidden" name="id_transaksi" value="<?php echo $d['id_transaksi'] ?>">
                                            <input class="form-control" type="text" name="nama" value="<?php echo $d['nama'] ?>">

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
                                            <label class="col-form-label">Tanggal Pesanan</label>
                                            <input class="form-control" type="date" name="tgl_pesan" value="<?php echo $d['tgl_pesan'] ?>">
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
                                            <label class=" col-form-label">Jenis Sepatu</label>
                                            <select name="jenis_sepatu" class="form-select" aria-label="Default select example">
                                                <option <?php if ($d['jenis_sepatu'] == 'Sneakers')
                                                            echo 'selected' ?> value="Sneakers">Sneakers</option>
                                                <option <?php if ($d['jenis_sepatu'] == 'Flat Shoes')
                                                            echo 'selected' ?> value="Flat Shoes">Flat Shoes</option>
                                                <option <?php if ($d['jenis_sepatu'] == 'Slip On')
                                                            echo 'selected' ?> value="Slip On">Slip On</option>
                                                <option <?php if ($d['jenis_sepatu'] == 'Boots')
                                                            echo 'selected' ?> value="Boots">Boots</option>
                                            </select>
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
                                            <label class=" col-form-label">Jenis Service</label>
                                            <select name="jenis_service" class="form-select" aria-label="Default select example">
                                                <option <?php if ($d['jenis_service'] == 'Regular Clean')
                                                            echo 'selected' ?> value="Regular Clean">Regular Clean</option>
                                                <option <?php if ($d['jenis_service'] == 'Deep Clean')
                                                            echo 'selected' ?> value="Deep Clean">Deep Clean</option>
                                                <option <?php if ($d['jenis_service'] == 'Unyellowing')
                                                            echo 'selected' ?> value="Unyellowing">Unyellowing</option>
                                                <option <?php if ($d['jenis_service'] == 'Kid Shoes')
                                                            echo 'selected' ?> value="Kid Shoes">Kid Shoes</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <td>
                                            <label class=" col-form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat" cols="16" rows="2"><?php echo $d['alamat'] ?></textarea>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="py-2">
                                <td>
                                    <input class="btn btn-primary" type="submit" value="Simpan">
                                    <a class="btn btn-secondary" href="../transaksi">Kembali</a>
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