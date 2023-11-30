<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$tgl_pesan = $_POST['tgl_pesan'];
$jenis_sepatu = $_POST['jenis_sepatu'];
$jenis_service = $_POST['jenis_service'];
$alamat = $_POST['alamat'];



 
// menginput data ke database
mysqli_query($koneksi,"insert into transaksi (nama,tgl_pesan,jenis_sepatu,jenis_service,alamat) values('$nama','$tgl_pesan','$jenis_sepatu','$jenis_service','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:pesanan.php");
 
?>