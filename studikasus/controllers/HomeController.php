<?php
class HomeController{
    public function home()
    {
        header("location:http://localhost/pweb2/studikasus/index.php");
    }

    public function layanan()
    {
        header("location:http://localhost/pweb2/studikasus/views/layanan/index.php");
    }

    public function transaksi()
    {
        header("location:http://localhost/pweb2/studikasus/views/transaksi/index.php");
    }

    public function tambahlyn()
    {
        header("location:http://localhost/pweb2/studikasus/views/layanan/tambah.php");
    }

    public function proseslyn()
    {
        header("location:http://localhost/pweb2/studikasus/views/layanan/proses.php");
    }

    public function editlyn()
    {
        header("location:http://localhost/pweb2/studikasus/views/layanan/edit.php");
    }

    public function hapuslyn()
    {
        header("location:http://localhost/pweb2/studikasus/views/layanan/hapus.php");
    }

    public function tambahtr()
    {
        header("location:http://localhost/pweb2/studikasus/views/transaksi/tambah.php");
    }

    public function prosestr()
    {
        header("location:http://localhost/pweb2/studikasus/views/transaksi/proses.php");
    }

    public function hapustr()
    {
        header("location:http://localhost/pweb2/studikasus/views/transaksi/hapus.php");
    }

    public function edittr()
    {
        header("location:http://localhost/pweb2/studikasus/views/transaksi/edit.php");
    }
}
?>