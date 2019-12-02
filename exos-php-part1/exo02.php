<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Exo PHP n°2</h1>
        <p>Créer trois variables lastname, firstname et age et les initialiser avec les valeurs de votre choix.<br>
        Attention age est de type entier. Afficher leur contenu.</p>

        <?php
            //Déclarer les 3 variables lastname , firstname et age et leur donner
            $lastname = 'Amazon'; 
            $firstname = 'Nefertari';
            $age = 34;
            $identity = '';

            // Concaténation
            $identity = "Je m'appelle $firstname $lastname et j'ai $age ans";

            //Affiche les valeurs attribuées
            echo $identity;
        ?>
    </body>
</html>