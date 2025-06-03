<?php
    include "./classes/vehiclesII.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta 
            name="viewport" 
            content="width=device-width, initial-scale=1.0"
        >
        <title>
            Pol. work
        </title>
    </head>
    <body>
        <h1>
            Polymorphism work
        </h1>
        <?php
            // echo "Echo test";

            function seperate() {
                echo "<hr>";
                echo "<br>";
            }
            seperate();

            $vehicles = [
                $carII = new CarII(),
                $bikeII = new BikeII(),
                $plane = new PlaneII()
            ];

            foreach ($vehicles as $print_Vehicles) {
                echo "<strong>" . $print_Vehicles->move() . "</strong>";
                echo '<br>';
            }

            seperate();

        ?>
    </body>
</html>