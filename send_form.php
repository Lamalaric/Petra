<?php

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
			$filename = "images/".$_FILES['UploadFileName']['name'];
			$alt = $_POST['alt'];
			$titre_fr = $_POST['titre_fr'];
			$titre_en = $_POST['titre_en'];
			$texte_fr = $_POST['texte_fr'];
			$texte_en = $_POST['texte_en'];

			// Si tout est rempli et que l'extension est valide, on insère le contenu dans la BDD
			if ($titre_fr != '' && $titre_en != '' && $texte_fr != '' && $texte_en != '') {
				if (!file_exists($filename)) {
					move_uploaded_file($_FILES["UploadFileName"]["tmp_name"], $filename);
				}
				$ajout_visiter = $cnx -> exec("INSERT INTO visiter (titre_fr, titre_en, texte_fr, texte_en, image, alt) VALUES ('".$titre_fr."', '".$titre_en."', '".$texte_fr."', '".$texte_en."', '".$filename."', '".$alt."');");
				header("Location: admin.php?isAdded=true");
			}
			header("Location: admin.php?isAdded=false");
		}

		// Code pour modifier un monument
	    if ($_GET['action'] == "modif-visiter") {
	    	$input_titre = $_POST['modif_titre'];
			$filename = "images/".$_FILES['UploadFileName']['name'];
			$titre_fr = $_POST['titre_fr'];
			$titre_en = $_POST['titre_en'];
			$texte_fr = $_POST['texte_fr'];
			$texte_en = $_POST['texte_en'];

			// Si tout est rempli et que l'extension est valide, on modifie le contenu dans la BDD
			if ($titre_fr != '' && $titre_en != '' && $texte_fr != '' && $texte_en != '') {
				if (!file_exists($filename)) {
					move_uploaded_file($_FILES["UploadFileName"]["tmp_name"], $filename);
				}
				$modif_visiter = $cnx -> exec("UPDATE visiter SET titre_fr = '".$titre_fr."', titre_en = '".$titre_en."', texte_fr = '".$texte_fr."', texte_en = '".$texte_en."', image = '".$filename."' WHERE titre_fr = '".$input_titre."';");
				header("Location: admin.php?isModif=true");
			}
			header("Location: admin.php?isModif=false");
		}

		// Code pour supprimer un monument
		if ($_GET['action'] == "supp-visiter") {
			$input_titre = $_POST['supp_titre'];

			if ($input_titre != '') {
				$supprimer_visiter = $cnx -> exec("DELETE FROM visiter WHERE titre_fr = LOWER('".$input_titre."');");
				header("Location: admin.php?isDeleted=true");
			}
			header("Location: admin.php?isDeleted=false");
		}



		// Code pour ajouter une image
		if ($_GET['action'] == "ajout-galerie") {
			$filename = "images/".$_FILES['UploadFileName']['name'];
			$alt = $_POST['alt'];
			$titre_fr = $_POST['titre_fr'];
			$titre_en = $_POST['titre_en'];
			$desc_fr = $_POST['desc_fr'];
			$desc_en = $_POST['desc_en'];
			$nom_auteur = $_POST['nom_auteur'];
			$site_auteur = $_POST['site_auteur'];

			if ($filename != '' && $alt != '' && $desc_fr != '' && $desc_en != '') {
				// Si le fichier n'existe pas déjà, alors on l'ajoute dans le dossier image.
				if (!file_exists($filename)) {
					move_uploaded_file($_FILES["UploadFileName"]["tmp_name"], $filename);
				}
				$ajouter_galerie = $cnx -> exec("INSERT INTO galerie (image, desc_fr, desc_en, nom_auteur, site_auteur, alt, titre_fr, titre_en) VALUES ('".$filename."', '".$desc_fr."', '".$desc_en."', '".$nom_auteur."', '".$site_auteur."', '".$alt."', '".$titre_fr."', '".$titre_en."');");
				header("Location: admin.php?isAdded=true");
			}
			header("Location: admin.php?isAdded=false");
		}

		// Code pour modifier une image
	    if ($_GET['action'] == "modif-galerie") {
	    	$input_alt = $_POST['modif_alt'];
	    	$filename = "images/".$_FILES['UploadFileName']['name'];
			$alt = $_POST['alt'];
			$desc_fr = $_POST['desc_fr'];
			$desc_en = $_POST['desc_en'];
			$nom_auteur = $_POST['nom_auteur'];
			$site_auteur = $_POST['site_auteur'];

			// Si tout est rempli et que l'extension est valide, on insère le contenu dans la BDD
			if ($input_alt != '') {
				if (!file_exists($filename)) {
					move_uploaded_file($_FILES["UploadFileName"]["tmp_name"], "images/".$filename);
				}
				$modif_galerie = $cnx -> exec("UPDATE galerie SET image = '".$filename."', desc_fr = '".$desc_fr."', desc_en = '".$desc_en."', nom_auteur = '".$nom_auteur."', site_auteur = '".$site_auteur."', alt = '".$alt."' WHERE alt = '".$input_alt."';");
				header("Location: admin.php?isModif=true");
			}
			header("Location: admin.php?isModif=false");
		}

		// Code pour supprimer une image
		if ($_GET['action'] == "supp-galerie") {
			$input_alt = $_POST['supp_alt'];

			if ($input_alt != '') {
				$supprimer_visiter = $cnx -> exec("DELETE FROM galerie WHERE alt = LOWER('".$input_alt."');");
				// Supprimer l'image des fichiers
				$image = $cnx -> query("SELECT image FROM galerie WHERE alt = '".$input_alt."';");
				unlink($image);
				header("Location: admin.php?isDeleted=true");
			}
			header("Location: admin.php?isDeleted=false");
		}



		// Code pour ajouter un paragraphe histoire
		if ($_GET['action'] == "ajout-histoire") {
			$filename = $_FILES['UploadFileName']['name'];
			$alt = $_POST['alt'];
			$titre_fr = $_POST['titre_fr'];
			$titre_en = $_POST['titre_en'];
			$texte_fr = $_POST['texte_fr'];
			$texte_en = $_POST['texte_en'];

			// Si tout est rempli, on insère le contenu dans la BDD
			if ($titre_fr != '' && $titre_en != '' && $texte_fr != '' && $texte_en != '') {
				if (!file_exists("images/".$filename)) {
					move_uploaded_file($_FILES["UploadFileName"]["tmp_name"], "images/".$filename);
				}
				$ajout_histoire = $cnx -> exec("INSERT INTO histoire (titre_fr, titre_en, texte_fr, texte_en, image, alt) VALUES ('".$titre_fr."', '".$titre_en."', '".$texte_fr."', '".$texte_en."', '".$filename."', '".$alt."');");
				header("Location: admin.php?isAdded=true");
			}
			header("Location: admin.php?isAdded=false");
		}

		// Code pour modifier un paragraphe histoire
	    if ($_GET['action'] == "modif-histoire") {
	    	$input_titre = $_POST['modif_titre'];
	    	$filename = $_FILES['UploadFileName']['name'];
			$alt = $_POST['alt'];
			$titre_fr = $_POST['titre_fr'];
			$titre_en = $_POST['titre_en'];
			$texte_fr = $_POST['texte_fr'];
			$texte_en = $_POST['texte_en'];

			// Si tout est rempli et que l'extension est valide, on modifie le contenu dans la BDD
			if ($titre_fr != '' && $titre_en != '' && $texte_fr != '' && $texte_en != '') {
				if (!file_exists($filename)) {
					move_uploaded_file($_FILES["UploadFileName"]["tmp_name"], $filename);
				}
				$modif_visiter = $cnx -> exec("UPDATE histoire SET titre_fr = '".$titre_fr."', titre_en = '".$titre_en."', texte_fr = '".$texte_fr."', texte_en = '".$texte_en."', image = '".$filename."', alt = '".$alt."' WHERE titre_fr = '".$input_titre."';");
				header("Location: admin.php?isModif=true");
			}
			header("Location: admin.php?isModif=false");
		}

		// Code pour supprimer un paragraphe histoire
		if ($_GET['action'] == "supp-histoire") {
			$input_titre = $_POST['supp_titre'];

			if ($input_titre != '') {
				$supprimer_visiter = $cnx -> exec("DELETE FROM histoire WHERE titre_fr = LOWER('".$input_titre."');");
				// Supprimer l'image des fichiers
				$image = $cnx -> query("SELECT image FROM histoire WHERE alt = '".$input_titre."';");
				unlink($image);
				header("Location: admin.php?isDeleted=true");
			}
			header("Location: admin.php?isDeleted=false");
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