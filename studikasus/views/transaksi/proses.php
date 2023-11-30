<?php 
// koneksi database
include_once "../../config.php";
include_once "../../controllers/TransaksiController.php";
session_start();

$database = new database();
$db = $database->getKoneksi();

// menangkap data yang di kirim dari form

if(isset($_POST['nama']))
{   
    $nama = $_POST['nama'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $jenis_sepatu = $_POST['jenis_sepatu'];
    $jenis_service = $_POST['jenis_service'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    $transaksiController = new TransaksiController($db);
    $result=$transaksiController->createTransaksi($nama,$tgl_pesan,$jenis_sepatu,$jenis_service,$alamat,$status);

    if($result)
    {   
       $_SESSION['tambah'] = 'Tambah Sukses!';
        header ("location:transaksi");
    }
    else
    {
        header ("location:tambah.php");
    }
}
?>