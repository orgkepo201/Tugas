<?php
    require_once 'class_nilaimahasiswa.php';
    $nim = $_POST['nim'];
    $mata_kuliah = $_POST['matkul'];
    $hasil_nilai = $_POST['nilai'];
    $grade = grade($hasil_nilai);
    $hasil = hasil($hasil_nilai);

    echo 'NIM : '.$nim;
    echo '<br/>Nama Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai : '.$hasil_nilai;
    echo '<br/>Hasil Ujian : '.$hasil;
    echo '<br/>Grade : '.$grade ;

?>