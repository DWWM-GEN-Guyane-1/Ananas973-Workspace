<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part3 n°4 bis</h3>
        <p>Consigne :<br>
            Créer une variable et l'initialiser à 1.<br>
            Tant que cette variable n'atteint pas 10, il faut  :<br>
       <ul>
           <li>l'afficher</li>
           <li>l'incrémenter de la moitié de sa valeur</li>
       </ul>
    </p>

    <?php
            $var = 1;
            while($var<10){
                $var = $var+$var/2;
                echo $var."<br>";
            } 
        ?>
    </body>
</html>