<?php
include '../classes/databases.php';
$db = new databases();

$aksi = $_GET['aksi'];
if ($aksi == "update"){
    $db->tambah_mhs($_POST['nim'],$_POST['nama'],$_POST['alamat']);
    header("location:tampil_mhs.php");
}
?>