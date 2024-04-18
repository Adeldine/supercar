<?php
// Initialisation de la session
session_start();

// Connexion base de donnée
$mysqli = new mysqli('localhost', 'root', '', 'supercar');

// verification connexion
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// verifie si formulaire envoyé
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // username and password sent from form
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Query to check user
    $sql = "SELECT login FROM admin WHERE login = '$login' and password = '$password'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}
?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Connexion</title>
    <link rel="stylesheet" href="bootstrap.min(2).css">
    <link rel="stylesheet" href="assets/css/Supercar1.css"></head>

<body>
    <nav class="navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php">Page d'accueil</a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto"></ul>
            </div>
        </div>
    </nav>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Connectez-vous</h2>
                </div>
                <form method="POST">
                    <div class="mb-3"><label class="form-label" for="login">Identifiant</label><input class="form-control item" type="text" id="login" include_onced=""></div>
                    <div class="mb-3"><label class="form-label" for="password">Mot de passe</label><input class="form-control" type="password" id="password" include_onced=""></div>
					<div class="mb-3"></div><button class="btn btn-primary" type="submit">Connexion</button>
                	</br>
					<a href="inscription.php">Vous n'avez pas de compte? Inscrivez-vous</a>
				</form>
            </div>
        </section>
    </main>
</body>

</html>