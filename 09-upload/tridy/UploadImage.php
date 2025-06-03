<?php
    class UploadImage extends Upload {
        public function __construct(
            $sourceFile, 
            $destination = "images/"
        ) {
            parent::__construct($sourceFile, $destination);
            $this->validExtensions = ["jpg"];
        }
    }
?>
