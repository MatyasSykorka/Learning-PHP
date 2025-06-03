<?php
    class UploadImage2 extends Upload {
        /*
        konstruktor převezme
            cestu kam se obrázek bude nahrávat a kontrolovat,
            soubor jako takový            
        */
        public function __construct(
            /*filePath,  */
        ) {
            
        }


        // proměnná obsahující názvy přípon
        

        private $maxFileSize = 3 * 1024 * 1024; // 3MB
    
        // Odešle obrázek do funkce checkFile, pokud bude úšpěšný odešle se na server 
        public function uploadFile($file) {
            $this->checkFile($file);
            $this->moveFile($file);
        }
    
        // Funkce kontroly 
        private function checkFile($file) {
            $this->IfImage($file['tmp_name']);
        }
    
        // Kontrola přípony 
        private function Extension($filename) {
            $kontrolakoncovky = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array(strtolower($kontrolakoncovky), $this->allowedExtensions)) {
                throw new Exception("Není soubor nebo nepodporovaný formát souboru. Lze jpg, png, jpeg, gif!");
                // throw new UserExeption("Error message");
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
    }
?>