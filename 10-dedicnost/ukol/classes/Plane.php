<?php
    class Plane extends DopravniProstredek {
        public function popis(): void {
            parent::popis();
            echo '<br>';
            echo "Je značky " . $this->logo;
            echo '<br>';
            echo "Letí rychlostí " . $this->speed . "km/h";
        }
        
        public function Sound(): void {
            echo $this->type . " dělá zvuk: " . $this->sound;
        }

        public function maxSpeed(): void {
            echo "Toto " . $this->type . " letí " . $this->speed;
        }
    }
?>