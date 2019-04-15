<?php
if (!empty($_POST)){
	$stock = ["julien" => "123456","kevin" => "azerty"];
	$username = $_POST["username"];
	$password = $_POST["password"];

	if (!empty($username) && !empty($password)){
		if(isset($stock[$username])){
			if ($password === $stock[$username]){
					die("connecté");
			}else{
				header("HTTP/1.0 403 Forbidden");
			}
		}else{
			header("HTTP/1.0 403 Forbidden");
		}
	}else{
		die("manque un champ");
	}
}




?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with, initial-scale=1.0">
	<title>Formulaire de connexion</title>
	<link rel="stylesheet" type="text/css" href="Assets/CSS/style.css">
</head>
<body>
	<div class="wrapper">
		<section class="login-container">
			<div>
				<header>
					<h2>Identification</h2>
				</header>
				<form action="" method="post">
					<input type="text" name="username" placeholder="Nom d'utilisateur" required="required">
					<input type="password" name="password" placeholder="Mot de passe" required="required">
					<button type="submit">Connexion</button>
			</form>
			</div>
		</section>
	</div>

</body>
</html>