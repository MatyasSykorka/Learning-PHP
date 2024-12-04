<?php
    require ("./classes/class.php");
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Příprava na test PHP
        </title>
    </head>
    <body>
        <h1>
            Základy OOP v PHP
        </h1>
        <div
            id="Example"
        >
            <?php
                echo "<h3>Člověk</h3>";
                $Matyas = new Clovek("Matyáš", "Sýkora", 19);

                $Matyas->vystup();
                
                echo $Matyas;

                echo "<h3>Foreach</h3>";

                $array = array(0, 1, 2, 3);
                foreach ($array as $x) {
                    echo $x . '<br>';
                }
            ?>
        </div>
    </body>
</html>