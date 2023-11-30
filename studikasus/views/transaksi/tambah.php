<?php require "../../index.php";  ?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="../../style.css">
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <form action="prosestr" method="post">
                <h3 class="d-flex flex-column text-center  py-0 px-5 ">Tambah Data transaksi</h3>
                <tr>
                    <td>
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <input class="form-control" type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="col-form-label">Tanggal Pesanan</label>
                        <input class="form-control" type="date" name="tgl_pesan">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class=" col-form-label">Jenis Sepatu</label>
                        <select name="jenis_sepatu" class="form-select" aria-label="Default select example">
                            <option value="Sneakers">Sneakers</option>
                            <option value="Flat Shoes">Flat Shoes</option>
                            <option value="Slip On">Slip On</option>
                            <option value="Boots">Boots</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class=" col-form-label">Jenis Service</label>
                        <select name="jenis_service" class="form-select" aria-label="Default select example">
                            <option value="Regular Clean">Regular Clean</option>
                            <option value="Deep Clean">Deep Clean</option>
                            <option value="Unyellowing">Unyellowing</option>
                            <option value="Kid Shoes">Kid Shoes</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class=" col-form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" cols="16" rows="2"> </textarea>
                    </td>
                </tr>
                <div class="py-2">
                    <td>
                        <input class="btn btn-primary" type="submit" value="Simpan">
                        <a class="btn btn-secondary" href="transaksi">Kembali</a>
                    </td>
                </div>
                </tr>
            </form>

        </div>
    </div>
</div>

</html>