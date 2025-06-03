<?php
    include "./classes/DopravniProstredek.php";
    include "./classes/Car.php";
    include "./classes/Plane.php";
    include "./classes/Bike.php";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doprava</title>
    </head>
    <style>
        body {
            background-color: #5f5f5f;
            text-align: center;
        }
    </style>
    <body>
        <h1>
            <strong>
                <u>
                    Dopravní stroje a jejich popis
                </u>
            </strong>
        </h1>

        <?php
            $car = new Car("túúút", "Auto", 80, "Škoda");
            $plane = new Plane("fúúúú", "letadlo", 700, "Boeing");
            $bike = new Bike("crrr, crrr", "kolo", 10, "Bootie");
            
            $pole = array($car, $plane, $bike);

            foreach ($pole as $stroj) {
                $stroj->Popis();
                echo '<br>';
                $stroj->Sound();
                echo '<br>';
                echo '<br>';
            }

        ?>
    </body>
</html>