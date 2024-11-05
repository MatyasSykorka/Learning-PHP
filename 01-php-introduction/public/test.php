<!-- 

PHP test code.

<?php
// types of varriables
(int)$cisla = 4;
(string)$textNeboZnak = "php bude pain";
(bool)$bool = true;

(array)(int)$pole = array(1, 12, 3, 54, 7, 78, 71, 100); // creating new array with ints

$pole[] = 1000000; // adding new value to array
for ((int)$i = 0; $i < sizeof($pole); $i++) {
    echo "$i. hodnota je $pole[$i]"; // printing values
}

foreach ($pole as $key => $value) {
    echo "Hodnota " . $value . '<br>';
}

var_dump($cisla); // vypíše obsah proměné

echo count($pole);

function funkce($a, $b): int
{
    return $a + $b;
}
?>

-->

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href=output.csss>
    <title>
        PHP test
    </title>
</head>

<body
    class="
            bg-red-600 
            text-black
            text-center
        ">
    <h1
        class="
                text-5xl
                mt-5
                mb-10
                font-bold
            ">
        Hello there!
    </h1>
    <div
        class="
                border-4
                border-black
                border-solid
                rounded-3xl
                bg-gray-100
                ml-auto
                mr-auto
                justify-center
                w-4/5
                pt-5
                pb-5
            ">
        <?php
        echo "<strong>Zdravím tě!</strong><br>";
        echo "Dnešní datum: <strong>" . date('d.m.y') . "</strong><br><br><br>";
        $i = 10;
        $txt = "<strong>Random text:</strong> <br><br>";
        echo "$txt";
        for ($i = 0; $i < 10; $i++) {
            $rd = random_int(0, 10);
            if ($rd >= 5) {
                echo "Hi Maty! <br>";
            } else {
                echo "Hi, Matygamicz! <br>";
            }
        }
        echo "<br><br><br>";
        echo "Bude PHP fajn?";
        ?>
    </div>

    <div
        class="
                bg-white
                border-solid
                border-black
                border-4
                rounded-3xl
                ml-auto
                mr-auto
                mt-4
                mb-16
                w-1/2
                pt-3
                pb-5
                pr-2
                pl-2
            ">
        <?php
        (array)(int)$pole = array(1, 12, 3, 54, 7, 78, 71, 100);

        echo "Vypíše obsah proměné s pomocí var_dump()" . var_dump($pole) . "<br><br>";

        $pole[] = 1000000;
        for ((int)$i = 0; $i < sizeof($pole); $i++) {
            echo "$i. hodnota je <strong> $pole[$i] </strong><br>";
        };
        ?>
    </div>
    <form
        method="post"
        class="
                items-center
                flex-col-reverse
                justify-center
                mb-20
            ">
        <label>Jméno:</label>
        <input type="text" name="name" value="">
        <br>
        <label>Příjmení:</label>
        <input type="text" name="surname" value="">
        <br>
        <button
            type="submit"
            value="Send">
            Potvrdit
        </button>
    </form>
    <?php
    if (isset($_POST)) {

        var_dump($_POST);
    }
    ?>

</body>

</html>