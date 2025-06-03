<?php
    class Car extends DopravniProstredek {
        public function popis(): void {
            parent::popis();
            echo '<br>';
            echo "Je značky " . $this->logo;
            echo '<br>';
            echo "Jezdí rychlostí " . $this->speed . "km/h";
        }
        
        public function Sound(): void {
            echo $this->type . " dělá zvuk: " . $this->sound;
        }

        public function maxSpeed(): void {
            echo "Toto " . $this->type . " jezdí " . $this->speed;
        }
    }
?>