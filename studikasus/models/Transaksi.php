<?php

class transaksi
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllTransaksi()
    {
        $query = "SELECT * FROM transaksi";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createTransaksi($nama,$tgl_pesan,$jenis_sepatu,$jenis_service,$alamat,$status)
    {
        $query = "INSERT INTO transaksi (nama,tgl_pesan,jenis_sepatu,jenis_service,alamat,status) 
        VALUES ('$nama','$tgl_pesan','$jenis_sepatu','$jenis_service','$alamat','$status')";
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

    public function getTransaksi($id_transaksi)
    {
        $query = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
        $result = mysqli_query($this->koneksi, $query);
        while($t = mysqli_fetch_array($result))
        {
            $hasil[] = $t;
        }
        return $hasil;
    }

    public function updateTransaksi($id_transaksi,$nama,$tgl_pesan,$jenis_sepatu,$jenis_service,$alamat,$status)
    {
        $query = "UPDATE transaksi SET nama='$nama', tgl_pesan='$tgl_pesan', jenis_sepatu='$jenis_sepatu',
        jenis_service='$jenis_service',alamat='$alamat', status='$status' WHERE id_transaksi='$id_transaksi'";
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

    public function deleteTransaksi($id_transaksi)
    {
        $query = "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'";
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