<?php
include_once "../../config.php";
include_once "../../controllers/DosenController.php";
require "../../index.php";

session_start();

$database = new Database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAlldosen();
?>

<!DOCTYPE html>
<html lang="en">
<body>
  
  <div class="card">
    <div class="card-header">
        <div class="card-body">
          <h1>Data Dosen</h1>          
          <div class="table-responsive small">
          <a class="btn btn-primary" href="tambah_dsn" role="button">Tambah Dosen +</a>
          <br>&nbsp;
          <?php
          if(isset($_SESSION['tambah']))
          {
          ?>
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>
            <?php
            echo $_SESSION['tambah'];
            ?>
          </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
         <?php       
         unset($_SESSION['tambah']);
        }
        ?>
        <?php if (isset($_SESSION['edit']))
        {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>
            <?php
            echo $_SESSION['edit'];
            ?>
          </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
         <?php       
         unset($_SESSION['edit']);
        }
        ?>
        </div>
        <?php if (isset($_SESSION['hapus']))
        {
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>
            <?php
            echo $_SESSION['hapus'];
            ?>
          </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
         <?php       
         unset($_SESSION['hapus']);
        }
        ?>
        </div>
            <table border="1" class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIDN</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($dosen as $x) {
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $x['nidn'] ?></td>
                  <td><?php echo $x['nama'] ?></td>
                  <td><?php echo $x['alamat'] ?></td>
                  <td><?php echo $x['jenis_kelamin'] ?></td>
                  <td>
                    <a class="btn btn-warning" href="edit_dsn/<?php echo $x['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus_dsn/<?php echo $x['id']; ?>"
                    onclick="return confirm('Apakah yakin ingin dihapus?')">Hapus</a>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
