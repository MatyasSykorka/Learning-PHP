<?php
    interface Vehicles {
        public function move();
    };

    class CarII implements Vehicles {
        public function move() {
            echo "The car drives on the road.";
        }
    };

    class BikeII implements Vehicles {
        public function move() {
            echo "The bike pedals along the path.";
        }
    };

    class PlaneII implements Vehicles {
        public function move() {
            echo "The plane flies through the sky.";
        }
    };
    
?>
