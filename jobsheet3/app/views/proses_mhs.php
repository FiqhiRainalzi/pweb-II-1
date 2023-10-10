<?php
include '../classes/databases.php';
$db = new databases();

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];

    if ($aksi == "tambah") {
        $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
        header("location:tampil_mhs.php");
    } else if ($aksi == "update") {
        $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
        header("location:tampil_mhs.php");
    } else if ($aksi == "hapus") {
        $db->hapus($_GET['id']);
        header("location:tampil_mhs.php");
    }
} else {
    // Handle the case where 'aksi' is not set (e.g., show an error message or redirect to an error page).
    echo "Aksi parameter is not set.";
}

?>