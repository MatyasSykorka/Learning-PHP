<?php
    class Upload {
        // proměnná obsahující názvy přípon
        private $allowedExtensions = [
            'jpg', 
            'jpeg', 
            'png', 
            'gif'
        ];

        private $maxFileSize = 3 * 1024 * 1024; // 3MB
    
        // Odešle obrázek do funkce checkFile, pokud bude úšpěšný odešle se na server 
        public function uploadImage($file) {
            $this->checkFile($file);
            $this->moveFile($file);
        }
    
        // Funkce kontroly ...
        private function checkFile($file) {
            $this->Extension($file['name']);
            $this->Size($file['size']);
            $this->IfImage($file['tmp_name']);
            $this->IfExists($file['name']);
        }
    
        // Kontrola přípony 
        private function Extension($filename) {
            $kontrolakoncovky = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array(strtolower($kontrolakoncovky), $this->allowedExtensions)) {
                throw new Exception("Není soubor nebo nepodporovaný formát souboru. Lze jpg, png, jpeg, gif!");
            }
        }
    
        // Kontrola velikosti obrázku (MB)
        private function Size($size) {
            if ($size > $this->maxFileSize) {
                throw new Exception("Soubor je příliš velký. Maximální velikost je 3MB!");
            }
        }
    
        // Kontroluje zda je soubor opravdu obrázek
        private function IfImage($tmpName) {
            if (!getimagesize($tmpName)) {
                throw new Exception("Soubor není obrázkový!");
            }
        }
    
        // Zkontroluje, zda na serveru jsou stejné obrázky
        private function IfExists($filename) {
            if (file_exists("pictures/full-size/" . $filename)) {
                throw new Exception("Soubor již existuje!");
            }
        }
        
        // Odešle obrázek na server
        private function moveFile($file) {
            move_uploaded_file($file['tmp_name'], "./pictures/full-size/" . $file['name']);
            // throw new Exception("Obrázek byl úspěšně odeslán.");
        }
    }
?>