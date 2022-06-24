<?php 
    class account {
        public $nama;
        protected $nomor;
        private $saldo;
        

        function __construct($nama,$nomor, $saldo){
            $this -> nama = $nama;
            $this -> nomor = $nomor;
            $this -> saldo = $saldo;
        }
        
        public function deposit($uang){
            $this -> saldo = $this-> saldo + $uang;
        }

        public function withdraw($uang){
            $this -> saldo = $this -> saldo - $uang;
        }

        public function cetak(){
            echo "</br>Nama : ".$this -> nama;
            echo "</br>No Account : ".$this -> nomor;
            echo "</br>Saldo : ".$this -> saldo;
            echo "</br>";
        }
    }

    $cs1 = new account ('Ahmad','C001', 60000000);
    $cs1 -> deposit(10000000);
    $cs1 -> cetak(); 
    echo "Ahmad Menabung Uang Sebesar Rp 1.000.000";

    echo "<hr>";

    $cs3 = new account ('Kurniawan', 'C003',2500000);
    $cs3 -> cetak();

    echo "<hr>";

    $cs1 = new account ("Ahmad", "C001", 7000000);
    $cs1 -> withdraw(500000);
    $cs1 -> withdraw(1500000);
    $cs1 -> cetak();
    $cs2 = new account ('Budi', 'C002', 5350000);
    $cs2 -> deposit(500000);
    $cs3 = new account ('Kurniawan', 'C003',2500000);
    $cs3 -> deposit(1500000);
    $cs2 -> cetak();
    $cs3 -> cetak();
    echo "Ahmad mentransfer uang senilai Rp 1.500.000 ke Kurniawan dan Rp. 500.000 ke Budi";

    echo "<hr>";

    $cs2 = new account ('Budi', 'C002', 5850000);
    $cs2 -> withdraw(2500000);
    $cs2 -> cetak();
    echo "Budi Menarik Uang Sebesar Rp.2.500.000";
    echo "<hr>";

?>