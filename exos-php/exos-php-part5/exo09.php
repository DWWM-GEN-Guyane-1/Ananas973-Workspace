<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°06 bis</h3>
        <p>Consigne :<br>
        Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associées.<br>
        Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département.</p>

    <?php
     $hautFrance = [02 => 'Ainse' , 59 => 'Nord', 60 =>'Oise', 62 =>'Pas-de-Calais', 80 => 'Somme'];
    
    echo $hautFrance[59];
           
        ?>

    </body>
    </html>