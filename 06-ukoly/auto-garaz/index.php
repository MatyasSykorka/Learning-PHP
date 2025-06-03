<?php
    require "classes/car.php";
    require "classes/garaz.php";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Auta a garáže</title>
    </head>
    <body
        class="
            pt-5
            pl-5
            pr-5
            pb-10
        "
    >
        <h1
            class="
                text-4xl
                font-bold
                text-center
                pb-4
            "
        >
            Jaké auto je v garáži?
        </h1>

        <div>
            <?php
                (string)$znacka = "Ford";
                (string)$bar = "zelený";
                (string)$Tspz = "A4S 4556";
                (string)$velikostA = "B";

                $A = new Car(
                    $znacka, 
                    $bar, 
                    $Tspz, 
                    $velikostA
                );
                $G = new Garaz();

                // echo $A;                

                $A->zaparkuj($G);

                echo $G;
            ?>
        </div>
    </body>
</html>