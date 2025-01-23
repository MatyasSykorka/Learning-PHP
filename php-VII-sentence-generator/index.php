<?php
    require "./classes/generator.php";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/style.css">
        <title>Generator of random sentences</title>
    </head>
    <body>
        <h1>
            Generator
        </h1>
        <div
            class=""
        >
            <form 
                method="post"
                action=<?php
                    echo $_SERVER['PHP_SELF'];
                ?>
            >
                <label
                    for="length"
                >
                    Počet vět
                </label>
                <br>
                <input
                    type="number"
                    name="length"
                    value= <?= (isset($_POST["length"]) ? $_POST["length"] : ""); ?>
                >
                <br>
                <label
                    for="numofsen"
                >
                    Kolik řádků vět
                </label>
                <br>
                <input
                    type="number"
                    name="numofsen"
                    value= <?= (isset($_POST["numofsen"]) ? $_POST["numofsen"] : ""); ?>
                >

                <br><br>

                <button
                    type="submit"
                >
                    Generovat
                </button>
            </form>
        </div>
        <div
            class="check"
        >
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $delka = (int)$_POST['length'];
                    $pocet = (int)$_POST['numofsen'];

                    /*
                    // for debug stuff

                    var_dump($delka);
                    var_dump($pocet);
                    */

                    if($delka < 1 || !$delka) {
                        echo "
                            <div
                                class='errorI'
                            >
                                <p>
                                    Neznámý počet slov!
                                </p>
                            </div>
                        ";
                    }

                    if($pocet < 1 || !$pocet) {
                        echo "
                            <div
                                class='errorII'
                            >
                                <p>
                                    Neznámý počet vět!
                                </p>
                            </div>
                        ";
                    }
                }
            ?>
        </div>
        <div
            class="opt"
        >
            <?php
                $generovat = new Gen($delka, $pocet);
                echo $generovat->vystup();
            ?>
        </div>
    </body>
</html>