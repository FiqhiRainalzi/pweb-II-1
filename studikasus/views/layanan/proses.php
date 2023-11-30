<?php
include_once "../../config.php";
include_once "../../controllers/LayananController.php";
session_start();


$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['nama_jenis']))
{   
    $nama_jenis = $_POST['nama_jenis'];
    $tarif = $_POST['tarif'];
    $waktu = $_POST['waktu'];

    $layananController = new LayananController($db);
    $result=$layananController->createLayanan( $nama_jenis, $tarif , $waktu);

    if($result)
    {   
       $_SESSION['tambah'] = 'Tambah Sukses!';
        header ("location:layanan");
    }
    else
    {
        header ("location:tambah.php");
    }
}
?>