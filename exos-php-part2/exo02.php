<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part2 n°2</h3>
        <p>Consigne :<br>
        Créer une variable isEasy de type booléan et l'initialiser avec une valeur.<br>
        Afficher <em>"C'est facile!!"</em> si c'est vrai.<br>
        Dans le cas contraire afficher <em>"C'est difficile !!!"</em>.<br>
        Bonus : L'écrire de deux manières différentes.</p>

        <?php

            $isEasy = true;
            echo "Je dois gérer le max pour apprendre à coder seule";
            echo "<br>";

            
            if($isEasy === true){
                echo "C'est facile, tu vas gérer";
            }

            else {
                echo "C'est difficile";
            }
        ?>
    </body>
</html>