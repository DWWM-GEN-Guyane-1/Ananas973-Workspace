<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo PHP - Part6 - n°03</title>
</head>
<body>
<p>Consigne :<br>
Faire une page index.php.<br>
Tester sur cette page que tous les paramètres de cette URL existent et les afficher :<br>
ndex.php?startDate=2/05/2016&endDate=27/11/2016.</p>

<?php
if (isset($_GET['startDate']) AND isset($_GET['endDate'])){ // On a les dates de début et fin renseignées
	echo '<br>'.'Bonjour ' . $_GET['startDate'] . ' ' . $_GET['endDate']. ' !';
}

else // Il manque des paramètres, on avertit le visiteur
{
	echo '<br>'.'Il faut renseigner les dates de début et de fin !';
}
?>
    
</body>
</html>