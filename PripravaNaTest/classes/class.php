<?php
    class Clovek {
        public function __construct(string $name, string $surname, int $age) {
            $this->jmeno = $name;
            $this->prijmeni = $surname;
            $this->vek = $age; 
        }
        
        private function text() {
            echo "Ahoj já jsem " . 
                $this->jmeno . " " . 
                $this->prijmeni . 
                ". Je mi " . 
                $this->vek . " let.";
        }

        public function vystup() {
            return $this->text();
        }
    }
?>
