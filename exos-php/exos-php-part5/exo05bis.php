<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°05 bis</h3>
        <p>Consigne :<br>
        Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>

    <?php
    $hautFrance = [02 => 'Ainse' , 59 => 'Nord', 60 =>'Oise', 62 =>'Pas-de-Calais', 80 => 'Somme'];
    
    foreach($hautFrance as $clef => $valeur){
        echo '- Le n° : ' .$clef. ' correspond au département suivant (zone Haut de FRance) : ' .$valeur. '<br>';
    }
           
        ?>

    </body>
    </html>