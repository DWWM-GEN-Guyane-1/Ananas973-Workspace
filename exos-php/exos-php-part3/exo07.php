<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part3 n°7</h3>
        <p>Consigne :<br>
            En allant de 1 à 100 avec un pas de 15.<br>
            Afficher le message "On tient le bon bout"</p>

    <?php
            for($var=1; $var<=100; $var+=15){ 
                echo $var." On tient le bon bout"."<br>";
            }
        ?>
    </body>
</html>