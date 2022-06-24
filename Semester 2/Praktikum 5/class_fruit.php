<?php
    class Fruit {
        public $name;
        protected $color;
        private $weight;

        function set_name($n){
            $this->name = $n;
        }
        protected function set_color($c){
            $this->color = $c;
        }
        private function set_weight($w){
            $this->weight = $w;
        }
    }

    $mango = new Fruit();
    echo $mango->set_name=('Mango');
    echo '</br>';
    echo $mango->set_color=('Yellow');
    echo '</br>';
    echo $mango->set_weight=('300');

    // $mango->set_name('Mango');
    // $mango->set_color('Yellow');
    // $mango->set_weight('300');

?>