<?php
    class ThumbI {
        private $source;
        
        // konstruktor přijímá cestu originálního obrázku
        public function __construct($sourceImgPath) {
            $this->source = $sourceImgPath;
            // var_dump($this->source);
        }
            
        // funkce, která vytváří malý duplikát obrázku
        public function createThumb($destImagePath, $thumbWidth=160) {
            // Na základě přípony vytvoří duplikát originálního obrázku
            $extension = strtolower(pathinfo($this->source, PATHINFO_EXTENSION));
            switch ($extension) {
                case 'jpg':
                case 'jpeg':
                    $sourceImage = imagecreatefromjpeg($this->source);
                    break;
                case 'png':
                    $sourceImage = imagecreatefrompng($this->source);
                    break;
                case 'gif':
                    $sourceImage = imagecreatefromgif($this->source);
                    break;
                default:
                    return;
            }
            
            // převezme "dymenze"/rozměry originílního obrázku
            $orgWidth = imagesx($sourceImage);
            $orgHeight = imagesy($sourceImage);
            // var_dump($orgHeight);

            // vypočítá novou výšku pro náhledový obrázek
            $thumbHeight = floor($orgHeight * ($thumbWidth / $orgWidth));
            
            // vytvoří nový menší obrázek jako náhledový obrázek
            $destImage = imagecreatetruecolor($thumbWidth, $thumbHeight);
            imagecopyresampled(
                $destImage,                         
                $sourceImage, 
                0, 0, 0, 0, 
                $thumbWidth, 
                $thumbHeight, 
                $orgWidth, 
                $orgHeight
            );
            
            // Funkce se vyčistí po vykonání
            imagejpeg($destImage, $destImagePath);
            imagedestroy($sourceImage);
            imagedestroy($destImage);
        }
    }
?>