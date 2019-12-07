<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part4 n°3</h3>
        <p>Consigne :<br>
            Faire une fonction qui prend en paramètre une chaîne de caractères.<br>
            Elle doit retourner cette même chaîne de caractère.</p>

    <?php
    $name = "Nefertari";
    $string = "va gérer le code";

    echo concatString($name,$string);

            function concatString($a,$b){
                return $a.$b;
            }
        ?>
    </body>