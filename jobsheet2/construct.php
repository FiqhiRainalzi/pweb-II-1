<?php
//class
class mahasiswa {
    //properties
    var $nim;
    var $nama;
    var $alamat;
    //method menampilkan nama
    function __construct(){
        echo "saya mahasiswa teknik informatika <br>";
    }

    function __destruct(){
        echo "Politeknik Negeri Cilacap";
    }
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
    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampain lulus kuliah </br>";
    }

}
//class dosen
class dosen {
    //properties
    var $nidn;
    var $nama;
    var $prodi;
//,method
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
echo $nama_mahasiswa->tampil_mahasiswa();
//objek baru nama_dosen
$nama_dosen = new dosen();
echo $nama_dosen->tampil_nama();
echo $nama_dosen->tampil_nidn();
echo $nama_dosen->tampil_prodi();
?>