<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part3 n°5</h3>
        <p>Consigne :<br>
            En allant de 1 à 5 avec un pas de 1.<br>
            Afficher le message "On y arrive presque"</p>

    <?php
            for($var=1; $var<=15; $var++){
                echo $var." On y arrive presque"."<br>";
            }
        ?>
    </body>
</html>