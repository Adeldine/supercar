<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=supercar;charset=utf8', 'root', '');
if (isset($_POST['submit'])) {
	if (!empty($_POST['login']) &&!empty($_POST['email']) &&!empty($_POST['password'])){
			$login = $_POST['login'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$insertUser = $bdd->prepare('INSERT INTO admin(login, email, password) VALUES(:login, :email, :password)');
			$insertUser->execute(array(':login' => $login, ':email' => $email, ':password' => $password));
			
			// Confirm that the data has been saved
			echo "L'utilisateur a été ajouté";
			
			
	}
	else {
		echo "Fail, veuillez réessayer";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <h1>Ajouter un utilisateur</h1>
          <input type="text" name="login" placeholder="login">
          <input type="password" name="password" placeholder="password">
		  <input type="email" name="email" placeholder="email">
          <input type="submit" value="Ajouter" name="submit">
          <a class="link back"  href="admin.php"> Annuler</a>
    </form>  
</body>
</html>