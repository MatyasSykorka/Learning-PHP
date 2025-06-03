<?php
    class Upload {
        protected array $validExtensions = [
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
            'pptx',
            'webp'
        ];

        protected int $maxFileSize = 2097152;
        private array $uploadErrors = [];
        private string $file_name;
        private int $file_size;
        private string $file_tmp;
        // private string $file_type;
        private string $file_extension;

        public function __construct($sourceFile, private string $destination = "images/") {
            $this->file_size = $sourceFile['size'];
            $this->file_tmp = $sourceFile['tmp_name'];
            // $this->file_type = $sourceFile['type'];

            $this->setFileNameAndExtension($sourceFile['name']);
        }

        protected function setFileNameAndExtension(string $fileNameWithExtension): void {
            $nameParts = explode('.', $fileNameWithExtension);
            $extension = strtolower(array_pop($nameParts));
            $name = str_replace(' ', '-', strtolower(implode('.', $nameParts)));
            $this->file_name = $name;
            $this->file_extension = $extension;
        }

        public function checkFile(): bool {
            if (in_array($this->file_extension, $this->validExtensions) === false) {

                $this->uploadErrors[] = 'Typ souboru není povolen, povolen je pouze typ ' . implode(' nebo ', $this->validExtensions) . ' file.';
            }

            if ($this->file_size > $this->maxFileSize) {

                $this->uploadErrors[] = 'Velikost souboru je povolena maximálně na ' . $this->maxFileSize . ' Bajtů';
            }

            return empty($this->uploadErrors) ? true : false;
        }

        public function showErrors(): void {
            foreach ($this->uploadErrors as $error) {

                echo '<p style="color:red">' . $error . '</p>';
            }
        }

        public function moveFile(): void {
            move_uploaded_file($this->file_tmp, $this->destination . '/' . $this->file_name . '.' . $this->file_extension);
        }

        public function getUploadedFilePath(): string {
            return $this->destination . $this->file_name . '.' . $this->file_extension;
        }

        public function getUploadedFileName(): string {
            return $this->file_name;
        }

    }
?>