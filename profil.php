<?php
require 'connect.php';
require 'db.php';
echo "mon profil est super secu <br />";
echo "my name is ".substr($username, -3)." ".substr($username, 0, -3)."-".substr($username, -3)." <br />";
// users[] = bdd -> julien -> users
$sql = "SELECT * FROM users";
$statement = $pdo->query($sql);
$users = $statement->fetchAll();
?>



<h2>Liste des utilisateurs :</h2>
<ul style="list-style-type: none;">
	<!-- TODO : changer point en tiret -->
	<!-- boucle sur le tableau users -->
	<?php foreach ($users as $user): ?>
		
		<li>- <?= $user["name"] ?> mdp : <?= $user["password"] ?></li>
	
	<?php endforeach; ?>
	<!-- fin boucle -->
</ul>




<a href="profil.php">Mon profil</a><br/>
<a href="beer.php">Les bières</a><br/>
<a href="page.php">Site</a><br/>
<a href="?deconnect=true">Déconnexion</a>