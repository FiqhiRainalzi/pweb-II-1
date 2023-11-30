<?php
include_once "../../config.php";
include_once "../../controllers/LayananController.php";



$database = new Database;
$db = $database->getKoneksi();
session_start();

if(isset($_GET['id_layanan'])){
    $id_layanan=$_GET['id_layanan'];

    $layananController = new LayananController($db);

    $result=$layananController->deleteLayanan($id_layanan);

    if($result){
        $_SESSION['hapus'] = 'Hapus Sukses!';
        header ("location:../layanan");
        
    }
    else{
        echo "gagal menghapus";
    }
    
}
?>