<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXOS PHP - Part7</title>
</head>
<body>
<h3>EXOS PHP - Part7 - Exo n°01 & 03</h3>
<p>Consigne :<br>
Créer un formulaire demandant le nom et le prénom.<br>
Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
    
<form method="get" action="user1.php">
<p>
<input type="text" name="nom" placeholder="Renseignez votre nom svp"/>
<input type="text" name="prénom" placeholder="Renseignez votre prénom svp"/>
<input type="submit" name="valider" />
</p>
</form>
</body>
</html>