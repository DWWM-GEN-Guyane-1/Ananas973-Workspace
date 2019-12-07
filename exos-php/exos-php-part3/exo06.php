<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part3 n°6</h3>
        <p>Consigne :<br>
            En allant de 20 à 0 avec un pas de 1.<br>
            Afficher le message "C'est presque bon"</p>

    <?php
            for($var=20; $var>=0; $var--){
                echo $var." C'est presque bon"."<br>";
            }
        ?>
    </body>
</html>