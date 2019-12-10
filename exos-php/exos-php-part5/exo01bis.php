<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°01</h3>
        <p>Consigne :<br>
        Créer un tableau month et l'initialiser avec les valeurs suivantes :<br>
        Tous les mois de Janvier à Décembre.</p>

    <?php
    $year = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Décembre");
    foreach($year as $month){ // Boucle foreach sert à afficher le contenu du tableau
        echo'- '.$month.'<br/>';    
    }
    echo "<br> L'année contient " .count($year). " valeurs."; // La fonction count() permet de renseigner le nombre d'unités
        ?>
    </body>
    </html>