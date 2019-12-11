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
Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler :<br>
index.php?lastname=Nemare&firstname=Jean.</p>



<?php
if (isset($_GET['age'])) // On a le nom et le prénom
{
	echo '<br>'.'Bonjour,votre âge est : '. $_GET['age'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo '<br>'.'Il faut renseigner votre âge !';
}
?>
    
</body>
</html>