<?php
class mahasiswa{
    //properti
    //public = bisa dipanggil diluar class
    public $nama;
    //protected tidak bisa dipanggil diluar class 
    //tapi bisa dipanggil dari turunannya / dari extand
    private $nim = "220202035";
    //private hanya bisa dipanggil didalam class 
    //public method
    public function tampil_nama(){
        return "Nama saya FIqhi Rainalzi <br>";
    }
    //protected method tampil_nim
    function tampil_nim(){
        return "NIM saya " . $this->nim;
    }
}
//instansiasi objek mahasiswa kedalam variable $mahasiswa
$mahasiswa = new mahasiswa();
//instansiasi nim kedalam variable $mahasiswa
$nim = new mahasiswa();

//memanggil method tampil_nama
echo $mahasiswa->tampil_nama();
echo $nim->tampil_nim();
?>