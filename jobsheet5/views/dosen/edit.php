<?php
include_once "../../config.php";
include_once "../../controllers/DosenController.php";

session_start();

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosen($id);

    if ($dosenData) {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenis_kelamin = $_POST['jenis_kelamin'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $alamat, $jenis_kelamin);

            if ($result) {
                $_SESSION['edit'] = 'Data Berhasil Terupdate';
                header("location:../dosen");
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
    <form action="" method="post">
        <?php
        foreach ($dosenData as $d) {
        ?>
            <div class="container mt-5 mb-5 d-flex justify-content-center">
                <div class="card px-1 py-4">
                    <div class="card-body">
                        <h3 class="d-flex flex-column text-center  py-0 px-5 ">Edit Data Dosen</h3>
                        <tr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <td>
                                            <label class="col-sm-2 col-form-label">NIDN</label>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                            <input class="form-control" type="text" name="nidn" value="<?php echo $d['nidn'] ?>">
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
                                            <label class="col-sm-2 col-form-label">Nama</label>
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
                                        <td><label class="col-sm-2 col-form-label">Alamat</label> </td>
                                        <td><textarea class="form-control" name="alamat" cols="16" rows="2"><?php echo $d['alamat'] ?></textarea></td>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <tr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <td><label class=" col-form-label">Jenis Kelamin</label> </td>
                                        </br>
                                        <td><input class="form-check-input" type="radio" name="jenis_kelamin" value="pria" 
                                        <?php if ($d['jenis_kelamin'] == 'pria') {
                                            echo "checked";
                                            } ?>> Pria
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" 
                                            <?php if ($d['jenis_kelamin'] == 'perempuan') {
                                            echo "checked";
                                            } ?>> Perempuan
                                        </td>
                                    </div>
                                </div>
                        </tr>
                        <tr>
                            <div class="py-2">
                                <td>
                                    <input class="btn btn-primary" type="submit" value="Simpan">
                                    <a class="btn btn-secondary" href="../dosen">Kembali</a>
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