<?php
    require ("classes/ClassMath.php");
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Geometry smile</title>
    </head>
    <body
        class='
            bg-gray-300
        '
    >
        <h1
            class="
                text-center
                text-4xl
                font-bold
                mb-7
            "
        >
            Objektová geometrie
        </h1>
        <div
            id="picture"
        >
            <div
                id="face"
                class='
                    p-14
                    rounded-full
                    bg-yellow-500
                    mt-4
                    mb-14
                    ml-auto
                    mr-auto
                    h-96
                    w-96
                '
            >
                <div
                    id="class"
                    class="
                        relative
                        flex
                        h-36
                    "
                >
                    <div 
                        id="L-eye"
                        class='
                            relative
                            justify-end
                            h-28
                            w-28
                            bg-white
                            rounded-full
                            m-auto
                        '   
                    >
                        <span
                            id="num"
                            class="
                                realtive
                                flex
                                m-auto
                            "
                        >
                            11cm
                        </span>
                    </div>
                    <div 
                        id="R-eye"
                        class="
                            m-auto
                            bg-white
                            h-28
                            w-28
                            rounded-full
                        "    
                    >
                        <span
                            id="num"
                            class="
                                relative
                                flex
                                m-auto
                                p-auto
                            "
                        >
                            11cm
                        </span>
                    </div>
                </div>
                <div 
                    id="mouth"
                    class="
                        w-36
                        h-12
                        bg-white
                        mt-10
                        mr-auto
                        ml-auto
                    "
                >
                    <span
                        id="Mnum"
                        class="
                            flex
                            relative
                            mt-14
                            ml-auto
                            mr-auto
                            p-auto
                        "
                    >
                        20*5cm
                    </span>
                </div>
                <span
                    id="Fnum"
                >
                    50cm
                </span>
            </div>
        </div>


        <div
            id="MathForm"
        >
            <form
                method="POST"
                action=<?php echo $_SERVER['PHP_SELF']; ?>
                class="
                    text-center
                "
            >
                <button
                    type="submit"
                    class="
                        rounded
                        border-2
                        border-black
                        bg-white
                    "
                >
                    Vypočítat obsah žluté části obličeje
                </button>
            </form>
        </div>
        
        <div
            class="
                mt-7
            "
        >
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // Functions without constructor
                    /*
                    $Spocitat = new Face();
                    echo $Spocitat->Output();
                    */

                    (double)$Prumer_Obliceje = 50;
                    (double)$Prumer_Oka = 11;
                    (double)$Obsah_Obdelniku = 5*20;

                    $Spocitat = new Face($Prumer_Obliceje, $Prumer_Oka, $Obsah_Obdelniku);
                    
                    // var_dump($Spotitat);

                    echo $Spocitat -> OutputII();
                    
                    echo $Spotitat;
                }
            ?>
        </div>
    </body>
</html>