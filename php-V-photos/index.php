<?php
    require "./classes/class.php";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>
            Galerie
        </title>
    </head>
    <body
        class="
            p-6
            bg-red-600
        "
    >
        <h1
            class="
                text-center
                text-4xl
                font-bold
                mb-5
            "
        >
            Galerie
        </h1>
        <div
            id="galerie"
        >
            <?php
                /*
                // Sand folder path
                $dir = "./pictures/";
                // Scaning directory
                $files1 = scandir($dir);
                // for test print files
                // print_r($files1);

                // printing pictures to website
                for($c = 0; $c < sizeof($files1)-2; $c++) {
                    $imageName = $c . ".jpg";
                    $imagePath = "./pictures/" . $imageName;
                    echo '<img class="p-4 rounded-3xl" src="' . $imagePath . '" alt="My Image ' . $c . '">';
                }
                */

                $galerie = new FileDirectory("./pictures/");

                // echo $galerie->Vypis();

                echo $galerie->VypisII();
            ?>
        </div>
    </body>
</html>