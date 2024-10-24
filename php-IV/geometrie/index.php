<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Geometry smile</title>
    </head>
    <body>
        <h1>
            Geometrie
        </h1>
        <div
            id="smile_creator"
        >
            <form 
                action=<?php
                    echo $_SERVER['PHP_SELF'];
                ?>
                method="POST"
            >
                <label 
                    for=""
                >
                    Obličej
                </label>
                <input 
                    type="number" 
                    name="Oblicej" 
                    value=<?= (isset($_POST["Oblicej"]) ? $_POST["Oblicej"] : ""); ?>
                >
                <label 
                    for=""
                >
                    Pravé oko
                </label>
                <input 
                    type="number" 
                    name="P_Oko" 
                    value=<?= (isset($_POST["P_Oko"]) ? $_POST["P_Oko"] : ""); ?>
                >
                <label 
                    for=""
                >
                    Levé Oko
                </label>
                <input 
                    type="number" 
                    name="L_Oko" 
                    value=<?= (isset($_POST["L_Oko"]) ? $_POST["L_Oko"] : ""); ?>
                >
                <label 
                    for=""
                >
                    pusa
                </label>
                <input 
                    type="number" 
                    name="Pusa" 
                    value=<?= (isset($_POST["Pusa"]) ? $_POST["Pusa"] : ""); ?>
                >
                <button 
                    type="submit"
                >
                    Nakreslit a vypočítat obsah obličeje
                </button>
            </form>
        </div>
        <div>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    (int)$Face = htmlspecialchars($_POST["Oblicej"]);
                    (int)$R_Eye = htmlspecialchars($_POST["P_Oko"]);
                    (int)$L_Eye = htmlspecialchars($_POST["L_Oko"]);
                    (int)$Mouth = htmlspecialchars($_POST["Pusa"]);
                    
                    $P_Face = new Face($Face, $R_Eye, $L_Eye, $Mouth);
                    
                    $P_Face -> Kreslit();
                    echo "<br><br>";
                    $P_Face -> Vypocitat();
                }
            ?>
        </div>
    </body>
</html>