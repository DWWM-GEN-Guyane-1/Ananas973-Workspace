<!DOCTYPE html>
<html>
<head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP n°7</h3>
        <p>Consigne :<br>
        Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.<br>
        Attention age est de type entier. Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans"..</p>

        <?php
            // Déclarer variable et afficher la phrase
            $lastname = 'Indigo'; 
            $firstname = 'Nefertari';
            $age = 2500;
            $origins = "Nibiru";
            echo "Bonjour $firstname $lastname ! Tu as $age ans car tu viens de $origins."; 
         ?>
    </body>
</html>