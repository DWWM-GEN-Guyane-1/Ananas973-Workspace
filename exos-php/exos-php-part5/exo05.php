<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°05</h3>
        <p>Consigne :<br>
        Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>

    <?php
    $hautFrance = ['Ainse' => 02, 'Nord' => 59, 'Oise' => 60, 'Pas-de-Calais' =>62, 'Somme' =>80];
    
    foreach($hautFrance as $clef => $valeur){
        echo '- Le département suivant (zone Haut de FRance) : ' .$clef. ' porte le numéro : ' .$valeur. '<br>';
    }
           
        ?>

    </body>
    </html>