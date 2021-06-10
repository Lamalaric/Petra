<?php
	

	/*
	 * Pour tout ce qui est image, il faut gérer l'upload de l'image au bon endroit etc..
	 * Pour cela, il faudra implémenter partout le bout de code suivant (seulement quand on a besoin de gérer une image) :
	 * Le code suivant est à modifier il ne marche pas. Mais c'est une piste
	 * Il faudra aussi décommenter les 3 lignes dans la condition de chaque partie, elle va avec le bout de code qui suit.
	 *
	 */



		
		echo "Filename: " . $_FILES['UploadFileName']['name']."<br>";
		echo "Type : " . $_FILES['UploadFileName']['type'] ."<br>";
		echo "Size : " . $_FILES['UploadFileName']['size'] ."<br>";
		echo "Temp name: " . $_FILES['UploadFileName']['tmp_name'] ."<br>";
		echo "Error : " . $_FILES['UploadFileName']['error'] . "<br>";
		

	

		// Vérification si le fichier est une image
		$fileTmpPath = fopen($_FILES["UploadFileName"]["tmp_name"], 'r'); 		// Chemin image par défaut

		$dest_path = 'bcorgnac/WWW/Petra/images/';
		if(move_uploaded_file($fileTmpPath, $dest_path)) {
			echo 'File is successfully uploaded.';
		} else {
			echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
		}

		echo '<br>'.$fileTmpPath.'<br>';
		echo $dest_path;
		
	 
	
	

	/*
	 * TODO :
	 *  - Quand on veut juste modifier un seul champ : Tous les champs non renseignés passent à ''.
	 *    Il faut que seul les champs renseignés se modifient.
	 *  - Faire marcher les images
	*/



	






	// Si on vient de la page admin
	if ($_GET['page'] == "admin")
	{
		// Conexxion à la BDD
		include("includes/connexion.inc.php");
	    $cnx->exec("SET SEARCH_PATH TO petra");

	    // Code pour ajouter un monument
	    if ($_GET['action'] == "ajout-visiter") {
			$filename = $_POST['UploadFileName'];
			$titre_fr = $_POST['titre_fr'];
			$titre_en = $_POST['titre_en'];
			$texte_fr = $_POST['texte_fr'];
			$texte_en = $_POST['texte_en'];




			// Si tout est rempli et que l'extension est valide, on insère le contenu dans la BDD
			if ($titre_fr != '' && $titre_en != '' && $texte_fr != '' && $texte_en != '') {
			    // move_uploaded_file($tmpName, './upload/'.$name);  DEPLACER LE FICHIER
				$ajout_visiter = $cnx -> exec("INSERT INTO visiter (titre_fr, titre_en, texte_fr, texte_en, image) VALUES ('".$titre_fr."', '".$titre_en."', '".$texte_fr."', '".$texte_en."', '".$filename."');");
				//header("Location: admin.php?isAdded=true");
			}
			//header("Location: admin.php?isAdded=false");
		}

		// Code pour modifier un monument
	    if ($_GET['action'] == "modif-visiter") {
	    	$input_titre = $_POST['modif_titre'];
			$filename = $_POST['UploadFileName'];
			$titre_fr = $_POST['titre_fr'];
			$titre_en = $_POST['titre_en'];
			$texte_fr = $_POST['texte_fr'];
			$texte_en = $_POST['texte_en'];

			// Si tout est rempli et que l'extension est valide, on insère le contenu dans la BDD
			if ($titre_fr != '' && $titre_en != '' && $texte_fr != '' && $texte_en != '') {
			    // move_uploaded_file($tmpName, './upload/'.$name);  DEPLACER LE FICHIER
				$modif_visiter = $cnx -> exec("UPDATE visiter SET titre_fr = '".$titre_fr."', titre_en = '".$titre_en."', texte_fr = '".$texte_fr."', texte_en = '".$texte_en."', image = '".$filename."' WHERE titre_fr = '".$input_titre."';");
				//header("Location: admin.php?isModif=true");
			}
			//header("Location: admin.php?isModif=false");
		}

		// Code pour supprimer un monument
		if ($_GET['action'] == "supp-visiter") {
			$input_titre = $_POST['supp_titre'];

			if ($input_titre != '') {
				$supprimer_visiter = $cnx -> exec("DELETE FROM visiter WHERE titre_fr = LOWER('".$input_titre."');");
				//header("Location: admin.php?isDeleted=true");
			}
			//header("Location: admin.php?isDeleted=false");
		}



		// Code pour ajouter une image
		if ($_GET['action'] == "ajout-galerie") {
			$filename = $_POST['UploadFileName'];
			$alt = $_POST['alt'];
			$desc_fr = $_POST['desc_fr'];
			$desc_en = $_POST['desc_en'];
			$nom_auteur = $_POST['nom_auteur'];
			$site_auteur = $_POST['site_auteur'];

			if ($filename != '' && $alt != '' && $desc_fr != '' && $desc_en != '') {
				$ajouter_galerie = $cnx -> exec("INSERT INTO galerie (image, desc_fr, desc_en, nom_auteur, site_auteur, alt) VALUES ('".$filename."', '".$desc_fr."', '".$desc_en."', '".$nom_auteur."', '".$site_auteur."', '".$alt."');");
				//header("Location: admin.php?isAdded=true");
			}
			//header("Location: admin.php?isAdded=false");
		}

		// Code pour modifier une image
	    if ($_GET['action'] == "modif-galerie") {
	    	$input_alt = $_POST['modif_alt'];
	    	if (!empty($_POST['UploadFileName'])) {
		    	$filename = $_POST['UploadFileName'];
	    	}
			$alt = $_POST['alt'];
			$desc_fr = $_POST['desc_fr'];
			$desc_en = $_POST['desc_en'];
			$nom_auteur = $_POST['nom_auteur'];
			$site_auteur = $_POST['site_auteur'];

			// Si tout est rempli et que l'extension est valide, on insère le contenu dans la BDD
			if ($input_alt != '') {
			    // move_uploaded_file($tmpName, './upload/'.$name);  DEPLACER LE FICHIER
				echo 'vu bg';
				$modif_galerie = $cnx -> exec("UPDATE galerie SET image = '".$filename."', desc_fr = '".$desc_fr."', desc_en = '".$desc_en."', nom_auteur = '".$nom_auteur."', site_auteur = '".$site_auteur."', alt = '".$alt."' WHERE alt = '".$input_alt."';");
				//header("Location: admin.php?isModif=true");
			}
			//header("Location: admin.php?isModif=false");
		}

		// Code pour supprimer une image
		if ($_GET['action'] == "supp-galerie") {
			$input_alt = $_POST['supp_alt'];

			if ($input_alt != '') {
				$supprimer_visiter = $cnx -> exec("DELETE FROM galerie WHERE alt = LOWER('".$input_alt."');");
				//header("Location: admin.php?isDeleted=true");
			}
			//header("Location: admin.php?isDeleted=false");
		}
	}

	// Si on vient de la page Contact (envoi du mail)
	if ($_GET['page'] == "contact") {
		if(!empty($_POST['sujet']) && !empty($_POST['message'])){
			$entete  = 'MIME-Version: 1.0' . "\r\n";
			$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	        $entete .= 'From: ' . $_POST['mail'] . "\r\n";

	        $message = '
	        <h1>Message envoyé depuis le site Petra</h1>
	        <p>
	        	<b>Nom : </b>' . $_POST['nom'] . '<br>
	        	<b>Email : </b>' . $_POST['mail'] . '<br>
	        	<b>Message : </b>' . $_POST['message'] . '
	        </p>';

	        $retour = mail('alf2002@hotmail.fr', 'Petra - Médiation culturelle et numérique', $message, $entete);
		}
	    header("Location: contact.php?isSent=true#beacon-form");
	}
?>