<?php
    // class NilaiMahasiswa {
    //     var $matakuliah;
    //     var $nilai;
    //     var $nim;

    //     function __construct($matkul, $nilai, $nim) {
    //         $this->matkul = $matakuliah;
    //         $this->nilai = $nilai;
    //         $this->nim = $nim;
    //     }

    function grade($hasil_nilai){
        if ($hasil_nilai >55) {
            return 'LULUS';
        }
        else {
            return 'TIDAK LULUS';
        }
    }
    function hasil($hasil_nilai){
        if ($hasil_nilai > 0 && $hasil_nilai <= 35){
            return 'E';
        }
        elseif ($hasil_nilai > 36 && $hasil_nilai <= 55){
            return 'D';
        }
        elseif ($hasil_nilai > 56 && $hasil_nilai <= 69){
            return 'C';
        }
        elseif ($hasil_nilai > 70 && $hasil_nilai <= 84){
            return 'B';
        }
        elseif ($hasil_nilai > 85 && $hasil_nilai <= 100){
            return 'A';
        }
        // else {
        //     return 'I';
        // }
    }
?>