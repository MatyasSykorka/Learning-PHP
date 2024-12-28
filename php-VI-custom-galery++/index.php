<?php
    require "./classes/galery.php";
    require "./classes/Upload.php";
    require "./classes/ImageThumb.php";
    // echo "test";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Gallery</title>
    </head>
    <body
        class="
            bg-violet-400
            p-4
        "
    >
        <h1
            class="
                text-4xl
                text-center
                font-bold
            "
        >
            Gallery
        </h1>

        <div
            id="upload form"
            class="
                pt-3
                pb-7
                pl-2
                pr-2
                ml-auto
                mr-auto
                mt-8
                w-3/4
                bg-gray-100
                border-black
                border-4
                rounded-3xl
                text-center
            "
        >
            <form  
                method="post"
                enctype="multipart/form-data"
            >
                <label
                    class="
                        font-bold
                        text-xl
                    "
                >
                    Nahraj obrázek
                </label>
                <br>
                <div
                    class="
                        border-gray-500
                        bg-gray-300
                        h-10
                        w-2/3
                        m-auto
                        rounded-xl
                        content-center
                    "
                >
                    <input 
                        type="file"
                        name="FileToUpload"
                        id="FileToUpload"
                    >
                    <input 
                        type="submit" 
                        value="Nahrát obrázek"
                        name="submit" 
                        class="
                            border-2 hover:border-1
                            border-black
                            rounded
                            hover:font-bold
                            bg-gray-500 hover:bg-green-400
                            text-white hover:text-black
                        "
                    >
                </div>
                
            </form>
        </div>

        <div
            id="gallery"
        >
            <?php
                if(isset($_POST["submit"])) {
                    // kam se obrázky budou odesílat
                    $path = "./pictures/full-size/";
                    
                    // souboru a jeho vlastnosti
                    $file = $_FILES["FileToUpload"]["name"];

                    // var_dump($path);
                    // var_dump($file);

                    
                    // Odešleme do třídy cestu k nahrání a soubor
                    $Odeslat = new Upload($path, $file);
                    
                    // echo $Odeslat->CheckFile();
                    $Odeslat->UploadNewImage();
                    echo $Odeslat->ErrorCodes();
                }

                $Obrazky = new fileDir("./pictures/preview/", 5, 0);

                echo $Obrazky->Vypis();
            ?>
        </div>
    </body>
</html>