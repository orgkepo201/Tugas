<?php
    class Dispenser{
        protected $volume;
        protected $hargaSegelas;
        private $volumeGelas;
        public $namaMinuman;

        public function isi($vol){
            return $this->volume = $vol;
        }
        public function harga($hG){
            return $this->$hargaSegelas = $hG;
        }
        public function volG($vG){
            return $this->$volumeGelas = $vG;
        }
        public function namaM($nM){
            return $this->$namaMinuman = $nM;
        }
    }

    $minuman = new Dispenser();
    echo 'Nama Minuman : '.$minuman->nama = 'Wedang';
    echo '</br>';
    echo 'Volune Minuman : '.$minuman->isi(500). 'ml'; 
    echo '</br>';
    echo '1 Gelas Seharga : '.$minuman->harga('Rp 5.000');
    echo '</br>';
    echo 'Mansyur membeli 1 gelas minuman Wedang seharga : '.$minuman->harga('Rp 5.000'). ' dengan volume gelas sebesar '.$minuman->volG(250). 'ml.';
    echo '</br>';
    echo 'Sisa volume botol minuman Wedang sebesar : '. $minuman->isi(500) - $minuman->volG(250). 'ml';
?>