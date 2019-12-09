<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part2 n°1</h3>
        <p>Consigne :<br>
        Créer une variable age et l'initialiser avec une valeur.<br>
        Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur.<br>
        Dans le cas contraire, afficher Vous êtes mineur.</p>

        <?php
            //Déclarer la variable km et lui donner la valeur de 1, afficher le contenu
            $age = 777;
            echo "Votre age est de $age ans"
            
            if($age>=18){
                echo "Vous êtes majeur et vacciné"
            }
                        
            elseif($age <18){
                echo "Vous êtes mineur"
            }

            else {
                echo "Vous faites erreur"
            }
        ?>
    </body>
</html>