<?php
include_once "../../config.php";
include_once "../../controllers/MahasiswaController.php";
require "../../index.php";

$database = new Database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<!DOCTYPE html>
<html lang="en">
<body>
  

  <div class="card">
    <div class="card-header">
      <div class="card">
        <div class="card-body">
          <h1>Data Mahasiswa </h1>
          &nbsp;
          <a class="btn btn-primary" href="tambah.php" role="button">Tambah Mahasiswa +</a>
          <br>&nbsp;
          <?php
          if (isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            $alertClass = '';
            $alertText = '';

            if ($pesan == "Data telah dihapus") {
              $alertClass = 'alert-danger';
              $alertText = 'Data berhasil dihapus!';
            } elseif ($pesan == "Data telah ditambah") {
              $alertClass = 'alert-success';
              $alertText = 'Data berhasil ditambah!';
            } elseif ($pesan == "Data telah diedit") {
              $alertClass = 'alert-warning';
              $alertText = 'Data berhasil diedit!';
            }

            if ($alertClass && $alertText) {
              echo '<div class="alert ' . $alertClass . ' alert-dismissible">
                      ' . $alertText . '
                      <a href="tampil_mhs.php" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                    </div>';
            }
          }
          ?>
          <div class="table-responsive small">
            <table border="1" class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIM</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat Lahir</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $x) {
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $x['nim'] ?></td>
                  <td><?php echo $x['nama'] ?></td>
                  <td><?php echo $x['tempat_lahir'] ?></td>
                  <td><?php echo $x['tanggal_lahir'] ?></td>
                  <td><?php echo $x['jenis_kelamin'] ?></td>
                  <td><?php echo $x['agama'] ?></td>
                  <td><?php echo $x['alamat'] ?></td>

                  <td>
                    <a class="btn btn-warning" href="edit.php?id=<?php echo $x['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $x['id']; ?>"
                    onclick=" return confirm('apakah yakin ingin dihapus?')">Hapus</a>
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
