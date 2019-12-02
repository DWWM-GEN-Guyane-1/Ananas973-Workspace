<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP n°2</h3>
        <p>Consigne : créer au moins trois variables lastname, firstname et age. Les initialiser avec les valeurs de votre choix.<br>
        Attention âge est de type entier. Afficher leur contenu.</p>

        <?php
            //Déclarer les 3 variables lastname , firstname et age et leur donner
            $lastname = 'Indigo'; 
            $firstname = 'Nefertari';
            $age = 2500;
            $origins = "Nibiru";
            $identity = '';

            // Concaténation
            $identity = "Je m'appelle $firstname $lastname, j'ai $age ans. En stage sur Terre, je suis orginaire de $origins.";

            //Affiche les valeurs attribuées
            echo $identity;
        ?>
    </body>
</html>