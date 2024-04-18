<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=supercar;charset=utf8', 'root', '');
if (isset($_POST['submit'])) {
    if (!empty($_POST['nom']) &&!empty($_POST['username']) &&!empty($_POST['password'])){
            $nom = $_POST['username'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $insertUser = $bdd->prepare('INSERT INTO admin(nom, username, password) VALUES(:nom, :username, :password)');
            $insertUser->execute(array(':nom' => $nom, ':username' => $username, ':password' => $password));
           
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
    <title>Ajouter</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <form action="" method="post">
        <h1>Ajouter un identifiant </h1>
          <input type="text" name="nom" placeholder="Nom">
          <input type="text" name="username" placeholder="identifiant">
          <input type="password" name="pwd" placeholder="Mot de passe">
          <input type="submit" value="Ajouter" name="send">
          <a class="link back"  href="showUser.php"> Annuler</a>
    </form>  
</body>
</html>