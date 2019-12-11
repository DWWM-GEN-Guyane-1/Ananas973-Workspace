<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo PHP - Part6 - n°01</title>
</head>
<body>
<p>Consigne :<br>
Faire une page index.php.<br>
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br>
index.php?lastname=Nemare&firstname=Jean.</p>

<a href="exo01.php?lastname=Nemare&amp;firstname=Jean">Dis-moi bonjour !</a>

<?php
if (isset($_GET['lastname']) AND isset($_GET['firstname'])) // On a le nom et le prénom
{
	echo '<br>'.'Bonjour ' . $_GET['lastname'] . ' ' . $_GET['firstname'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo '<br>'.'Il faut renseigner un nom et un prénom !';
}
?>
    
</body>
</html>