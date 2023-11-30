<?php  require "../../index.php";  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="../style.css">

</head>

    <body>
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body">
                <form action="proseslyn" method="post">
                    <h3 class="d-flex flex-column text-center  py-0 px-5 ">Tambah Data Layanan</h3>
                    <tr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <td>
                                        <label class="col-form-label">Jenis Layanan</label>
                                        <input class="form-control" type="hidden" name="id_layanan">
                                        <input class="form-control" type="text" name="nama_jenis">
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
                                        <input class="form-control" type="number" name="tarif">
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
                                        <label class=" col-form-label">Estimasi Waktu</label>
                                        <input class="form-control" type="text" name="waktu">
                                    </td>
                                    
                                </div>
                            </div>
                        </div>
                    </tr>   
                    <tr>
                        <div class="py-2">
                            <td>
                                <input class="btn btn-primary" type="submit" value="Simpan">
                                <a class="btn btn-secondary" href="layanan">Kembali</a>
                            </td>
                        </div>
                    </tr>
            </div>
        </div>
    </div>
    </form>
    </body>
</html>