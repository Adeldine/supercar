<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
<div class="link_container">
    <a class ="link" href="addUser.php">Ajouter un utilisateur</a>
    </div> 

<div class="link_container">
    <a class ="link" href="admin.php">Espace Admin</a>
    </div> 

   <table>
      <thead>
      <?php
            include_once "connect_ddb.php";
            //liste des utilisateurs
            $sql= "SELECT * FROM admin";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0){
                //afficher les utilisateurs
            ?>
        <tr>
        <th>login</th>
        <th>email</th>
        <th>Supprimer</th>
     </tr>
    </thead>  
    </tbody>

    <?php
    while($row= mysqli_fetch_assoc($result)){
	?>
				<tr>
                    <td><?=$row['login']?></td>
                    <td><?=$row['email']?></td>
					<td class="image"><a href="deleteUser.php?id=<?php echo $row["Id_Admin"]?>"><img src="remove.png" alt=""></a></td>
                </tr>
           
                <?php
                }
            }
            else{
                echo " <p class='message'>0 utilisateur présent !</p>";
            }
                ?>
            </tbody>
        </table>
    </main>
   
</body>
</html>
