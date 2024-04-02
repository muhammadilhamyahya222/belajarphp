<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kampus;
    public $matkul;
    public $nilai;

    public function __construct($nim, $nama, $kampus, $matkul, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kampus = $kampus;
        $this->nilai = $nilai;
        $this->matkul = $matkul;
    }

    public function getKet() {

        $ket = ($this->nilai >= 65) ? "Lulus" : "Tidak Lulus";

        return $ket;
    }

    public function getGrade() {
        
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            $grade = "A";
        } else if ($this->nilai >= 75 && $this->nilai < 85) {
            $grade = "B";
        } else if ($this->nilai >= 60 && $this->nilai < 75) {
            $grade = "C";
        } else if ($this->nilai >= 40 && $this->nilai < 60) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        return $grade;
    }

    public function getPredikat() {
        $grade = $this->getGrade();
        switch ($grade) {
            case "A" :
                      $predikat = "Sangat Memuaskan";
                      break;
            case "B" :
                      $predikat = "Memuaskan";
                      break;
            case "C" :
                      $predikat = "Cukup";
                      break;
            case "D" :
                      $predikat = "Kurang";
                      break;
            case "E" :
                      $predikat = "Sangat Kurang";
                      break;
            default:
                      $predikat = "";
          }

          return $predikat;
    }
}

?>