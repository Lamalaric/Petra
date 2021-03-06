<?php
	session_start();
	$page = "admin";
	include("includes/header.inc.php");
		
?>

<body class="container-admin">

	<main>
		<h2>Accès interface administrateur</h2>
		<div class="container-login">
			<form method="post" action="connexion.php">
				<input type="text" name="login" placeholder="login" required>
				<input type="password" name="password" placeholder="mot de passe" required>
				<input type="submit" name="submit" value="Connexion">
			</form>
			<p>
				Permet de gérer le contenu du site web.<br>
				Seul les personnes de confiance disposant du mot de passe peuvent y accéder.
			</p>
		</div>
	</main>

</body>

<?php
	include("includes/footer.inc.php");
?>