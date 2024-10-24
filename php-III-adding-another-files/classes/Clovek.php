<?php
    class Clovek {
        private string $name;
        private string $surname;
        public int $age;

        public function __construct($name, $surname, $age) {
            $this -> name = $name;
            $this -> surname = $surname;
            $this -> age = $age;
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

        /* this code not working */
        private string $nameII = "jaj";
        private string $surnameII = "kk";
        
        public function __toString(): string {
            return $this -> nameII
                . ' ' 
                . $this -> surnameII;
        }
    }
?>