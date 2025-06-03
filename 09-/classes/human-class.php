<?php
    class Person {
        protected string $name;
        protected string $surname;
        protected int $age;
        protected int $unava;

        // tvorba konstruktora který převezme proměnné
        public function __construct(
            string $personName,
            string $personSurname,
            int $personAge,
            int $energy
        ) {
            $this->name = $personName;
            $this->surname = $personSurname;
            $this->age = $personAge;
            $this->unava = $energy;
        }

        
        // getter methode
        public function get_name() {
            return $this->name;
        }
        
        // setter methode
        public function set_name(string $name) {
            $this->name = $name;
        }

        // funkce, formátuje text
        public function printPerson(): void {
            echo 
                "Člověk, který se jmenuje <br>"
                . '<u>' . $this->name . ' ' . $this->surname . '</u>' . 
                "<br>Jeho věk je " . $this->age . " let."
                . '<br>';
        }

        public function sleep(int $hodin): int {
            $this->unava += $hodin;

            if($this->unava > 20) {
                return $this->unava - $hodin;
            }
            else {
                return $this->unava;
            }
        }

        public function run(int $km): int {
            $this->unava -= $km;
            
            if ($this->unava > 0) {
                return $this->unava - $km;
            }
            else {
                return $this->unava;
            }
        }


        // vypisuje výstup funkce, která byla privátní
        public function Output() {
            $this->printPerson();
        }
    }
?>