<?php
include_once "../../models/Transaksi.php";

class TransaksiController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new transaksi($db);
    }

    public function getAllTransaksi()
    {
        return $this->model->getAllTransaksi();
    }

    public function createTransaksi($nama,$tgl_pesan,$jenis_sepatu,$jenis_service,$alamat,$status)
    {
        return $this->model->createTransaksi($nama,$tgl_pesan,$jenis_sepatu,$jenis_service,$alamat,$status);
    }

    public function getTransaksi($id_transaksi)
    {
        return $this->model->getTransaksi($id_transaksi);
    }

    public function updateTransaksi($id_transaksi,$nama,$tgl_pesan,$jenis_sepatu,$jenis_service,$alamat,$status)
    {
        return $this->model->updateTransaksi($id_transaksi,$nama,$tgl_pesan,$jenis_sepatu,$jenis_service,$alamat,$status);
    }

    public function deleteTransaksi($id_transaksi)
    {
        return $this->model->deleteTransaksi($id_transaksi);
    }
}
?>