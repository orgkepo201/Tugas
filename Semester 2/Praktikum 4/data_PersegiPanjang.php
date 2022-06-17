<?php
    require_once 'class_PersegiPanjang.php';
    $pp = new PersegiPanjang(10, 5);

    echo '<br/>Luas Persegi Panjang adalah ' . $pp->getLuas();

    echo '<br/>Keliling Persegi Panjang adalah ' . $pp->getKeliling();
?>