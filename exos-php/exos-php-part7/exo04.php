<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXOS PHP - Part7</title>
</head>
<body>
<h3>EXOS PHP - Part7 - Exo n°06</h3>
<p>Consigne :<br>
Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché.<br>
Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.<br>
Utiliser qu'une seule page.</p>

<h4>Rendu :</h4>
<form method="post" action="user4.php">
<select name="Civilité">
    <option value="Mr">Boss</option>
    <option value="Mme">Mme</option>
    <option value="Mlle">Mlle</option>
    <option value="Mlle">M.</option>
</select>
<input type="text" name="nom" placeholder="Renseignez votre nom svp"/>
<input type="text" name="prenom" placeholder="Renseignez votre prénom svp"/>
<input type="submit" name="valider" />
</form>

<?php
if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_POST['nom']) AND isset($_POST['prenom'])) // On a le nom et le prénom
{
	echo ['nom'].['prenom'];
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo '<br>'.$_GET['nom']. $_GET['prenom']. $_POST['nom']. $_POST['prenom'];
}
?>

</body>
</html>