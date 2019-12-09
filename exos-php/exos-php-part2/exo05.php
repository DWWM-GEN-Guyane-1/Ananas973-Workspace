<!DOCTYPE html>
<html>
    <head>
    <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h3>Exo PHP Part2 n°5</h3>
        <p>Consigne :<br>
        Traduire ce code avec des if et des else : echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';</p>
<?php
$gender = '';

if($gender != 'Homme'){
    echo "C\'est une développeuse !!!";
}

else {
    echo 'C\'est un développeur !!!';
}
?>
    </body>
</html>