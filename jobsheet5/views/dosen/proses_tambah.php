<?php
include_once "../../config.php";
include_once "../../controllers/DosenController.php";
session_start();

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['nidn']))
{   
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $dosenController = new DosenController($db);
    $result=$dosenController->createDosen($nidn, $nama, $alamat, $jenis_kelamin);

    if($result)
    {   
        $_SESSION['tambah'] = 'Berhasil Ditambahkan!';
        header ("location:dosen");
    }
    else
    {
        header ("location:tambah_dsn");
    }
}
?>