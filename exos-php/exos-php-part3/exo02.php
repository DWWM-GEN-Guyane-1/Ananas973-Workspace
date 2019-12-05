<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part3 n°2</h3>
        <p>Consigne :<br>
            Créer 2 variables.<br>
            Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.<br>
            Tant que la première variable n'est pas supérieure à 20 :<br>
       <ul>
           <li>multiplier la première variable avec la deuxième</li>
           <li>afficher le résultat</li>
           <li>incrementer la première variable</li>
       </ul>
    </p>

    <?php
            $var1 = 0;
            $var2 = 77;
            for($var1=0; $var1<=20;$var1++){
                echo $var1*$var2;
                echo "<br>";
            }
        ?>
    </body>
</html>