<?php
    require "./classes/generator.php";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/style.css">
        <title>
            Generátor náhodných vět
        </title>
    </head>
    <body>
        <h1>
            Generator vět
        </h1>

        <form 
            method="POST"
            action=<?php
                echo $_SERVER['PHP_SELF'];
            ?>
        >
            <label for="length">
                Počet vět
            </label>
            <br>
            <input
                type="number"
                name="length"
                value= <?= (isset($_POST["length"]) ? $_POST["length"] : ""); ?>
            >
            <br>
            <label for="numofsen">
                Odstavce
            </label>
            <br>
            <input
                type="number"
                name="numofsen"
                value= <?= (isset($_POST["numofsen"]) ? $_POST["numofsen"] : ""); ?>
            >

            <br><br>
            
            <button type="submit">
                Generovat
            </button>
        </form>

        <div class="check">
            <?php
                // registrace metody POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $delka = (int)$_POST['length'];
                    $pocet = (int)$_POST['numofsen'];

                    /*
                    // for debug stuff

                    var_dump($delka);
                    var_dump($pocet);
                    */

                    // kontrola vstupu uživatele a informovat ho o možnostech
                    if($delka < 1 || $delka > 100 || !$delka) {
                        echo '
                            <div class="error">
                                <p>
                                    Neznámý počet vět na řádek! Můžeš generovat 1-100 vět.
                                </p>
                            </div>
                        ';
                        return;
                    }

                    if($pocet < 1 || $odstavce > 100 || !$pocet) {
                        echo '
                            <div class="error">
                                <p>
                                    Neznámý počet odstavců! Můžeš generovat 1-100 odstavců.
                                </p>
                            </div>
                        ';
                        return;
                    }
                }
            ?>
        </div>
        <div class="opt">
            <?php
                // co se na stránku vygeneruje
                $generovat = new Gen($delka, $pocet);
                echo $generovat->vystup();
            ?>
        </div>
    </body>
</html>








<!-- Github: https://github.com/MatyasSykorka -->
 