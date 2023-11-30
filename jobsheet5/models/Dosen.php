<?php
class Dosen {
    private $koneksi;

    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllDosen(){
        $query = "SELECT * FROM dosen";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDosen($nidn,$nama,$alamat,$jenis_kelamin){
        $query = "INSERT into dosen (nidn,nama,alamat,jenis_kelamin)
        VALUES ('$nidn','$nama','$alamat','$jenis_kelamin')";
        $result = mysqli_query($this->koneksi, $query);
        if($result)
            {
                return true;
            }
        else
            {
                return false;
            };
    }

    public function getDosen($id)
    {
        $query = "SELECT * FROM dosen where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        while ($d = mysqli_fetch_array($result)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    public function updateDosen($id, $nidn ,$nama, $alamat,$jenis_kelamin){
        $query = "UPDATE dosen SET nidn='$nidn', nama='$nama',  alamat='$alamat', jenis_kelamin='$jenis_kelamin'  WHERE id='$id'";

        $result =mysqli_query($this->koneksi, $query);
        if($result)
            {
                return true;
            }
        else
        {
            return false;
        };
    }

    public function deleteDosen($id){
        $query = "DELETE FROM dosen where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if($result)
            {
                return true;
            }
        else
        {
            return false;
        };
    }
}

?>