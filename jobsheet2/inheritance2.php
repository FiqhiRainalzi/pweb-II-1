<?php
class handphone{
    protected $tipe;
    private $warna;

    function __construct($tipe,$warna){
        $this->tipe=$tipe;
        $this->warna=$warna;
    }

    protected function getTipe(){
        return $this->tipe;
    }

     function getWarna(){
        return $this->warna;
    }
}

class xiaomi extends handphone{
    function getTipeHP(){
        //memanggil methode protected dari class handphone
        return "Tipe Handphone " . $this->getTipe();
    }
}

$xiaomi = new xiaomi("Redmi ", " Gold");
echo $xiaomi->getTipeHP();
echo "berwarna " . $xiaomi->getWarna();
?>