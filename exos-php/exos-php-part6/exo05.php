<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo PHP - Part6 - n°05</title>
</head>
<body>
<p>Consigne :<br>
Faire une page index.php.<br>
Tester sur cette page que tous les paramètres de cette URL existent et les afficher :<br>
<em>index.php?week=12</em>.</p>

<?php
if (isset($_GET['week'])){ // On a les dates de début et fin renseignées
	echo '<br>'.'Le paramètre "week" est bien renseigné : ' . $_GET['week']. ' !';
}

else // Il manque des paramètres, on avertit le visiteur
{
	echo '<br>'.'Il faut renseigner le paramètre "week" !';
}
?>
    
</body>
</html>