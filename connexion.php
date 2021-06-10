<?php
	session_start();
	$page = "admin";
	

	if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
		header("Location: admin.php");
	}
		

	// error_reporting(0);		// Enlève tous les warnings inutiles
	if ($_POST['login'] == "adminP" && $_POST['password'] == "42021") {			// Vérification des identifiants pour accéder à la page admin
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['password'] = $_POST['password'];


		header("Location: admin.php");
	} else {
		header("Location: admin_connexion.php");
	}
?>