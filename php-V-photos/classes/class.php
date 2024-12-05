<?php
    class FileDirectory {
        private string $Adresar;

        public function __construct(string $path) {
            $this->Adresar = $path;
        }

        private function Nacti() : array {
            return scandir($this->Adresar);
        }

        /*
        public function Vypis() : void {
            for($c = 0; $c < sizeof($this->Nacti())-2; $c++) {
                $imageName = $c . ".jpg";
                $imagePath = "./pictures/" . $imageName;
                echo '<img class="m-5 rounded-3xl border-4 border-yellow-500" src="' . $imagePath . '" alt="Image ' . $c . '">';
            }
        }
        */

        public function VypisII() : void {
            foreach($this->Nacti() as $pic) {
                // In linux must use if statement for "." and ".."
                $statement = strpos($pic, ".jpg");
                if ($statement == true) {
                    $imagePath = "./pictures/" . $pic;
                    echo '
                        <img 
                            class="m-5 
                                rounded-3xl 
                                border-4 
                                border-yellow-500
                            " 
                            src="' . $imagePath . '" 
                            alt="Image ' . $pic . '"
                        >
                    ';
                }
            }
        }
    }
?>