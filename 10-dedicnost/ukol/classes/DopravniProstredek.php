<?php
    class DopravniProstredek {
        public $sound;
        public $type;
        public $speed;
        public $describe;
        public $logo;

        public function __construct($zvuk, $typ, $rychlost, $znacka) {
            $this->sound = $zvuk;
            $this->type = $typ;
            $this->speed = $rychlost;
            $this->logo = $znacka;
        }

        public function sound(): void {}

        public function maxSpeed(): void {}

        public function popis(): void {
            echo "<strong>Popis " . $this->type . "</strong>";
        }
    }
?>