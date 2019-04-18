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
<section>
	<!-- boucle sur le tableau users -->
	<?php foreach ($users as $user): ?>
		<article>
			<form method="POST" action="update.php">
				<input type="text" name="username" value="<?= $user["name"] ?>">
				<input type="text" name="password" placeholder="modification mdp">
				<input type="hidden" name="id" value="<?= $user["id"]
				?>">
				<button type="submit">Modifier</button>
			</form>
		</article> 
	<?php endforeach; ?>
	<!-- fin boucle -->
</section>




<a href="page.php">Site</a><br/>
<a href="profil.php">Mon Profil</a><br/>
<a href="beer.php">Les Bières</a><br/>
<a href="?deconnect=true">déconnexion</a>