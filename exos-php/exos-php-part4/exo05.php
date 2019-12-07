<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part4 n°5</h3>
        <p>Consigne :<br>
            Faire une fonction qui prend en paramètre un nombre et une chaîne de caractères et qui renvoit la concaténation de ces deux paramètres.</p>

    <?php
    $number = 34;
    $string = " cycles annuels et toujours autant de questions.";

    echo concatString($number,$string);

            function concatString($a,$b){
                return $a.$b;
            }
        ?>
    </body>