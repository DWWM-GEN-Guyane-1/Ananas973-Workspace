<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part5 - Les tableaux - n°04</h3>
        <p>Consigne :<br>
        Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>

    <?php
    $year = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Décembre");
    $year[7] = 'Août'; // Modifier la valeur n°7 dans le tableau

    foreach($year as $month){ // Afficher tout le contenu du tableau
        echo'- '.$month.'<br/>';
                
    }   
        ?>

    </body>
    </html>