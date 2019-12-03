<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part2 n°3</h3>
        <p>Consigne :<br>
        Créer deux variables age et gender. La variable <em>gender</em> peut prendre comme valeur :<br>
        - Femme <br>
        - Homme <br>
        En fonction de l'âge et du genre afficher la phrase correspondante :
        <ul>
        <li>Vous êtes un homme et vous êtes majeur</li>
        <li>Vous êtes un homme et vous êtes mineur</li>
        <li>Vous êtes une femme et vous êtes majeure</li>
        <li>Vous êtes une femme et vous êtes mineure</li>
        Gérer tous les cas.</p>

        <?php
            $gender = "Hermaphrodite";
            $age = 144;
            $majority = 18;
            echo "Vous dites être un(e) : $gender et avoir : $age ans. Alors...";
            echo "<br>";

            if($gender === "Femme" && $age >= $majority){
                echo "Vous êtes une Femme majeure";
            }
            
            elseif($gender === "Homme" && $age >= $majority){
                echo "Vous êtes un Homme majeur";
            }

            elseif($gender === "Femme" && $age < $majority){
                echo "Vous êtes une Femme mineure";
            }

            elseif($gender === "Homme" && $age < $majority){
                echo "Vous êtes un Homme mineur";
            }

            else {
                echo "Vous avez commis une erreur de saisie ou nous ne pouvons définir votre réponse";
            }

        ?>
    </body>
</html>