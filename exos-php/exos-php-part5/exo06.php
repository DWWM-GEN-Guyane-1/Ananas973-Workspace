<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°06</h3>
        <p>Consigne :<br>
        Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>

    <?php
    $hautFrance = ['Ainse' => 02, 'Nord' => 59, 'Oise' => 60, 'Pas-de-Calais' =>62, 'Somme' =>80];
    
    echo $hautFrance['Nord'];  
        ?>

    </body>
    </html>