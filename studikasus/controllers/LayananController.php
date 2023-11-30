<?php

include_once "../../models/Layanan.php";

class LayananController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new layanan($db);
    }

    public function getAllLayanan()
    {
        return $this->model->getAllLayanan();
    }

    public function createLayanan($nama_jenis,$tarif,$waktu)
    {
        return $this->model->createLayanan($nama_jenis,$tarif,$waktu);
    }

    public function getLayanan($id_layanan)
    {
        return $this->model->getLayanan($id_layanan);
    }

    public function updateLayanan($id_layanan,$nama_jenis,$tarif,$waktu)
    {
        return $this->model->updateLayanan($id_layanan,$nama_jenis,$tarif,$waktu);
    }

    public function deleteLayanan($id_layanan)
    {
        return $this->model->deleteLayanan($id_layanan);
    }
}


?>