<?php
session_start();

if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="connexion.css">
</head>
<body>
	<h1>Le petit bac clement</h1>
	<form method="POST" action="register.php">
		<h2>Inscription</h2>
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" required><br>

		<label for="email">E-mail :</label>
		<input type="email" name="email" id="email" required><br>

		<label for="motdepasse">Mot de passe :</label>
		<input type="password" name="motdepasse" id="motdepasse" required><br>

		<label for="confmotdepasse">Confirmer le mot de passe :</label>
		<input type="password" name="confmotdepasse" id="confmotdepasse" required><br>

		<input type="submit" name="submit" value="S'inscrire">
	</form>

	<form method="POST" action="login.php">
		<h2>Connexion</h2>
		<label for="email">E-mail :</label>
		<input type="email" name="email" id="email" required><br>

		<label for="motdepasse">Mot de passe :</label>
		<input type="password" name="motdepasse" id="motdepasse" required><br>

		<input type="submit" name="submit" value="Se connecter">
	</form>
	<h2>Règles</h2>
	<p>Les règles du petit bac sont les suivantes :</p>
</body>
</html>
