<?php
    // echo "garaze";

    class Garaz {
        private Car $Auto;

        public function vloz(Car $Auticko) {
            $this->Auto = $Auticko;
        }

        function __toString() {
            return "V garáži \"A\" je <br>" . $this->Auto; 
        }
    }
?>