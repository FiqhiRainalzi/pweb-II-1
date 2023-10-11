<?php
require "../../index.php"
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
<div class="py-3">
<form class="container" action="proses_tambah.php" method="post">
<table>
            <h3>Tambah Data Mahasiswa</h3>
            <tr>
                <td><label  class="col-sm-2 col-form-label">NIM</label> </td>
                <td>
                    <input class="form-control" type="hidden" name="id" >
                    <input class="form-control" type="text" name="nim" >
                </td>
            </tr>
            <tr>
                <td><label  class="py-3 col-sm-2 col-form-label">Nama</label> </td>
                <td><input class="form-control" type="text" name="nama" ></td>
            </tr>
            <tr>
                <td><label  class="col-sm-2 col-form-label">Tempat Lahir</label> </td>
                <td><input class="form-control" type="text" name="tempat_lahir" ></td>
            </tr><tr>
                <td><label  class="col-sm-2 col-form-label">Tanggal lahir</label> </td>
                <td><input class="form-control" type="date" name="tanggal_lahir" ></td>
            </tr>
            <tr>
                <td><label  class="col-sm-2 col-form-label">Jenis Kelamin</label> </td>
                <td>
                    <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                    </select>
                </select></td>
            </tr>
            <tr>
                <td><label  class="col-sm-2 col-form-label">Agama</label> </td>
                <td>
                <select name="agama" class="form-select" aria-label="Default select example">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="budha">Budha</option>
                    <option value="hindu">Hindu</option>
                    <option value="konghucung">Konghucung</option>
                    </select>
            </td>
            </tr>
            <tr>
                <td><label  class="py-3 col-sm-2 col-form-label">Alamat</label> </td>
                <td><textarea class="form-control" name="alamat" cols="16" rows="2"> </textarea></td>
            </tr>
            <tr>
                <td></td>
                
                <td><div class="py-2">
                    <input class="btn btn-primary" name="submit" type="submit" value="Simpan">
                    <a class="btn btn-secondary" href="index.php">Kembali</a>
                    </div>
                </td>
            </tr>
        </table>
</form>
</div>
</html>


