<?php
    class Clovek {

        public string $jmeno;
        public string $prijmeni;
        public int $vek;

        public function pozdrav() {
            echo "Ahoj jmenuji se " 
                . (isset($this->jmeno) ? $this->jmeno : '')
                . ' ' 
                . (isset($this->prijmeni) ? $this->prijmeni : '') 
                . "! :)<br>";
        }

        public function jemi() {
            echo "Je mi " 
                . (!isset($this->vek) ? '' : $this->vek) 
                . " let.<br>";
        }
    }
?>