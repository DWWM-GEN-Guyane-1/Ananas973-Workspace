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

echo '<script type="text/javascript">
          window.onload = function ($prompt_gender) { prompt("Êtes-vous une Femme ou un Homme ?"); }
</script>';

echo '<script type="text/javascript">
          window.onload = function ($prompt_age) { prompt("Votre âge ?"); }
</script>';

            $prompt_gender = prompt($prompt_gender);
            $prompt_age = prompt($prompt_age);
            $majority = 18;
            $output_msg = "Vous dites être un(e) : $gender et avoir : $age ans. Alors...";
            echo "<br>";

            if($prompt_gender === "Femme" && $prompt_age >= $majority){
                echo "Vous êtes une Femme majeure";
            }
            
            elseif($prompt_gender === "Homme" && $prompt_age >= $majority){
                echo "Vous êtes un Homme majeur";
            }

            elseif($prompt_gender === "Femme" && $prompt_age < $majority){
                echo "Vous êtes une Femme mineure";
            }

            elseif($prompt_gender === "Homme" && $prompt_age < $majority){
                echo "Vous êtes un Homme mineur";
            }

            else {
                echo "Il y a une erreur dans la saisie";
            }
        ?>



     ?>   
    </body>
</html>