<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part2 n°7</h3>
        <p>Consigne :<br>
        Traduire ce code avec des if et des else : echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!'.<br>
        Pour info Ana, il faut lire "Si la variable isOk est égale à false alors afficher "c'est pas bon". Si non, "c'est ok".</p>
<?php
$isOk = '';

if($isOk == false){
    echo 'c\'est pas bon !!!';
}

else {
    'c\'est ok !!!';
}
?>
    </body>
</html>