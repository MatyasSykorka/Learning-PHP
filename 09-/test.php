<?php
    include "./classes/human-class.php";
    include "./classes/coder-class.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            Test php
        </h1>
        <?php
            $a = 5;
            echo $a . '<br>';
            $b = $a;
            echo $b . '<br>';

            $a++;
            echo $a;


            $zalomeni = "<br><br>----------------------------------------------<br><br>";
            echo $zalomeni;


            $aa = [2, 4, 6];
            // print_r($aa);
            echo '<br>';
            
            $ab = $aa;
            // print_r($ab); 
            echo '<br>';

            $ac[3] = 8;
            // print_r($ac);


            echo $zalomeni;


            $clovek = new Person("Maty", "Syk", 19, 20);
            echo $clovek->Output();
            echo $clovek->get_name();
            $clovek->set_name("Jeff");
            echo $clovek->get_name();

            echo '<br>';

            echo $clovek->Output();
            
            echo $zalomeni;


            echo "Po spánku má energii<br>";
            echo $clovek->sleep(1);

            echo "<br><br>";

            echo "Po běhu 1 km má energie<br>";
            echo $clovek->run(1);

            echo '<br>';

            echo 'Po dalším běhu 1 km má energie<br>';
            echo $clovek->run(1);


            echo $zalomeni;


            $clovekII = new Person("Radim", "Kov", 30, 20);
            echo $clovekII->Output();
            

            echo $zalomeni;


            $pole[] = [ 1, 2, 3, 5 ];

            // z na referenční
            function addItem(array &$pole, mixed $item) {
                $pole[] = $item;
            }

            addItem($pole, 55);
            // $pole[4] = $item;

            print_r($pole);


            echo $zalomeni;


            $Prg = new Coder("Matyas", "Sykorka", 19, 20, "C++");

            echo $Prg->Output();
            echo $Prg->code(3);

            echo '<br>';

            echo $Prg->OutputPrg();

        ?>
    </body>
</html>