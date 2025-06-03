<?php
    class Car {
        private string $znacka;
        private string $barva;
        private string $SPZ;
        private string $vel;

        function __construct(
            public string $logo, 
            public string $color, 
            public string $spz,
            public string $size
        ) {
            $this -> znacka = $logo;
            $this -> barva = $color;
            $this -> SPZ = $spz;
            $this -> vel = $size;
        }

        function __toString() {
            return "Auto značky <strong>" . $this->znacka . "</strong><br>" 
                . "barva auta <strong>" . $this->barva . "</strong><br>"
                . "spz auta <strong>" . $this->SPZ . "</strong><br>"
                . "auto je velikosti <strong>" . $this->vel . "</strong><br>";
        }

        public function zaparkuj(garaz $G): void {
            $G->vloz($this);
        }
    }
?>