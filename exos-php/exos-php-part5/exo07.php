<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°07</h3>
        <p>Consigne :<br>
        Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>

    <?php
    $hautFrance = [02 => 'Ainse' , 59 => 'Nord', 60 =>'Oise', 62 =>'Pas-de-Calais', 80 => 'Somme'];
    $hautFrance[51] = 'Reims'; // Ajouter une valeur dans le tableau
    

    foreach($hautFrance as $clef => $valeur){
        echo '- Le n° : ' .$clef. ' correspond au département suivant (zone Haut de FRance) : ' .$valeur. '<br>';
    }
           
        ?>

    </body>
    </html>