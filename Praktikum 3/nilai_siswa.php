<?php
    require_once 'libfungsi.php';
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $hasil_nilai = ($nilai_uts * 30/100) + ($nilai_uas * 35/100) + ($nilai_tugas * 35/100);
    $ket = kelulusan($hasil_nilai);
    $grade = grade($hasil_nilai);
    $predikat = predikat($grade);

    echo 'Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    echo '<br/>Keterangan : '.$ket ;
    echo '<br/>Grade : '.$grade ;
    echo '<br/>Predikat : '.$predikat ;
?>