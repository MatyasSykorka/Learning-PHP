<?php
    include "./classes/class.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta 
            charset="UTF-8"
        >
        <meta 
            name="viewport" 
            content="width=device-width, initial-scale=1.0"
        >
        <title>
            Graphic editor by Maty
        </title>
    </head>
    <body>
        <h1>
            "Graphic editor"
        </h1>
        <?php
            // echo "Echo test";

            echo "Rendered shapes:";
            echo "<br><br>";

            foreach ([
                new Circle(5),
                new Rectangle(4, 6),
                new Triangle(3, 4)
            ] as $shape) {
                echo "Shape area: <strong>" . $shape->output() . "</strong>";
                echo '<br>';
            }
        ?>
    </body>
</html>
