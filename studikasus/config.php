<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "shoes.care";
    var $koneksi;

    public function getKoneksi(){
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password, $this->db);
        if(!$this->koneksi){
            die ("Koneksi terputus");
        }
        return $this->koneksi;
    }
}

?>