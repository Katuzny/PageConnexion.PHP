<?php
require 'connect.php';
require 'db.php';
/**
* A ne pas utiliser sauf pour select
* http://localhost/pageconnexion/deletebeer.php?id=1
* $_GET['id']
*/
//form action "http://localhost/pageconnexion/deletebeer.php"
//$_POST["id"]
	//echo $nb;
	//vider table /!\
	//DELETE FROM `biere`
	//supprime ligne 1
	//DELETE FROM `biere` WHERE `id`=1
if(isset($_POST["id"])){
	$id = $_POST["id"];
	//$sql = "DELETE FROM `biere` WHERE `id`=3";
	$sql = "DELETE FROM `biere` WHERE `id`= ?";
	$statement = $pdo->prepare($sql);
	$statement->execute([$id]);
}
header("Location: beer.php");
// header(location : beer.php);