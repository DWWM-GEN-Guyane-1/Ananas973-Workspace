<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°07 bis</h3>
        <p>Consigne :<br>
        Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>

    <?php
    $hautFrance = ['Ainse' => 02, 'Nord' => 59, 'Oise' => 60, 'Pas-de-Calais' =>62, 'Somme' =>80];
    $hautFrance['Reims'] = 51; // Ajouter une valeur dans le tableau
    

    foreach($hautFrance as $clef => $valeur){
        echo '- Le département suivant (zone Haut de FRance) : ' .$clef. ' porte le numéro : ' .$valeur. '<br>';
    }
           
        ?>

    </body>
    </html>