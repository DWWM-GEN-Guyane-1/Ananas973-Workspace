<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part4 n°2</h3>
        <p>Consigne :<br>
            Faire une fonction qui prend en paramètre une chaîne de caractères.<br>
            Elle doit retourner cette même chaîne de caractère.</p>

    <?php
    $string = "Be at peace";
    echo catOreo($string);

            function catOreo($a){
                return $a;
            }

        ?>
    </body>
</html>