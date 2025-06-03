<?php
    interface Shape {
        public function draw();
    };

    class Circle implements Shape {
        public function draw() {
            echo "Drawing a circle.";
        }
    };

    class Square implements Shape {
        public function draw() {
            echo "Drawing a square.";
        }
    };

    class Hexagon implements Shape {
        public function draw() {
            echo "Drawing a hexagon.";
        }
    };

    function renderShape(Shape $shape) {
        $shape->draw();
    }
?>