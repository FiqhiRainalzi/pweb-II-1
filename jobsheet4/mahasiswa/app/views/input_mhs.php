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
<form  action="proses_mhs.php?aksi=tambah" method="post">
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <h3 class="d-flex flex-column text-center  py-0 px-5 ">Tambah Data Mahasiswa</h3>
            <tr>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <td>
                            <label  class="col-sm-2 col-form-label">NIM</label>
                            <input class="form-control" type="hidden" name="id" >
                            <input class="form-control" type="text" name="nim" >
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
                            <label  class="col-sm-2 col-form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" >
                        </td> 
                    </div>                        
                </div>
            </div>
            </tr>
            <tr>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                    <td><label  class="col-sm-2 col-form-label">Alamat</label> </td>
                    <td><textarea class="form-control" name="alamat" cols="16" rows="2"> </textarea></td>
                    </div>                        
                </div>
            </div>
            </tr>
            <tr>
                <div class="py-2">
                <td>
                    <input class="btn btn-primary" type="submit" value="Simpan">
                    <a class="btn btn-secondary" href="tampil_mhs.php">Kembali</a>
                </td>
                </div>
            </tr>
        </div>
    </div>
</div>
</form>
</html>


