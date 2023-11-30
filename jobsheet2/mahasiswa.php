<?php
//class
class mahasiswa {
    //properties
    var $nim;
    var $nama;
    var $alamat;
    //method menampilkan nama
    function tampil_nama(){
        return "nama saya fiqhi rainalzi </br>";
    }
    //method menampilkan alamat
    function tampil_alamat(){
        return "cilacap </br>";
    }
    function tampil_nim(){
        return "220202035 </br>";
    }

}

class dosen {
    var $nidn;
    var $nama;
    var $prodi;

    function tampil_nama (){
        return "Nama saya Fiqhi Rainalzi </br>";
    }
    function tampil_nidn (){
        return "220202035 </br>";
    }
    function tampil_prodi(){
        return "Prodi D3 Teknik Informatika </br>";
    }
}
//objek baru nama_mahasiswa
$nama_mahasiswa = new mahasiswa();
//tampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
//objek baru nama_dosen
$nama_dosen = new dosen();
echo $nama_dosen->tampil_nama();
echo $nama_dosen->tampil_nidn();
echo $nama_dosen->tampil_prodi();
?>