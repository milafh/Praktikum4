<?php
class __persegipanjang{
    public $panjang;
    public $lebar;

    public function luaspersegippanjang(){
        $luas=$this-> panjang*$this-> lebar;
        return "Luas : ".$luas;
    }
    public function kelilingpersegippanjang(){
        $keliling=2*($this-> panjang + $this-> lebar);
        return "Keliling : ".$keliling;
    }
    public function settlebar($lebar){
        return $this->lebar = $lebar;
    }
    public function settpanjang($panjang){
        return $this->panjang = $panjang;
    }
}
?>

