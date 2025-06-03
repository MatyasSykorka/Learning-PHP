<?php
    class Math {
        private int $CI;
        private int $CII;

        public function __construct($NumI, $NumII) {
            $this -> CI = $NumI;
            $this -> CII = $NumII;
        }

        private function Scitani() {
            return $this->CI + $this->CII;
        }

        private function Odcitani() {
            return $this->CI - $this->CII;
        }

        private function Soucin() {
            return $this->CI * $this->CII;
        }

        private function Podil() {
            return $this->CI / $this->CII;
        } 

        public function Output() {
            echo "<br>" .
                "<strong>Výsledky:</strong><br>" .
                "Scitani: " . $this->Scitani() . "<br>" . 
                "Rozdíl: " . $this->Odcitani() . "<br>" . 
                "Součin: " . $this->Soucin() . "<br>" . 
                "Podíl: " . $this->Podil() . 
                "<br>";
        }

    }

?>