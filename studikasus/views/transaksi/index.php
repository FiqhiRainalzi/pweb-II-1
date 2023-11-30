<?php 
include_once "../../config.php";
include_once "../../controllers/TransaksiController.php";
require "../../index.php"; 
session_start();

$database = new database;
$db = $database->getKoneksi();

$transaksiController = new TransaksiController($db);
$transaksi = $transaksiController->getAllTransaksi();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
  <div class="card">
    <div class="card-header">
        <div class="card-body">
          <h1>Transaksi</h1>
          <a class="btn btn-primary" href="tambahtr" role="button">Tambah Transaksi +</a>
          <br>&nbsp;
          <div class="table-responsive small">
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
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal pesanan</th>
                        <th scope="col">Jenis Sepatu</th>
                        <th scope="col">Service</th>
                        <th scope="col">Alamat</th>
                        
                        <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($transaksi as $d) {
                ?>
                <tr>
                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['tgl_pesan']; ?></td>
                                <td><?php echo $d['jenis_sepatu']; ?></td>
                                <td><?php echo $d['jenis_service']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                              
                                
                  <td>
                    <a class="btn btn-warning" href="edittr/<?php echo $d['id_transaksi']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapustr/<?php echo $d['id_transaksi']; ?>"
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
</html>