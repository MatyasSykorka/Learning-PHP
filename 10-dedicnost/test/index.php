<?php
    include "./classes/zvire.php";
    include "./classes/kocicka.php";
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test dedicnosti</title>
    </head>
    <style>
        body {
            background-color: darkslategray;
        }
    </style>
    <body>
        <?php
            $kocka = new Kocicka(jmeno: "Alfred");
                
            $kocka->meow();
            echo "<br>";
            $kocka->pozdrav();
            echo "<br>";
            $kocka->pozdravII();
        ?>
    </body>
</html>
