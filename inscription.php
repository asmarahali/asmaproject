<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		formulaire d'inscription
	</title>
	<style >
		input{
			margin-bottom:10px;
		}
	</style>
</head>
<body>

<form method="POST" action="traitement.php">
    <label for="nom">Votre nom</label>
    <br/>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
    <br/>

    <label for="prenom">Votre prénom</label>
    <br/>
    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
    <br/>

    <label for="email">Votre email</label>
    <br/>
    <input type="email" id="email" name="email" placeholder="Entrez votre email">
    <br/>

    <label for="pseudo">Votre pseudo</label>
    <br/>
    <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo">
    <br/>

    <label for="pwd">Votre mot de passe</label>
    <br/>
    <input type="password" id="pwd" name="pwd" placeholder="Entrez votre mot de passe">
    <br/>

    <input type="submit" name="ok" value="Submit">
</form>

</body>
</html>