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

        private function nacist() : array {
            return scandir($this->Adresar);
        }

        public function Vystup() : void {
            foreach($this->Nacist() as $pic) {
                // In linux must use if statement for "." and ".."
                $statement = strpos($pic, ".jpg");
                if ($statement == true) {
                    $imagePath = $this->Adresar . $pic;
                    echo '
                        <div
                            class="
                                
                            "
                        >
                            <img 
                                class="
                                    m-5 
                                    rounded-3xl 
                                    border-4 
                                    border-yellow-500
                                " 
                                src="' . $imagePath . '" 
                                alt="Image ' . $pic . '"
                            >
                        </div>
                    ';
                }
            }
        }
    }
?>