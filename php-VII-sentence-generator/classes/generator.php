<?php
    class Gen {
        private int $length;
        private int $number;

        private $pridavneJM = array(
            "krásný", "hubený", "malý", "hodný", "zlý", "otravný", "poctivý", "snaživý"
        );

        private $podstatnaJM = array(
            "předseda", "manažer", "kačer", "Matyáš", "programátor", "robot"
        );

        private $zpusobem = array(
            "málo", "hodně", "s oblibou", "rychle", "pomalu"
        );

        private $slovesa = array(
            "vařil", "uklízel", "tvořil", "programoval", "učil", "stavěl", "hrál", "prezentoavl"
        );

        private $predmet = array(
            "na stole", "v garáži", "ve škole", "před kolegy", "v práci", "ve firmě", "doma"
        );

        // 
        public function __construct(
            private int $vety, 
            private int $pocet
        ) {
            $this->length = $vety;
            $this->number = $pocet;
        }

        // vytvoří větu na základě výstupu ostatních funkcí
        private function tvorbaVet() {
            $this->vyberPriJM();
            $this->vyberPodJM();
            $this->vyberZpusob();
            $this->vyberS();
            $this->vyberPr();

            $this->vystup();
        }


        // vybere jaké přídavné jm
        private function vyberPriJM() {

        }

        // vybere podstatné jm
        private function vyberPodJM() {

        }

        // vybere způsob
        private function vyberZpusob() {

        }

        // vybere sloveso
        private function vyberS() {

        }

        // vybere předmět
        private function vyberPr() {

        }


        // výstup
        public function vystup() {
            echo '
                <p>
                    "some text"
                </p>
            ';
        }
    }
?>