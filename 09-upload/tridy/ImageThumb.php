<?php
    class ImageThumb {
        private $image;

        public function __construct($sourceImagePath) {
            $this->image = $sourceImagePath;
        }

        public function createThumb($destImagePath, $thumbWidth = 160) : void {
            $sourceImage = imagecreatefromjpeg($this->image);

            $orgWidth = imagesx($sourceImage);

            $orgHeight = imagesy($sourceImage);

            $thumbHeight = floor($orgHeight * ($thumbWidth / $orgWidth));

            $destImage = imagecreatetruecolor($thumbWidth, $thumbHeight);

            imagecopyresampled($destImage, $sourceImage, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $orgWidth, $orgHeight);

            imagejpeg($destImage, $destImagePath);

            imagedestroy($sourceImage);

            imagedestroy($destImage);
        }
    }
?>