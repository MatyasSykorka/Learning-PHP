<?php
    class Face {
        private int $Face;
        private int $R_Eye;
        private int $L_Eye;
        private int $Mouth;

        public function __construct($FaceN, $R_EyeN, $L_EyeN, $MouthN) {
            $this -> Face = $FaceN;
            $this -> R_Eye = $R_EyeN;
            $this -> L_Eye = $L_EyeN;
            $this -> Mouth = $MouthN;
        }

        private function ObsahOb() {

        }

        private function ObsahPO() {

        }

        private function ObsahLO() {

        }

        private function ObsahPu() {

        }

        public function OutputM() {
            echo "";
        }
    }
?>