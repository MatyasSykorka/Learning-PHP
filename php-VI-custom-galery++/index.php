<?php
    require "./classes/galery.php";
    require "./classes/Upload.php";
    require "./classes/ImageThumb.php";
    // require "./classes/UserException.php";
    // echo "test";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- <link rel="stylesheet" href="./styles/style.css"> -->
        <title>
            Gallery
        </title>
    </head>
    <body
        class="
            bg-violet-400
            p-4
        "
    >
        <h1
            class="
                text-4xl
                text-center
                font-bold
            "
        >
            Gallery
        </h1>

        <div
            id="upload-form"
            class="
                pt-3
                pb-7
                pl-2
                pr-2
                ml-auto
                mr-auto
                mt-8
                w-2/4
                bg-gray-100
                border-black
                border-4
                rounded-3xl
                text-center

                shadow-2xl
            "
        >
            <form  
                method="post"
                enctype="multipart/form-data"
            >
                <label
                    class="
                        font-bold
                        text-xl
                    "
                >
                    Nahraj obrázek
                </label>
                <br>
                <div
                    id="file-inputs"
                    class="
                        border-gray-500
                        bg-gray-300
                        w-2/3
                        p-2
                        ml-auto
                        mr-auto
                        rounded-xl
                        content-center
                    "
                >
                    <input 
                        type="file"
                        name="FileToUpload"
                        id="FileToUpload"
                        class="
                            hover:font-bold
                        "
                    >
                    <input 
                        type="submit" 
                        value="Nahrát obrázek"
                        name="submit" 
                        class="
                            border-2 hover:border-1
                            border-black
                            rounded
                            hover:font-bold
                            bg-gray-500 hover:bg-green-400
                            text-white hover:text-black
                        "
                    >
                </div>

                
                <h2
                    class="
                        mt-4
                        font-bold
                    "
                >
                    Nastavení galerie
                </h2>

                <div
                    class="
                        border-px
                        rounded-xl
                        bg-gray-500
                        p-2
                        w-40
                        ml-auto
                        mr-auto
                    "
                >
                    <form
                        id="tableSettings"
                        method="post"
                        action=<?php
                            echo $_SERVER['PHP_SELF'];
                        ?>
                    >
                        <label 
                            for="raws"
                            class="
                                font-bold
                            "
                        >
                            Řádky
                        </label>
                        <input
                            id="raws"
                            class="
                                w-10
                                rounded
                            "
                            name="raws"
                            value= <?= (isset($_POST['raws']) ? $_POST['raws'] : ""); ?>
                        >
                        <br>
                        <label 
                            for="cols"
                            class="
                                font-bold
                            "
                        >
                            Sloupce
                        </label>
                        <input
                            id="cols"
                            class="
                                w-10
                                mt-1
                                rounded
                            "
                            name="cols"
                            value= <?= (isset($_POST['cols']) ? $_POST['cols'] : ""); ?>
                        >
                        <br>
                        <input 
                            type="submit"
                            value="Nastavit"
                        >
                    </form>
                </div>

                <form 
                    method="post"
                    action=<?php
                        echo $_SERVER['PHP_SELF'];
                    ?>
                >
                    <label 
                        for=""
                    >
                        Smazat obrázek - napiš název obrázku
                    </label>
                    <input
                        id="fileNameInput"
                        class="
                            rounded
                        "
                        name="fileName"
                        value= <?= (isset($_POST["fileName"]) ? $_POST["fileName"] : ""); ?>
                    >
                    <button 
                        type="submit"
                        class="
                        
                        "
                    >
                        Smazat
                    </button>
                </form>
            </form>
        </div>

        <div
            id="gallery"
        >
            <?php
                /* 

                // pro kontrolu knihovny GD 
                phpinfo(); 
                
                */

                if (isset($_POST["submit"])) {
                    // Do tříd se pošlou soubory
                    $upload = new Upload();
                    // $upload->uploadImage($_FILES["FileToUpload"]);
                    try {
                        $upload->uploadImage($_FILES["FileToUpload"]);
                        // echo "Obrázek byl úspěšně nahrán.";
                        echo 
                            '<div
                                class="
                                    mt-4
                                    h-16
                                    w-60
                                    bg-green-500
                                    border-2
                                    border-black
                                    rounded-xl
                                    content-center
                                    text-center
                                    font-bold
                                    ml-auto
                                    mr-auto
                                "
                            >
                                <p>
                                    Obrázek se úspěšně nahrál!
                                </p>
                            </div>'
                        ;
                    }
                    catch (Exception $e) {
                        // pokud program našel chybu, vypíše se na stránku
                        echo '
                            <div
                                class="
                                    mt-4
                                    p-2
                                    h-28
                                    w-64
                                    bg-red-600
                                    border-2 hover:border-4
                                    border-black
                                    rounded-2xl
                                    ml-auto
                                    mr-auto
                                    font-bold
                                    text-center
                                    content-center
                                "
                            >
                        ';
                            echo $e->getMessage();
                        echo '</div>';                       
                    }
                    
                    // Vloží cestu k originálnímu obrázku
                    $Nahled = new ThumbI(
                        "./pictures/full-size/" . $_FILES["FileToUpload"]["name"]
                    );

                    // Vytvoří náhled
                    $Nahled->createThumb(
                        "./pictures/preview/" . $_FILES["FileToUpload"]["name"], 
                        160
                    );
                }

                /*
                Funkce k úpravě galerie

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $rows = strval(htmlspecialchars($_REQUEST['rows']));
                    $cols = strval(htmlspecialchars($_REQUEST['cols']));

                    var_dump($rows);

                    if (empty($cols) || empty($rows)) {
                        echo '
                            <div>
                                Není počet sloupců nebo řádku
                            </div>
                        ';
                    }

                    if ($cols > 12) {
                        echo '
                            <div
                                class=" 
                                    bg-red-500
                                "
                            >
                                Too many columns for this table!
                            </div>
                        ';
                    }
                    if ($rows > 30) {
                        echo '
                            <div
                                class="
                                    bg-red-500
                                "
                            >
                                Too many raws for this table!
                            </div>
                        ';
                    }
                }
                */
                

                // Vytvoří tabulku galerii obrázků
                $Obrazky = new fileDir("./pictures/preview/", 7, 2);
                echo $Obrazky->Vypis();
            ?>
        </div>
    </body>
</html>