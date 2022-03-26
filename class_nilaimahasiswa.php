<?php
class NilaiMahasiswa{
    public $nama_mahasiswa;
    public $matkul;
    public $nilai;

    function __construct($nama_mahasiswa, $matkul, $nilai)
    {
        $this->nama_mahasiswa = $nama_mahasiswa;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function hitungNilai(){
        return $this->nilai;
    }

    function grade($keterangan) {
        if ($this->nilai > 0 && $this->nilai <= 35)
            return "E";
        
        elseif ($this->nilai > 36 && $this->nilai <= 55)
            return "D";
            
        elseif ($this->nilai > 56 && $this->nilai <= 69)
            return "C";
        
        elseif ($this->nilai > 70 && $this->nilai <= 84)
            return "B";
        
        elseif ($this->nilai > 85 && $this->nilai <= 100)
            return "A";
    }

    function predikat($keterangan) {
        if ($this->nilai < 56)
            return "TIDAK LULUS";
            
        elseif ($this->nilai >= 56) 
            return "LULUS";
    }

    // function grade($keterangan){
    //     if ($this->nilai < 56) {
    //         return "Anda LULUS";
    //     }else{
    //         return "Anda TIDAK LULUS";
    //     }
    // }

    // function predikat($keterangan){
    //     if ($keterangan >= 85 && <= 100){
    //         return "A"
    //     }elseif ($keterangan >= 70 && <= 84) {
    //         return "B"
    //     }elseif ($keterangan >= 56 && <= 69) {
    //         return "C"
    //     }elseif ($keterangan >= 36 && <= 55) {
    //         return "D"
    //     }elseif ($keterangan >= 0 && <= 35) {
    //         return "E"
    //     }
    // }
}
?>