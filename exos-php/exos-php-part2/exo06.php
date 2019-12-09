<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part2 n°6</h3>
        <p>Consigne :<br>
        Traduire ce code avec des if et des else :  echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'.<br>
        Pour info Ana, il faut lire "Si la variable isOk est égale à false alors afficher "c'est pas bon". Si non, "c'est ok".</p>
<?php
           $age = 777;
           $majority = 18;
           echo "Vous avez $age ans";
           echo"<br>";

           if($age >= $majority){
               echo "Tu es majeur.";
           }

           else{
               echo "Tu n'es pas majeur.";
           }
           
?>
    </body>
</html>