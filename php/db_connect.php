<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "deptinfo";
	// Etablir la connexion à la base de donnée
	$db = mysqli_connect($servername, $username, $password, $dbname)
	or die ("connexion impossible")
?>

