<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part4 n°7</h3>
        <p>Consigne :<br>
        Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
        <ul>
        <li>Homme</li>
        <li>Femme</li>
        </ul>
La fonction doit renvoyer en fonction des paramètres :
<ul>
<li>Vous êtes un homme et vous êtes majeur</li>
<li>Vous êtes un homme et vous êtes mineur</li>
<li>Vous êtes une femme et vous êtes majeur</li>
<li>Vous êtes une femme et vous êtes mineur</li>
</ul>
Gérer tous les cas.</p>

    <?php
    $gender = "Homme";
    $age = 144;
    
    echo helloiD($gender,$age);

            function helloiD($a,$b){
                if($a === "Homme" && $b >= 18){
                    return "Vous êtes un homme et vous êtes majeur.";
                }

                elseif($a === "Femme" && $b >= 18){
                    return "Vous êtes une femme et vous êtes majeure.";
                }

                elseif($a === "Homme" && $b < 18){
                    return "Vous êtes un homme et vous êtes mineur.";
                }

                elseif($a === "Femme" && $b < 18){
                    return "Vous êtes une femme et vous êtes mineure.";
                }

                else{
                    return "Nous n'avons pas les ressources pour déterminer votre sexe et votre âge à partir des réponses renseignées.";
                }
            }
        ?>
    </body>
    </html>