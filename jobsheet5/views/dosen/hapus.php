<?php
include_once "../../config.php";
include_once "../../controllers/DosenController.php";

session_start();

$database = new Database;
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $dosenController = new dosenController($db);

    $result=$dosenController->deleteDosen($id);

    if($result){
        $_SESSION['hapus'] = 'Data Berhasil Terhapus';
        header ("location:../dosen");
        
    }
    else{
        echo "gagal menghapus";
    }
    
}
?>