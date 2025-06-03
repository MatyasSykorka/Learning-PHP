<?php
    class Coder extends Person {
        private string $prg_lang;

        public function __construct(
            string $personName,
            string $personSurname,
            int $personAge,
            int $unava,
            string $programming_lang
        ) {
            parent::__construct($personName, $personSurname, $personAge, $unava);
            $this->prg_lang = $programming_lang;
        }

        public function set_prog(string $name){
            $this->prg_lang = $name;
        }

        public function code(int $hodin): int {
            $this->unava -= $hodin;

            if($this->unava < 0) {
                return $this->unava + $hodin;
            }
            else {
                return $this->unava;
            }
        }

        public function OutputPrg() {
            echo "Programuju v jazyce " . $this->prg_lang;
        }
    }

    $clovek = new Coder("test","testovic",18,100, "C");
    echo $clovek->set_prog("d");
?>