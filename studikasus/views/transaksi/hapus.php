<?php
include_once "../../config.php";
include_once "../../controllers/TransaksiController.php";
session_start();


$database = new Database;
$db = $database->getKoneksi();

if(isset($_GET['id_transaksi'])){
    $id_transaksi=$_GET['id_transaksi'];

    $transaksiController = new TransaksiController($db);

    $result=$transaksiController->deleteTransaksi($id_transaksi);

    if($result){
        $_SESSION['hapus'] = 'Hapus Sukses!';
        header ("location:../transaksi");
        
    }
    else{
        echo "gagal menghapus";
    }
    
}
?>  