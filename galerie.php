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
				<img src="images/alexandre1.jpg" alt=""></img>
				<?php echo $galerie_alex1[$langue]; ?>
			</div>
			<div>
				<img src="images/alexandre2.jpg" alt=""></img>
				<?php echo $galerie_alex2[$langue]; ?>
			</div>
			<div>
				<img src="images/alexandre3.jpg" alt=""></img>
				<?php echo $galerie_alex3[$langue]; ?>
			</div>
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
			<div>
				<img src="images/tombeau_obelisques.jpg" alt="Tombeau aux obelisques"></img>
				<p><?php echo $galerie_img21[$langue]; ?></p>
			</div>
			<div>
				<img src="images/unayshu.jpg" alt="Unayshu"></img>
				<p><?php echo $galerie_img22[$langue]; ?></p>
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
		<div class="credits-images">
			<h2>Crédits</h2>
			<p>
				<?php echo $galerie_credits_info[$langue]; ?>
				<?php echo "<a href=\"contact.php?lang=".$langue."#beacon-formulaire\" target='_blank'>".$galerie_credits_info_ici[$langue]."</a>"; ?>
			</p>
			<div>
				<h3>Alexandre Carpentier</h3>
				<p>Photographe professionnel</p>
				<p>Site web : <i class="fas fa-globe-americas"></i> <a href="https://www.alexandre-carpentier.com" target="_blank">www.alexandre-carpentier.com</a></p>
				<p class="reseaux-auteur">
					Réseaux :
					<a href="https://www.facebook.com/alexandrecarpentierphotography/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.flickr.com/photos/alex_carpentier/" target="_blank"><i class="fab fa-flickr"></i></a>
					<a href="https://www.instagram.com/alexandre.carpentier/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
					<a href="https://vimeo.com/alpslapse" target="_blank"><i class="fab fa-vimeo"></i></a>
					<a href="https://www.youtube.com/channel/UC92rk3jfjSdW7f7s0Fc16ig" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
				</p>
			</div>
		</div>
	</main>


	<?php
		include("includes/footer.inc.php");
	?>
</body>
</html>