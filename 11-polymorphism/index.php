<?php
    include "./classes/animal.php";
    include "./classes/shapes.php";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta 
            name="viewport" 
            content="width=device-width, initial-scale=1.0"
        >
        <title>
            Polymorphism
        </title>
    </head>
    <body>
        <h1>
            Test polymorphism
        </h1>
        <?php
            /*
            echo "<strong>Echo test</strong>";

            echo '<br>';
            echo '<br>';
            echo '<br>';
            */

            function space(string $name) {
                echo "
                    <br>
                    <br>
                    <br>
                        <strong>
                            * --------------------- $name ---------------------- *
                        </strong>
                    <br>
                    <br>
                ";
            }
            space("Animals");


            $dog = new Dog();
            $snake = new Snake();
            $horse = new Horse();


            itMakeSound($dog);
            echo '<br>';

            itMakeSound($snake);
            echo '<br>';

            itMakeSound($horse);


            space("Shapes");


            $circle = new Circle();
            $square = new Square();
            $hexagon = new Hexagon();


            renderShape($circle);
            echo '<br>';

            renderShape($square);
            echo '<br>';

            renderShape($hexagon);


        ?>
    </body>
</html>