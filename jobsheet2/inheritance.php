<?Php
    class manusia{
        var $nama_saya;

        function panggil_nama($saya){
            $this->nama_saya=$saya;
        }
    }
//sub class dari manusia
    class mahasiswa extends manusia{
        var $nama_mahasiswa;

        function panggil_mahasiswa($mahasiswa){
            $this->nama_mahasiswa=$mahasiswa;
        }
    }

    //instansiasi class mahasiswa
    $informatika = new mahasiswa();
    $informatika->panggil_nama("Fiqhi");
    $informatika->panggil_mahasiswa("Rainalzi");
    //tamplikan 
    echo "Nama depan saya " . $informatika->nama_saya . "<br>"; 
    echo "Nama belakang saya " . $informatika->nama_mahasiswa . "<br>"; 

?>