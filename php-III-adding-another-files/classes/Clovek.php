<?php
    class Clovek {
        private string $name;
        private string $surname;
        public int $age;

        public function __construct($nameII, $surnameII, $ageII) {
            $this -> name = $nameII;
            $this -> surname = $surnameII;
            $this -> age = $ageII;
        }


        private function Hi() {
            echo "Zdravím jmenuju se <strong>" 
                . $this->name 
                . " " 
                . $this->surname
                . "</strong>! Je mi "
                . $this->age
                . " let.<br>";
        }

        public function PublicHi() {
            $this->Hi();
        }
        
        // this code not working 
        /*
        private string $nameII = "jaj";
        private string $surnameII = "kk";
        
        public function __toString(): string {
            return $this -> nameII
                . ' ' 
                . $this -> surnameII;
        }
        */
    }
?>