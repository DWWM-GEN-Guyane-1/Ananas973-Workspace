<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP n°3</h3>
        <p>Consigne :<br>
        Créer une variable km. L'initialiser à 1. Afficher son contenu.<br>
        Changer sa valeur par 3. Afficher son contenu.<br>
        Changer sa valeur par 125. Afficher son contenu.</p>

        <?php
            //Déclarer la variable km et lui donner la valeur de 1, afficher le contenu
            $km = 1;
            echo "La variable km est de : ";
            echo $km;
            echo "<br>";

            // Déclarer la variable km et lui donner la valeur de 3, afficher le contenu
            $km = 3;
            echo "La variable km est de : ";
            echo $km;
            echo "<br>";

            //Déclarer la variable km et lui donner la valeur de 125, afficher le contenu
            $km = 125;
            echo "La variable km est de : ";
            echo $km;
            echo "<br>";
        ?>
    </body>
</html>