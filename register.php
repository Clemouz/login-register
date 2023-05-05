<?php
if(isset($_POST['submit'])) {

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    if(!file_exists('users.csv')) {
        $file = fopen('users.csv', 'w');
        fputcsv($file, array('Nom', 'E-mail', 'Mot de passe'));
    } else {
        $file = fopen('users.csv', 'a');
    }

    $users = array_map('str_getcsv', file('users.csv'));
    foreach($users as $user) {
        if($user[1] == $email && $user[2] == $motdepasse) {
            session_start();
            $_SESSION['email'] = $email;
            fclose($file);
            header("Location: index.php");
            exit();
        } elseif ($user[1] == $email) {
            echo "L'utilisateur avec cette adresse e-mail existe déjà";
            exit;
        }
    }

    $data = array($nom, $email, $motdepasse);
    fputcsv($file, $data);
    fclose($file);

    header("Location: index.php");
    exit();
}
?>
