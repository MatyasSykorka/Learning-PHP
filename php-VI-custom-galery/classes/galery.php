<?php
    class fileDir {
        private string $Adresar;
        private int $Sloupce;
        private int $Radky;

        public string $AdresarFullPic = "./myPic/full-size/";

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
                        <a
                            href="' . $this->AdresarFullPic . $pic .'"
                        >
                            <img 
                                class=" 
                                    rounded-2xl 
                                    border-4 
                                    border-red-600
                                    size-auto
                                    mb-3
                                " 
                                src="' . $imagePath . '" 
                                alt="Image ' . $pic . '"
                            >
                        </a>
                    ';
                }
            }
        }

        public function Vypis() : void {
            echo '
                <div
                    class="
                        pt-4
                        pb-7
                        pl-3
                        pr-3
                        ml-auto
                        mr-auto
                        justify-center
                        place-items-center
                        bg-gray-100
                        grid
                        grid-cols-'. $this->Sloupce .'
                        grid-rows-'. $this->Radky .'
                        border-4
                        border-black
                        rounded-3xl
                        w-3/4
                        mt-8
                    "
                >';
                    $this->Vystup();
                echo '</div>';
            
        }
    }
?>