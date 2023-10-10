<?php
//memanggil class databases
include '../classes/databases.php';
//instansiasi databases
$db = new databases;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="card">
        <div class="card-header">
            <div class="card">
                <div class="card-body">
                    <h1 >Tabel Mahasiswa </h1>
                    &nbsp;
                    <a class="btn btn-primary" href="input_mhs.php" role="button">Tambah Mahasiswa +</a>
                    <br>&nbsp;
                    <div class="table-responsive small">
                        <table border="1" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $no = 1;
                                    foreach ($db->tampil_mahasiswa() as $x) {
                                    ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $x['nim'] ?></td>
                                    <td><?php echo $x['nama'] ?></td>
                                    <td><?php echo $x['alamat'] ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="edit_mhs.php?id=<?php echo $x['id'];?>&aksi=edit" >edit</a>
                                        <a class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">hapus</a>

                                    </td>
                                </tr>
                            <?php
                                    }
                            ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>