<?php
    // details base de donnée
    $host = "localhost";
    $username = "root";
    $password ="";
    $dbname = "supercar";

    // créer la connexion
    $con = mysqli_connect($host, $username, $password, $dbname);

    // assurer que la connexion à été établie 
    if (!$con) {
        die("Connection failed!" . mysqli_connect_error());
    }

    // fermer la connexion
    mysqli_close($con);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscription</title>
    <link rel="stylesheet" href="bootstrap.min(2).css">
	<link rel="stylesheet" href="assets/css/Supercar1.css">
</head>

<body>
    <nav class="navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php">Page d'accueil</a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto"></ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Inscrivez-vous</h2>
                    <p></p>
                </div>
            </div>
            <form>
                <div class="mb-3"><label class="form-label" for="name">Nom</label><input class="form-control form-control item" type="text" id="name" include_onced=""></div>
                <div class="mb-3"><label class="form-label" for="password">Prénom</label><input class="form-control item" type="text" id="password" include_onced=""></div>
                <div class="mb-3"><label class="form-label" for="email">Adresse</label><input class="form-control item" type="text" id="password-1" include_onced=""></div>
				<label class="form-label" for="email">Téléphone</label><input class="form-control item" type="tel" id="email" include_onced="" maxlength="8">
				<button class="btn btn-primary ms-md-0" type="submit" style="margin-top: 15px;margin-left: 2px;">Inscription</button>
            	</br>
				<a href="connexion.php">Vous avez déjà un compte? Connectez-vous !</a>
			</form>
        </section>
    </main>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>