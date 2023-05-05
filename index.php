<?php
session_start();

if (!isset($_SESSION['email'])) {
  header("Location: connexion.php");
  exit();
}
?>
<div class="header">
<h1>Bienvenue sur le jeu du petit bac, <?php echo $_SESSION['email']; ?> ! </h1>
<form action="logout.php" method="POST">
    <input type="submit" name="logout" value="Log out">
</div>
<form action="create_party.php" method="POST">
  <button type="submit">Créer une partie</button>
</form>
<form action="join_party.php" method="POST">
  <button type="submit">Rejoindre une partie</button>
</form>
