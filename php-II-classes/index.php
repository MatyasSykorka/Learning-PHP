<?php
    include "Clovek/Clovek.php";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>
            Třídy v PHP
        </title>
        <style>
            body {
                text-align: center;
                background-color: whitesmoke;
            }
            h1 {
                padding-top: 12px;
                font-size: 36px;
            }
        </style>
    </head>
    <body>
        <h1>
            Třídy a objekty
        </h1>
        <?php
            echo "Test code: OK<br><br>";
        ?>
        <?php
            // tvorba "osoby"
            $pepa = new Clovek();
            $pepa->jmeno = "Josef";
            $pepa->prijmeni = "Motyčka";
            $pepa->vek = 19;
            
            $pepa->pozdrav();
            $pepa->jemi();

            // tvorba další osoby
            $person = new Clovek();
            $person->jmeno = "Matyáš";

            $person->pozdrav();

            /*
            print_r($pepa);
            print_r($person);
            */
        ?>
    </body>
</html>