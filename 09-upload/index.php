<?php
    function AutoloadClasses($class) {
        require 'tridy/' . $class . '.php';
    }

    spl_autoload_register("AutoloadClasses");
?>

<!DOCTYPE html>
<html lang="cs-cz">
    <head>
        <meta charset="utf-8" />
        <title>Galerie</title>
        <style>
            *{
                font-family: Arial, sans-serif
            }

            .form {
                margin: 15px 0;
                padding: 5px;
                max-width: 400px;
                background-color: #eee;
                border: 1px solid #ccc
            }

            input{
                background-color: #fff;
                padding: 5px;
            }

            .button{
                background-color: brown;
                color: white;
                border: 0
            }
        </style>
    </head>
    <body>
        <h1>Galerie s uploadem obrázků a souborů</h1>
        <?php
            if (isset($_FILES['fileToUpload'])) {
                $file = new UploadImage($_FILES['fileToUpload'], 'images/');

                if (!$file->checkFile()) {

                    $file->showErrors();
                } else {

                    $file->moveFile();

                    $uploadedImage = $file->getUploadedFilePath();
                    // echo $uploadedImage;

                    
                    echo '<p style="color:green">'
                    . 'Soubor se v pořádku nahrál na server. '
                    . '<a href="' . $uploadedImage . '" target="_blank">Otevřít</a>'
                    . '</p>';

                    $thumb = new ImageThumb($uploadedImage);
                    $thumb->createThumb('images/' . $file->getUploadedFileName() . '_nahled.jpg');
                }
            }
        ?>
        <div class="form" >
            <fieldset>
                <legend>Vyberte soubor, který chcete nahrát:</legend>
                <form 
                    action = "index.php" 
                    method = "post" 
                    enctype = "multipart/form-data"
                >
                    <p>
                        <input type = "file" name = "fileToUpload" required>
                        <input class="button" type = "submit" value = "Upload Image" name = "Nahrát">
                    </p>
                </form >
            </fieldset>
        </div>
        <?php
            $galerie = new Galerie('images', 3);

            $galerie->nacti();

            $galerie->vypis();
        ?>
    </body>
</html>