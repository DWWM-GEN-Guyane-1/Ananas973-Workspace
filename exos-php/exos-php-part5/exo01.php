<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°01</h3>
        <p>Consigne :<br>
        Créer un tableau mmonth et l'initialiser avec les valeurs suivantes :<br>
        Tous les mois de Janvier à Décembre.</p>

    <?php
    $month = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Décembre");
    echo $month[0].'<br>';
    echo $month[1].'<br>';
    echo $month[2].'<br>';
    echo $month[3].'<br>';
    echo $month[4].'<br>';
    echo $month[5].'<br>';
    echo $month[6].'<br>';
    echo $month[7].'<br>';
    echo $month[8].'<br>';
    echo $month[9].'<br>';
    echo $month[10].'<br>';
    echo $month[11].'<br>';
        ?>

    </body>
    </html>