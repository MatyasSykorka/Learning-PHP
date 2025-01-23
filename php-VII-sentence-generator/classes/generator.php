<?php
    class Gen {
        // proměné k formátování textu
        public int $length;
        public int $number;

        // přídavná jména
        private $pridavneJM = [
            "Krásný ", "Hubený ", "Malý ", "Hodný ", "Zlý ", "Otravný ", "Poctivý ", "Snaživý "
        ];

        // podstatná jména
        private $podstatnaJM = [
            "předseda ", "manažer ", "kačer ", "student ", "programátor ", "robot "
        ];

        // jakým způsobem, míry
        private $zpusobem = [
            "se málo ", " se hodně ", "s oblibou ", "rychle ", "pomalu "
        ];

        // slovesa
        private $slovesa = [
            "vařil ", "psal ", "tvořil ", "programoval ", "učil ", "hrál ", "prezentoval "
        ];

        // místo
        private $misto = [
            "na stole. ", "v garáži. ", "ve škole. ", "před kolegy. ", "v práci. ", "ve firmě. ", "doma. "
        ];


        // konstruktor převezme ze stránky počet vět a kolik odstavců
        public function __construct(
            private int $vety, 
            private int $pocet
        ) {
            $this->length = $vety;
            $this->number = $pocet;
        }


        // vytvoří větu na základě výstupu ostatních funkcí
        private function tvorbaVet() {
            for ((int)$c = 0; $c < $this->number; $c++) {
                for ((int)$d = 0; $d < $this->length; $d++) {
                    (string)$veta = 
                    $this->vyberPriJM() . 
                    $this->vyberPodJM() . 
                    $this->vyberZpusob() . 
                    $this->vyberS() . 
                    $this->vyberPr();
                    
                    echo $veta;
                }
                echo '<br>';
                echo '<p><strong>-#-#-#-#-#-#-</strong></p>';
            }
        }


        // vybere jaké přídavné jm
        private function vyberPriJM() {
            /*
            // lze i s pomocí sizeof() díky, které lze získat velikost pole, podobný způsob jako C/C++

            (int)$velikostPole = sizeof($this->pridavneJM);
            (int)$vyberSlovo = rand(0, $velikostPole-1);
            (string)$konkretniSlovo = $this->pridavneJM[$vyberSlovo];
            return $konkretniSlovo;
            */

            return $this->pridavneJM[array_rand($this->pridavneJM)];
        }

        // vybere podstatné jm
        private function vyberPodJM() {
            return $this->podstatnaJM[array_rand($this->podstatnaJM)];
        }

        // vybere způsob
        private function vyberZpusob() {
            return $this->zpusobem[array_rand($this->zpusobem)];
        }

        // vybere sloveso
        private function vyberS() {
            return $this->slovesa[array_rand($this->slovesa)];
        }

        // vybere předmět
        private function vyberPr() {
            return $this->misto[array_rand($this->misto)];
        }

        // výstup
        public function vystup() {
            $this->tvorbaVet();
        }
    }
?>