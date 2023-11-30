<?php
class HomeController{
    public function home(){
        header("location:http://localhost/pweb2/jobsheet5/index.php");
    }
    public function mahasiswa(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/index.php");
    }
    public function tambah_mhs(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/tambah.php");
    }
    public function proses_mhs(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/proses_tambah.php");
    }
    public function hapusMahasiswa(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/hapus.php");
    }
    public function editMahasiswa()
    {
        header("Location:https://localhost/pweb2/jobsheet5/views/mahasiswa/edit.php");
    }
    public function dosen(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/index.php");
    }
    public function tambah_dsn(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/tambah.php");
    }
    public function proses_dsn(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/proses_tambah.php");
    }
    public function hapus_dsn(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/hapus.php");
    }
    public function edit_dsn(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/hapus.php");
    }
}
?>