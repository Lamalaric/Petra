<?php
	$page = "galerie";
	include("includes/header.inc.php");
?>


<body class="container-g">
	<main>
		<div class="big-picture">
			<h1><?php echo $galerie_h1[$langue]; ?></h1>
		</div>

		<div class="container-images">
			<div>
				<img src="images/kazneh.png" alt="Al-Kazneh"></img>
				<p><?php echo $galerie_img1[$langue]; ?></p>
			</div>
			<div>
				<img src="images/accueil.jpeg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img2[$langue]; ?></p>
			</div>
			<div>
				<img src="images/al_kazneh.jpg" alt="Al-Kazneh_2"></img>
				<p><?php echo $galerie_img3[$langue]; ?></p>
			</div>
			<div>
				<img src="images/aqueducs.jpg" alt="Aqueducs"></img>
				<p><?php echo $galerie_img4[$langue]; ?></p>
			</div>
			<div>
				<img src="images/caravane_chameaux.jpg" alt="Caravane de chameaux"></img>
				<p><?php echo $galerie_img5[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image1.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img6[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image2.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img7[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image3.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img8[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image4.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img9[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image5.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img10[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image6.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img11[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image7.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img12[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image8.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img13[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image9.png" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img14[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image10.png" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img15[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image11.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img16[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image12.png" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img17[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image13.png" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img18[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image14.jpg" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img19[$langue]; ?></p>
			</div>
			<div>
				<img src="images/image15.png" alt="Ad-Deir"></img>
				<p><?php echo $galerie_img20[$langue]; ?></p>
			</div>

			<?php 
				/*
				 * Ajout des images ajoutées depuis la base de donnée
				 */

				// Connexion à la BDD
				include("includes/connexion.inc.php");
			    $cnx->exec("SET SEARCH_PATH TO petra");

			    // On lit toutes les entrées de la table GALERIE
			    $requete = "SELECT image FROM galerie;";
	            $result = $cnx->query($requete);
	            while($ligne = $result->fetch()){
	            	// Pour chaque entrée, on récupère le champs que l'on veut
	            	$image = $cnx -> query("SELECT image FROM galerie WHERE image = '".$ligne[0]."';") -> fetch()[0];
	            	$alt = $cnx -> query("SELECT alt FROM galerie WHERE image = '".$ligne[0]."';") -> fetch()[0];
	            	$desc_fr = $cnx -> query("SELECT desc_fr FROM galerie WHERE image = '".$ligne[0]."';") -> fetch()[0];
	            	$desc_en = $cnx -> query("SELECT desc_en FROM galerie WHERE image = '".$ligne[0]."';") -> fetch()[0];
	            	$nom_auteur = $cnx -> query("SELECT nom_auteur FROM galerie WHERE image = '".$ligne[0]."';") -> fetch()[0];
	            	$site_auteur = $cnx -> query("SELECT site_auteur FROM galerie WHERE image = '".$ligne[0]."';") -> fetch()[0];

	            	// On prend un texte différent selon la langue puis on affiche l'élément
	            	$description = [$desc_fr, $desc_en];
				    echo '
				    <div>
						<img src="'.$image.'" alt="'.$alt.'"></img>
						<p>'.$description[$langue].'</p>
					</div>';
					// Ajouter la partie auteur
					// Nécéssite un bon chemin d'image (voir send_form.php)
			    }
			 ?>

		</div>
	</main>


	<?php
		include("includes/footer.inc.php");
	?>
</body>
</html>