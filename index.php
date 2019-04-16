<?php
session_start();
if (isset($_SESSION["connect"])){
	$connect = $_SESSION["connect"];
}else{
	$connect = false;
}
if ($connect) {
	header("Location: http://localhost/pageconnexion/page.php");
}
$errusername="";
$errpassword="";

if (!empty($_POST)){
		$stock = require 'stock.php';
		$username = $_POST["username"];
		$password = $_POST["password"];

		if (!empty($username) && !empty($password)){
			if(isset($stock[$username])){
				if ($password === $stock[$username]){
						
						$_SESSION["connect"] = true;
						$_SESSION["username"] = $username;
						header("Location: http://localhost/pageconnexion/page.php");
				}else{
					header("HTTP/1.0 403 Forbidden");
				}
			}else{
				header("HTTP/1.0 403 Forbidden");
			}
		}else{
			if (empty($username)){
				$errusername="class=\"danger\"";
			}
			if (empty($password)){
				$errpassword="class=\"danger\"";
		}
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
					<input <?= $errusername ?> type="text" name="username" placeholder="Nom d'utilisateur" required="required" />
					<input <?= $errpassword ?> type="password" name="password" placeholder="Mot de passe" required="required" />
					<button type="submit">Connexion</button>
			</form>
			</div>
		</section>
	</div>

</body>
</html>