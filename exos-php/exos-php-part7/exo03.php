<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXOS PHP - Part7</title>
</head>
<body>
<h3>EXOS PHP - Part7 - Exo n°05</h3>
<p>Consigne :<br>
Créer un formulaire sur la page index.php avec :<br>
<ul>
<li>Une liste déroulante pour la civilité (Mr ou Mme ou Mlle)</li>
<li>Un champ texte pour le nom</li>
<li>Un champ texte pour le prénom</li>
Ce formulaire doit rediriger vers la page index.php.<br>
Vous avez le choix de la méthode.</p>

<h5>Rendu</h5>
<p>Je choisis d'utiliser la méthode post pour la confidentialité des données.</p>
<form method="post" action="user3.php">
<select name="Civilité">
    <option value="Mr">Boss</option>
    <option value="Mme">Mme</option>
    <option value="Mlle">Mlle</option>
    <option value="Mlle">M.</option>
</select>
<input type='text' name="nom" placeholder="Votre nom svp"/>
<input type='text' name="prénom" placeholder="Votre prénom svp"/>
<input type='submit' name="Valider"/>
</form>

</body>
</html>