<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part4 n°8</h3>
        <p>Consigne :<br>
        Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.<br>
        Tous les paramètres doivent avoir une valeur par défaut.</p>

    <?php
    $num1 = 60;
    $num2 = 133;
    $num3 = 7;
    echo "Les 3 valeurs renseignées sont : " .$num1.", ".$num2. ", " .$num3. "<br>La somme de ces nombres est de : ";
    
    echo somme($num1,$num2,$num3);

            function somme($a,$b,$c){
                return "La somme des 3 nombre est de : ".$a+$b+$c;
            }
        ?>
    </body>
    </html>