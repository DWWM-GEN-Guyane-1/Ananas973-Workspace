<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°06 bis</h3>
        <p>Consigne :<br>
        Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>

    <?php
     $hautFrance = [02 => 'Ainse' , 59 => 'Nord', 60 =>'Oise', 62 =>'Pas-de-Calais', 80 => 'Somme'];
    
    echo $hautFrance[59];
           
        ?>

    </body>
    </html>