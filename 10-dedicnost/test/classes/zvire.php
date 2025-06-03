<?php
    class Animal {
        public $name;

        public function __construct($jmeno) {
            $this->name = $jmeno;
        }

        public function pozdrav(): void {
            echo "Ahoj, jsem " . $this->name . ".";
        }
    }
?>