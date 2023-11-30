<?php
include_once "../../models/Dosen.php";

class DosenController{
    private $model;

    public function __construct($db)
    {
        $this->model = new dosen($db);
    }   

    public function getAllDosen(){
        return $this->model->getAllDosen();
    }

    public function createDosen($nidn, $nama, $alamat, $jenis_kelamin)
    {
        return $this->model->createDosen($nidn, $nama, $alamat, $jenis_kelamin);
    }

    public function getDosen($id)
    {
        return $this->model->getDosen($id);
    }

    public function updateDosen($id, $nama, $nidn, $alamat, $jenis_kelamin)
    {
        return $this->model->updateDosen($id, $nama, $nidn, $alamat, $jenis_kelamin);
    }

    public function deleteDosen($id)
    {
        return $this->model->deleteDosen($id);
    }

}
?>