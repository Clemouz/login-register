<?php
session_start();

if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['nom'])) {
    if(isset($_POST['submit'])) {
        $nom_partie = $_POST['nom_partie'];
        $createur_partie = $_SESSION['nom'];

        if(!file_exists('parties.csv')) {
            $file = fopen('parties.csv', 'w');
            fputcsv($file, array('Nom partie', 'Créateur partie'));
        } else {
            $file = fopen('parties.csv', 'a');
        }

        $data = array($nom_partie, $createur_partie);
        fputcsv($file, $data);
        fclose($file);

        header("Location: index.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Party</title>
</head>
<body>
	<h1>Create Party</h1>
	<form method="POST">
		<label for="nom_partie">Nom de la partie :</label>
		<input type="text" name="nom_partie" id="nom_partie" required><br>
		<input type="submit" name="submit" value="Créer">
	</form>
	<form action="index.php">
	  <button type="submit">Retour</button>
	</form>
</body>
</html>
