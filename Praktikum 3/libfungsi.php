<?php
    function kelulusan($hasil_nilai){
        if ($hasil_nilai >55) {
            return 'LULUS';
        }
        else {
            return 'TIDAK LULUS';
        }
    }
    function grade($hasil_nilai){
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
        else {
            return 'I';
        }
    }
    function predikat($grade){
        switch ($grade){
            case 'A' :
                return 'Sangat Memuaskan';
                break;

            case 'B' :
                return 'Memuaskan';
                break;

            case 'C' :
                return 'Cukup';
                break;

            case 'D' :
                return 'Kurang';
                break;
            case 'E' :
                return 'Sangat Kurang';
                break;
            default :
                return 'Tidak Ada';
        }
    }
?>