<?php
    class fileDir {
        public string $Adresar;
        public int $Sloupce;
        public int $Radky;

        public function __construct(
            private string $path, 
            private int $colums, 
            private int $raws
        ) {
            $this->Adresar = $path;
            $this->Sloupce = $colums;
            $this->Radky = $raws;
        }

        private function Nacist() : array {
            return scandir($this->Adresar);
        }

        public function Vystup() : void {
            foreach($this->Nacist() as $pic) {
                // In linux must use if statement for "." and ".."
                $statement = strpos($pic, ".jpg");
                if ($statement == true) {
                    $imagePath = $this->Adresar . $pic;
                    echo '
                        <img 
                            class=" 
                                rounded-3xl 
                                border-4 
                                border-yellow-500
                                size-auto
                            " 
                            src="' . $imagePath . '" 
                            alt="Image ' . $pic . '"
                        >
                    ';
                }
            }
        }

        public function Vypis() : void {
            echo '
                <div
                    class="
                        pt-4
                        pr-2
                        pl-2
                        pb-7
                        bg-gray-100
                        block
                        grid
                        grid-cols-'. $this->Sloupce .'
                        grid-rows-'. $this->Radky .'
                        border-4
                        border-black
                        rounded-xl
                    "
                >';
                    $this->Vystup();
                echo '</div>';
            
        }
    }
?>