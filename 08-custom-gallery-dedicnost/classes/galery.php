<?php
    class fileDir {
        private string $Adresar;
        private int $Sloupce;
        private int $Radky;

        public string $AdresarFullPic = "./pictures/full-size/";

        /* 
        Konstruktor přijímá: 
            - cestu k načtení souborů
            - kolik sloupců
            - kolik řádků 
        
        */ 
        public function __construct(
            private string $path, 
            private int $colums, 
            private int $raws
        ) {
            $this->Adresar = $path;
            $this->Sloupce = $colums;
            $this->Radky = $raws;
        }

        // Načte adresář z konstruktora
        private function Nacist() : array {
            return scandir($this->Adresar);
        }

        // Načte soubory z metody @this->Nacist() a zobrazí se na webové stránce 
        public function Vystup() : void {
            foreach($this->Nacist() as $pic) {
                // In linux filesystem must use if statement for "." and ".."
                
                // Zjistí příponu obrázku
                if(strpos($pic, ".jpg") == true) {
                    $statement = true;
                }
                else if(strpos($pic, ".png") == true) {
                    $statement = true;
                }
                else if(strpos($pic, ".jpeg") == true) {
                    $statement = true;
                }
                else if(strpos($pic, ".gif") == true) {
                    $statement = true;
                }
                else {
                    $statement = false;
                }
                
                // Pokud bude shoda s podmínkou @statement, zobrazí se obrázek na webovou stránku
                if ($statement == true) {
                    $imagePath = $this->Adresar . $pic;
                    echo '
                        <a
                            href="' . $this->AdresarFullPic . $pic .'"
                        >
                            <img 
                                class=" 
                                    rounded-xl 
                                    border-4 
                                    border-red-600 hover:border-purple-800
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

        // Vytvoří tabulku pro umístění fotek a obrázků 
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
                        mt-4
                        shadow-2xl
                    "
                >'
            ;
                $this->Vystup();
            echo '</div>';
        }
    }
?>