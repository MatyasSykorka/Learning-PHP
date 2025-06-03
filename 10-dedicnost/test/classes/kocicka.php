<?php
    class Kocicka extends Animal {
        public function meow(): void {
            echo $this->name . ": Meow, meow!";
        }

        public function pozdravII(): void {
            parent::pozdrav();
            echo " Pozdrav 2";
        }
    }
?>