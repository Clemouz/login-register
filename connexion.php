<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="connexion.css">
  <script src="connexion.js"></script>
</head>
<body>
	<div class="header">
		<h1>Le petit bac</h1>
	</div>
	<div class="form">
		<div id="register-form">
			<form method="POST" action="register.php">
				<h2>Inscription</h2>
				<p>Pseudo</p>
				<label for="nom"></label>
				<input type="text" name="nom" id="nom" required><br>
				<p>Email</p>
				<label for="email"></label>
				<input type="email" name="email" id="email" required><br>
				<p>Mot de passe</p>
				<label for="motdepasse"></label>
				<input type="password" name="motdepasse" id="motdepasse" required><br>
				<p>Confirmer le mot de passe</p>
				<label for="confmotdepasse"></label>
				<input type="password" name="confmotdepasse" id="confmotdepasse" required><br>

				<input type="submit" name="submit" value="S'inscrire" onclick="showRegisterForm()">
				<button type="button" onclick="showLoginForm()">Se connecter</button>
			</form>
		</div>

		<div id="login-form" style="display:none;">
			<form method="POST" action="login.php">
				<h2>Connexion</h2>
				<p>Pseudo</p>
				<label for="email"></label>
				<input type="email" name="email" id="email" required><br>
				<p>Mot de passe</p>
				<label for="motdepasse"></label>
				<input type="password" name="motdepasse" id="motdepasse" required><br>

				<input type="submit" name="submit" value="Se connecter" onclick="showLoginForm()">
				<button type="button" onclick="showRegisterForm()">S'inscrire</button>
			</form>
		</div>
	</div>
	<div class="regles">
		<h2>Règles</h2>
		<h3>Les règles du petit bac sont les suivantes :</h3>
		<p>Pour jouer, vous devez d'abord vous créer un compte, vous accéderez ensuite à la page d'accueil ou vous pourrez rejoindre une partie,
			ou la créer. Une fois dans la partie crée, l'hôte de la partie peut décider de lancer la partie, ou d'attendre que d'autres joueurs rejoignent sa partie.
			Une fois la partie lancée, les participants devront remplir une liste de mots commençant par une lettre définie aléatoirement.
			Lorsque vous jugez avoir rempli tous les mots correctement, appuyez sur le bouton "stop" au bas de la page, cela arrêtera la partie.
			L'hôte pourra alors consulter les réponses des participants et les valider, augmentant le score du joueur de 1 point, ou invalider une réponse, faisant baisser
			le score de 1. Une fois toutes les réponses vérifiées, le joueur ayant le plus de points l'emporte !
		</p>
	</div>
</body>
</html>

