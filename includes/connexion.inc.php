<?php 
	/*
	 * création d'objet PDO de la connexion qui sera représenté par la variable $cnx
	 */
	$user = "alefor03";
	$pass = "chaton2402";
	try {
	    $cnx = new PDO('pgsql:host=sqletud.u-pem.fr;dbname=alefor03_db',$user,$pass);
	}
	catch (PDOException $e) {
	    echo "ERREUR : La connexion a échouée";  // Afficher les détails de l'erreur : echo "Error: " . $e;
	}
 ?>
	