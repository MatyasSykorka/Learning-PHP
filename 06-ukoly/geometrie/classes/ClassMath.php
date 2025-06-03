<?php
    class Face {
        /*
        private int $Face = 50;
        private int $Eses = 11;

        private function ObsahOb() {
            return (pi()*($this->Face/2))**2;
        }

        private function ObsahOka() {
            return (pi()*($this->Eses/2))**2;
        }

        private function ObsahPu() {
            return 20 * 5;
        }

        private function Vypocet() {
            return $this->ObsahOb()-(($this->ObsahOka()*2)+$this->ObsahPu());
        }

        public function Output() {
            echo "Obsah žlutého kruhu je <strong>" . $this->ObsahOb() . " cm^2</strong> \"(Pi*r)^2\"<br>"
                . "Celkový obsah očí je <strong>" . $this->ObsahOka()*2 . " cm^2</strong> \"((Pi*r)^2)*2\"<br>"
                . "Obsah pusy je <strong>" . $this->ObsahPu() . " cm^2</strong> \"a*b\"<br><br>"
                . "Pro výpočet obshu žluté části je potřeba:<br>"
                . "Obsah žlutého kruhu odečíst od obsahu obou očí a pusy<br>"
                . "Výsledek je <strong>" . $this->Vypocet() . "</strong>";
        }
        */

        

        // Alternative function

        private float $PrumerObliceje;
        private float $PrumerOka;
        private float $ObsahObdelniku;

        public function __construct(float $Prum_Obliceje, float $Prum_Oka, float $O_Obdelniku) {
            $this -> PrumerObliceje = $Prum_Obliceje;
            $this -> PrumerOka = $Prum_Oka;
            $this -> ObsahObdelniku = $O_Obdelniku;
        }

        private function ObsahObII() {
            return pi()*(($this->PrumerObliceje/2)**2);
        }

        private function ObsahOkaII() {
            return pi()*(($this->PrumerOka/2)**2);
        }

        private function VypocetII() {
            return $this->ObsahObII()-(($this->ObsahOkaII()*2)+$this->ObsahObdelniku);
        }

        public function OutputII() : void {
            echo "Obsah žlutého kruhu je <strong>" . $this->ObsahObII() . " cm^2</strong> \"(Pi*r)^2\"<br>"
                . "Celkový obsah očí je <strong>" . $this->ObsahOkaII()*2 . " cm^2</strong> \"((Pi*r)^2)*2\"<br>"
                . "Obsah pusy je <strong>" . $this->ObsahObdelniku . " cm^2</strong> \"a*b\"<br><br>"
                . "Pro výpočet obshu žluté části je potřeba:<br>"
                . "Obsah žlutého kruhu odečíst od obsahu obou očí a pusy<br>"
                . "Výsledek je <strong>" . $this->VypocetII() . "</strong>";
        }
        
    }
?>