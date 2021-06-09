<?php
	$page = "visiter";
	include("includes/header.inc.php");
?>

<body class="container-v">
	<main>
		<div class="big-picture">
			<h1><?php echo $visiter_h1[$langue]; ?></h1>
			<span id="beacon-kazneh"></span>
		</div>
		

		<div class="kazneh" id="kazneh">
			<div class="image kazneh-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_1_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_1_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-deir"></span>
		</div>

		<div class="ad-deir" id="ad-deir">
			<div class="image ad-deir-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_2_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_2_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-theatre"></span>
		</div>

		<div class="theatre" id="theatre">
			<div class="image theatre-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_3_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_3_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-aqueducs"></span>
		</div>

		<div class="aqueducs" id="aqueducs">
			<div class="image aqueducs-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_4_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_4_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-columbarium"></span>
		</div>

		<div class="columbarium" id="columbarium">
			<div class="image columbarium-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_5_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_5_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-tombe-soldat"></span>
		</div>

		<div class="tombe-soldat" id="tombe-soldat">
			<div class="image tombe-soldat-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_6_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_6_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-al-khubtha"></span>
		</div>

		<div class="al-khubtha" id="al-khubtha">
			<div class="image al-khubtha-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_7_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_7_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-tombes-royales"></span>
		</div>

		<div class="tombes-royales" id="tombes-royales">
			<div class="image tombes-royales-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_8_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_8_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-al-bint"></span>
		</div>

		<div class="al-bint" id="al-bint">
			<div class="image al-bint-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_9_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_9_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-fontaine"></span>
		</div>

		<div class="fontaine" id="fontaine">
			<div class="image fontaine-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_10_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_10_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-nymphaeum"></span>
		</div>

		<div class="nymphaeum" id="nymphaeum">
			<div class="image nymphaeum-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_11_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_11_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-grand-temple"></span>
		</div>

		<div class="grand-temple" id="grand-temple">
			<div class="image grand-temple-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_12_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_12_texte[$langue]; ?>
				</p>
			</div>
		</div>

		<div class="unayshu" id="unayshu">
			<div class="image unayshu-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_13_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_13_texte[$langue]; ?>
				</p>
			</div>
		</div>

		<div class="obelisque" id="obelisque">
			<div class="image obelisque-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_14_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_14_texte[$langue]; ?>
				</p>
			</div>
		</div>

		<?php 
			/*
			 * Ajout des monuments à visiter ajoutés depuis la base de donnée
			 */

			// Connexion à la BDD
			include("includes/connexion.inc.php");
		    $cnx->exec("SET SEARCH_PATH TO petra");

		    // On lit toutes les entrées de la table VISITER
		    $requete = "SELECT titre_fr FROM visiter;";
            $result = $cnx->query($requete);
            while($ligne = $result->fetch()){
            	// Pour chaque entrée, on récupère le champs que l'on veut
            	$titre_fr = $cnx -> query("SELECT titre_fr FROM visiter WHERE titre_fr = '".$ligne[0]."';") -> fetch()[0];
            	$titre_en = $cnx -> query("SELECT titre_en FROM visiter WHERE titre_fr = '".$ligne[0]."';") -> fetch()[0];
            	$texte_fr = $cnx -> query("SELECT texte_fr FROM visiter WHERE titre_fr = '".$ligne[0]."';") -> fetch()[0];
            	$texte_en = $cnx -> query("SELECT texte_en FROM visiter WHERE titre_fr = '".$ligne[0]."';") -> fetch()[0];
            	$image = $cnx -> query("SELECT image FROM visiter WHERE titre_fr = '".$ligne[0]."';") -> fetch()[0];

            	// On prend un texte différent selon la langue puis on affiche l'élément
            	$titre = [$titre_fr, $titre_en];
            	$texte = [$texte_fr, $texte_en];
			    echo '
			    <div>
					<div class="image"></div>		
					<div class="text-plus-title">
						<h3>'.$titre[$langue].'</h3>
						<p>
							'.$texte[$langue].'
						</p>
					</div>
				</div>';
				// AJOUTER style="background-image=url(\"'.$image.'\");" POUR L'IMAGE
				// Nécéssite un bon chemin d'image (voir send_form.php)
		    }
		 ?>
	</main>


	<?php
		include("includes/footer.inc.php");
	?>
</body>
</htmls>