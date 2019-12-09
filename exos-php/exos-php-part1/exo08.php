<!DOCTYPE html>
<html>
<head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP n°8</h3>
        <p>Consigne :<br>
        Créer 3 variables.<br>
        Dans la première mettre le résultat de l'opération 3 + 4.<br>
        Dans la deuxième mettre le résultat de l'opération 5 * 20.<br>
        Dans la troisième mettre le résultat de l'opération 45 / 5.<br>
        Afficher le contenu des variables.<br>
        </p>

        <?php
            // Déclarer variable et afficher la phrase
            $operation1 = 3+4;
            $operation2 = 5*20;
            $operation3 = 45/5;

            echo "Le résultat1 = $operation1";
            echo "<br>";
            echo "Le résultat2 = $operation2";
            echo "<br>";
            echo "Le résultat3 = $operation3";
         ?>
    </body>
</html>