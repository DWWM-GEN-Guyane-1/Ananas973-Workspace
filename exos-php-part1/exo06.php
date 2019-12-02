<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP n°6</h3>
        <p>Consigne :<br>
        Créer une variable name et l'initialiser avec la valeur de votre choix.<br>
        Afficher : "Bonjour" + name + ", comment vas tu ?"</p>

        <?php
            // Déclarer variable et afficher la question
            $name = 'Indigo'; 
            echo "Bonjour $name ! Comment vas-tu ?"; 
         ?>
    </body>
</html>