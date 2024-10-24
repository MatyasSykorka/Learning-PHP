<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            Test formulář
        </h1>
        <form>
            <label id="name">Jméno: </label>
            <input 
                type="text" 
                name="jmeno" 
                value= <?= (isset($_POST["jmeno"]) ? $_POST["jmeno"] : ""); ?>
            >
        </form>
        <?php

        ?>
    </body>
</html>