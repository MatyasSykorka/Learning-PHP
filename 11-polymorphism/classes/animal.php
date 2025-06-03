<?php
    class Animal {
        public function dosound() {}
    };

    class Dog extends Animal {
        public function dosound() {
            echo "Woof!";
        }
    };

    class Horse extends Animal {
        public function dosound() {
            echo "Neigh!";
        }
    };

    class Snake extends Animal {
        public function dosound() {
            echo "Hiss!";
        }
    };

    function itMakeSound(Animal $animal) {
        $animal->dosound();
    }
?>
