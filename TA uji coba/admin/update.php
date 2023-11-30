<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_transaksi = $_POST['id_transaksi'];
$nama = $_POST['nama'];
$tgl_pesan = $_POST['tgl_pesan'];
$jenis_sepatu = $_POST['jenis_sepatu'];
$jenis_service = $_POST['jenis_service'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

 
// update data ke database
mysqli_query($koneksi,"update transaksi set nama='$nama', tgl_pesan='$tgl_pesan',jenis_sepatu='$jenis_sepatu',
jenis_service='$jenis_service', alamat='$alamat', status='$status' where id_transaksi='$id_transaksi'");
 
// mengalihkan halaman kembali ke index.php
header("location:tables.php");
 