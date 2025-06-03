<?php
    class Upload {
        // Odešle obrázek do funkce checkFile, pokud bude úšpěšný odešle se na server 
        public function uploadFile($file) {
            $this->checkFile($file);
            $this->moveFile($file);
        }
    
        public $allowedExtensions = [
            'jpg', 
            'jpeg', 
            'png', 
            'gif',
            'pdf',
            'docx',
            'doc',
            'xlsx',
            'xls',
            'ppt',
            'pptx'
        ];

        // Funkce kontroly ...
        protected function checkFile($file) {
            $this->Extension($file['name']);
            $this->Size($file['size']);
            $this->IfExists($file['name']);
        }
    
        // Kontrola přípony 
        protected function Extension($filename) {
            $kontrolakoncovky = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array(strtolower($kontrolakoncovky), $this->allowedExtensions)) {
                throw new Exception("Není soubor nebo nepodporovaný formát souboru. Lze jpg, png, jpeg, gif!");
                // throw new UserExeption("Error message");
            }
        }
    
        // Kontrola velikosti souboru (MB)
        protected function Size($size) {
            if ($size > $this->maxFileSize) {
                throw new Exception("Soubor je příliš velký. Maximální velikost je 3MB!");
            }
        }
    
        // Zkontroluje, zda na serveru jsou stejné soubory
        protected function IfExists($filename) {
            if (file_exists("pictures/full-size/" . $filename)) {
                throw new Exception("Soubor již existuje!");
            }
        }
        
        // Odešle obrázek na server
        protected function moveFile($file) {
            move_uploaded_file($file['tmp_name'], "./pictures/full-size/" . $file['name']);
            // throw new Exception("Obrázek byl úspěšně odeslán.");
        }
    }
?>

