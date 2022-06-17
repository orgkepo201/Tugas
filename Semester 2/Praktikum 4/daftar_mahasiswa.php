<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
</head>
<body>
    <?php
        require_once 'class_mahasiswa.php';
        $mh1 = new Mahasiswa('02011', 'Faiz Fikri', 2012, 'TI', 3.8,);
        $mh2 = new Mahasiswa('02012', 'Alissa Khairunnisa', 2012, 'TI', 3.9);
        $mh3 = new Mahasiswa('01011', 'Rosalie Naurah', 2010, 'SI', 3.46);
        $mh4 = new Mahasiswa('01012', 'Defghi Muhammad', 2010, 'SI', 3.2);

        echo '<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Tahun Angkatan</th>
                        <th>IPK</th>
                        <th>Predikat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>'. $mh1->nim;
                        echo '</td>
                            <td>'. $mh1->nama;
                        echo '</td>
                            <td>'. $mh1->prodi;
                        echo '</td>
                            <td>'. $mh1->ta;
                        echo '</td>
                            <td>'. $mh1->ipk;
                        echo '</td>
                            <td>'. $mh1->predikat_ipk();
                    echo '</tr>
                        <tr>
                            <td>2</td>
                            <td>'. $mh2->nim;
                            echo '</td>
                            <td>'. $mh2->nama;
                            echo '</td>
                            <td>'. $mh2->prodi;
                            echo '</td>
                            <td>'. $mh2->ta;
                            echo '</td>
                            <td>'. $mh2->ipk;
                            echo '</td>
                            <td>'. $mh2->predikat_ipk();
                    echo '</tr>
                        <tr>
                            <td>3</td>
                            <td>'. $mh3->nim;
                            echo '</td>
                            <td>'. $mh3->nama;
                            echo '</td>
                            <td>'. $mh3->prodi;
                            echo '</td>
                            <td>'. $mh3->ta;
                            echo '</td>
                            <td>'. $mh3->ipk;
                            echo '</td>
                            <td>'. $mh3->predikat_ipk();
                            
                    echo '</tr>
                        <tr>
                            <td>4</td>
                            <td>'. $mh4->nim;
                            echo '</td>
                            <td>'. $mh4->nama;
                            echo '</td>
                            <td>'. $mh4->prodi;
                            echo '</td>
                            <td>'. $mh4->ta;
                            echo '</td>
                            <td>'. $mh4->ipk;
                            echo '</td>
                            <td>'. $mh4->predikat_ipk();
                        
                        

        // echo '<br/>NIM : '. $mh1->nim;
        // echo '<br/>Nama : '. $mh1->nama;
        // echo '<br/>Tahun Angkatan : '. $mh1->ta;
        // echo '<br/>Prodi : '. $mh1->prodi;
        // echo '<br/>IPK : '. $mh1->ipk;
        // echo '<br/>Predikat : '. $mh1->predikat_ipk();
    ?>
</body>
</html>