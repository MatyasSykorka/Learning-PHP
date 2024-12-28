<?php
    class Upload {
        public $CelySoubor;
        public $Path;
        public $NewFile;

        // konstruktor, vkládáme cestu a soubor
        public function __construct(
            public $Cesta, 
            public $Soubor
        ) {
            $this->Path = $Cesta;
            $this->NewFile = $Soubor;
        }

        // Kontrola nahraného souboru
        private function CheckFile() {
            // Sestrojení celého souboru
            $this->CelySoubor = $this->Cesta . basename($this->Soubor);
            /* var_dump($this->CelySoubor); */

            // Kontrola jestli je náš soubor typu obrázek 
            $ObrTypSouboru = strtolower(pathinfo($this->CelySoubor,PATHINFO_EXTENSION));
            
            

            if ($_FILES["FileToUpload"]["error"] === UPLOAD_ERR_OK) {
                $kontrola = getimagesize($_FILES["FileToUpload"]["tmp_name"]);
                $uploadOK = 0;
            
                // je soubor typu obrázek?
                if($kontrola !== false) {
                    echo "Soubor je obrázek - " . $kontrola["mime"] . ".";
                    $uploadOK = 0;
                }
                else {
                    echo "Soubor není obrázkový.";
                    $uploadOK = 1;
                }
            }
            else {
                echo "Žádný soubor nebyl nahrán.";
                $uploadOK = 4;
            }

            // zjistíme zda obrázek není velikostí na úložný prostor větší než 3MB
            if ($_FILES["FileToUpload"]["size"] > 3000000) {
                echo "Obrázek je až moc velký!";
                $uploadOK = 2;
            }

            // Zjistíme jakou příponu má obrázek
            if(
                $ObrTypSouboru != "jpg" 
                && $ObrTypSouboru != "png" 
                && $ObrTypSouboru != "jpeg" 
                && $ObrTypSouboru != "gif" 
            ) {
                echo "Pouze JPG, JPEG, PNG & GIF formáty jsou povolené.";
                $uploadOK = 4;
            }

            // Zjistíme zda-li existuje
            if (file_exists($this->CelySoubor)) {
                echo "Soubor na serveru existuje.";
                $uploadOK = 3;
            }
            else {
                echo "Soubor na serveru NEexistuje";
                $uploadOK = 5;
            }

            $uploadOK;
        }

        // Funkce pro výstup všech chyb
        public function ErrorCodes() {
            if($this->CheckFile() == 1) {

            }
        }

        // Funkce pro nahrání obrázku
        public function UploadNewImage() {
            // Podle výstupu funkce se rozhodne zda-li obrázek se odešle, či ne.
            if($this->CheckFile() == 0) {
                if (move_uploaded_file($_FILES["FileToUpload"]["tmp_name"], $this->CelySoubor)) {
                    echo "Obrázek " . htmlspecialchars(basename($this->Soubor)) . " se úspěšně nahrál na server!";
                }
                /*
                else {
                    echo "Omlouvám se, během nahrávání nastala chyba.";
                }
                */
            }
            /*
            else {
                echo "Obrázek se nemůže nahrát!";
            }
            */
        }
    }
?>