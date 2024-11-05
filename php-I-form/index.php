<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>
            Formůlář v PHP
        </title>
        <style>
            body {
                text-align: center;
                background-color: whitesmoke;
            }

            input {
                text-align: center;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <h1
            class="
                text-6xl
                pt-10
                font-bold
            "
        >
            Registrační formulář
        </h1>
        <div
            id="divform"
            class="
                mt-5
                rounded-3xl
                bg-gray-400
                h-auto
                w-2/5
                ml-auto
                mr-auto
                pt-4
                pb-5
                shadow-black
                shadow-lg
            "   
        >
            <form 
                id="form"
                method="POST"
                action=<?php
                    echo $_SERVER['PHP_SELF'];
                ?>
            >
                <label 
                    id="name"
                    name="name" 
                    class="
                        font-bold
                        text-2xl
                    "    
                >
                    Jméno:
                </label>
                <br>
                <input 
                    type="text" 
                    id="tname"
                    name="typeName"
                    class=""
                    value= <?= (isset($_POST["typeName"]) ? $_POST["typeName"] : ""); ?>
                >
                <br>
                <label
                    id="surname"
                    name="surname"
                    class="
                        text-2xl
                        font-bold
                    "
                >
                    Příjmení:
                </label>
                <br>
                <input 
                    type="text"
                    id="tsurname"
                    name="typeSurname"
                    class=""
                    value= <?= (isset($_POST["typeSurname"]) ? $_POST["typeSurname"] : ""); ?>
                >
                <br>
                <label
                    id="email"
                    name="Email"
                    class="
                        text-2xl
                        font-bold
                    "
                >
                    Email:
                </label>
                <br>
                <input
                    type="email"
                    id="temail"
                    name="typeEmail"
                    class=""
                    value= <?= (isset($_POST["typeEmail"]) ? $_POST["typeEmail"] : ""); ?>
                >
                <br>
                <label
                    id="passwd"
                    name="Password"
                    class="
                        text-2xl
                        font-bold
                    "
                >
                    Heslo:
                </label>
                <br>
                <input
                    type="password"
                    id="tpasswd"
                    name="typePassword"
                    class=""
                    value= <?= (isset($_POST["typePassword"]) ? $_POST["typePassword"] : ""); ?>
                >
                <br>
                <label
                    id="secpasswd"
                    name="secPassword"
                    class="
                        text-2xl
                        font-bold
                    "
                >
                    Podtvrďte heslo:
                </label>
                <br>
                <input
                    type="password"
                    id="tpasswd"
                    name="typeSecPassword"
                    class=""
                    value= <?= (isset($_POST["typeSecPassword"]) ? $_POST["typeSecPassword"] : ""); ?>
                >
                <br>
                <button 
                    type="submit"
                    id="subBttn"
                    value="Send"
                    class="
                        mt-4
                        font-bold
                        h-10
                        w-36
                        border-solid
                        border-green-700
                        bg-green-500
                        border-2
                        rounded-2xl
                        text-xl
                    "
                >
                    Odeslat
                </button>
            </form> 
        </div>
        <div
            id="result"
            name="Result"
            class="
                mt-7
                border-2
                border-black
                border-solid
                rounded-2xl
                bg-red-600
                text-white
                w-2/6
                ml-auto
                mr-auto
                pt-4
                pb-5
                shadow-black
                shadow-lg
            "
        >
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['typeName']);
                    $surname = htmlspecialchars($_POST['typeSurname']);
                    $email = htmlspecialchars($_POST['typeEmail']);
                    $password = htmlspecialchars($_POST['typePassword']);
                    $secpassword = htmlspecialchars($_POST['typeSecPassword']);

                    if (empty($name) 
                        || empty($surname) 
                        || empty($email) 
                        || empty($password) 
                        || empty($secpassword)
                    ) {
                        echo "<strong>Formulář není vyplněný!</strong>";
                    }
                    else {
                        if (strlen($password) <= 8) {
                            echo "<strong>Krátké heslo!</strong>";
                        }
                        else {
                            if ($password != $secpassword
                                && strlen($password) >= 8
                                /*
                                && strstr($password, "0") !== false
                                || strstr($password, "1") !== false
                                || strstr($password, "2") !== false
                                || strstr($password, "3") !== false
                                || strstr($password, "4") !== false
                                || strstr($password, "5") !== false
                                || strstr($password, "6") !== false
                                || strstr($password, "7") !== false
                                || strstr($password, "8") !== false
                                || strstr($password, "9") !== false */
                            ) {
                                echo "<strong>Hesla se neshodují!</strong>";
                            }
                            else {
                                echo "<strong>Jméno:</strong> " . $name .
                                    "<br><strong>Příjmení:</strong> " . $surname .
                                    "<br><strong>Email:</strong> " . $email .
                                    "<br><strong>Heslo:</strong> " . $password .
                                    "<br><strong>Heslo pro podtvrzení:</strong> " . $secpassword;
                            }
                        }
                    }
                }
            ?>
        </div>
    </body>
</html>
