<?php

// use LDAP\Result;

class layanan {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    public function getAllLayanan()
    {
        $query = "SELECT * FROM layanan";
        $result = mysqli_query($this->koneksi,$query);
        return $result;
    }

    public function createLayanan($nama_jenis,$tarif,$waktu)
    {
        $query = "INSERT INTO layanan (nama_jenis,tarif,waktu) VALUES ('$nama_jenis','$tarif','$waktu');";
        $result = mysqli_query($this->koneksi,$query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function getLayanan($id_layanan)
    {
        $query = "SELECT * FROM layanan where id_layanan='$id_layanan'";
        $result = mysqli_query($this->koneksi,$query);
        while($l =  mysqli_fetch_array($result))
        {
            $hasil[] = $l;
        }
        return $hasil;
    }

    public function updateLayanan($id_layanan,$nama_jenis,$tarif,$waktu)
    {
        $query = "UPDATE layanan SET nama_jenis='$nama_jenis', tarif='$tarif', waktu='$waktu' where id_layanan='$id_layanan'";
        $result = mysqli_query($this->koneksi, $query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteLayanan($id_layanan)
    {
        $query = "DELETE FROM layanan where id_layanan = '$id_layanan'";
        $result = mysqli_query($this->koneksi, $query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
}

?>