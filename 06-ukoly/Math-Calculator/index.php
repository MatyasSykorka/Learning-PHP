<?php
    require ("classes/ClassMath.php");
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kalkulačka</title>
    </head>
    <body>
        <h1>
            Objektová kalkulačka
        </h1>
        <div
            id="calc"
        >
            <form 
                action=<?php
                    echo $_SERVER['PHP_SELF'];
                ?> 
                method="POST"
            >  
                <label for="CisloI"><strong>1. číslo</strong></label>
                <br>
                <input 
                    name="CisloI" 
                    type="number"
                    value= <?= (isset($_POST["CisloI"]) ? $_POST["CisloI"] : ""); ?>
                >
                <br>
                <label for="CisloII"><strong>2. číslo</strong></label>
                <br>
                <input 
                    name="CisloII" 
                    type="number"
                    value= <?= (isset($_POST["CisloII"]) ? $_POST["CisloII"] : ""); ?>
                >
                <br><br>
                <button type="submit">Vypočítat</button>
            </form>
        </div>
        <br>
        <div>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    (int)$CisloJ = htmlspecialchars($_POST["CisloI"]);
                    (int)$CisloD = htmlspecialchars($_POST["CisloII"]);
                    
                    $C = new Math($CisloJ, $CisloD);

                    echo "Napsaná čísla: " . $CisloJ . " a " . $CisloD;
                    echo "<br>";
                    $C -> Output();
                }
            ?>
        </div>
    </body>
</html>