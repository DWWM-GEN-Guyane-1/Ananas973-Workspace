<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo PHP - Part6 - n°02</title>
</head>
<body>
<p>Consigne :<br>
Faire une page index.php.<br>
Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler :<br>
index.php?lastname=Nemare&firstname=Jean. Tester ensuite :<br>
index.php?lastname=Nemare&firstname=Jean&age=44</p>

<a href="exo01.php?lastname=Nemare&amp;firstname=Jean">Dis-moi bonjour !</a>

<?php
if (isset($_GET['lastname']) AND isset($_GET['firstname']) AND isset($_GET['age'])) // On a le nom et le prénom
{
	echo '<br>'.'Bonjour ' . $_GET['lastname'] . ' ' . $_GET['firstname']. $_GET['age'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo '<br>'.'Les paramètres suivants ne sont pas (tous) renseignés : nom, un prénom et votre âge !';
}
?>
    
</body>
</html>