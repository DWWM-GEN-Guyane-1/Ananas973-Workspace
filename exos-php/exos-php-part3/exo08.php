<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part3 n°7</h3>
        <p>Consigne :<br>
            En allant de 200 à 0 avec un pas de 12.<br>
            Afficher le message "Enfin !!!!"</p>

    <?php
            for($var=200; $var>=0; $var-=12){ 
                echo $var." Enfin !!!"."<br>";
            }
        ?>
    </body>
</html>