<?php
    // require ("classes/testClass.php");

    /*
    Nastavení funkce k ověření a načítání tříd v tomto projektu
    */
    function autoloadClasses(string $class) {
        if(file_exists("classes/" . $class . ".php")) {
            require ("classes/". $class . ".php");
        }
        else {
            echo "class " . $class . " not exist";
        }
    }

    /*
    registrace vlastní funkce
    */
    spl_autoload_register("autoloadClasses");
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="style.css">
        <title>
            Test
        </title>
    </head>
    <body
        class="
            bg-blue-500
            text-center
        "
    >
        <h1
            class="
                pt-20
                text-5xl
                font-bold
            "
        >
            (:
        </h1>
            <div
                class="
                    mt-7
                    border-4
                    border-red-600
                    rounded-xl
                    w-1/2
                    ml-auto
                    mr-auto
                "
            >
                <?php
                    $clovek = new Clovek("Maty", "Syk", 19);
                    // $clovek -> name = "Maty";
                    // $clovek -> surname = "Syk";
                    // $clovek -> age = 19;
                    $clovek -> PublicHi();
                    /*
                    // Nemůže změnit jméno 

                    $clovek->name = "Josef";
                    
                    */
                    echo $clovek;
                ?>
            </div>
    </body>
</html>