<?php
    require "./classes/galery.php";
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
            id="gallery"
        >
            <?php
                $Obrazky = new fileDir("./pictures/preview/", 5, 0);

                echo $Obrazky->Vypis();
            ?>
        </div>
    </body>
</html>