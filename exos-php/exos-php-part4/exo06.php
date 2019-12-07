<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part4 n°6</h3>
        <p>Consigne :<br>
        Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.<br>
        Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>

    <?php
    $last_name = "Seed";
    $first_name = " Nibiru";
    $age = 34;

    echo helloiD($last_name,$first_name,$age);

            function helloiD($a,$b,$c){
                return "Bonjour " .$a .$b .", tu as ".$c ." ans. Ta fonction : germer, prendre racine, gagner en altitude et déployer tes branches.";
            }
        ?>
    </body>