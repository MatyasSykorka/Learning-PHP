<?php
    interface Drawable {
        public function draw(): float;
        public function area(): float;
    };

    class Circle implements Drawable {
        private float $radius;

        public function __construct(float $radius) {
            $this->radius = $radius;
        }

        public function draw(): float {
            return 3.14 * $this->radius * $this->radius;
        }

        public function area(): float {
            return 3.14 * $this->radius * $this->radius;
        }

        public function output(): string {
            return $this->area() . " circle";
        }
    };

    class Rectangle implements Drawable {
        private float $width;
        private float $height;

        public function __construct(float $width, float $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function draw(): float {
            return $this->width * $this->height;
        }

        public function area(): float {
            return $this->width * $this->height;
        }

        public function output(): string {
            return $this->area() . " rectangle";
        }
    };

    class Triangle implements Drawable {
        private float $base;
        private float $height;

        public function __construct(float $base, float $height) {
            $this->base = $base;
            $this->height = $height;
        }

        public function draw(): float {
            return 0.5 * $this->base * $this->height;
        }

        public function area(): float {
            return 0.5 * $this->base * $this->height;
        }

        public function output(): string {
            return $this->area() . " triangle";
        }
    };

?>