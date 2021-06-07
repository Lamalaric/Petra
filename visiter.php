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
				<h3>Columbarium</h3>
				<p>
					L'utilisation de ce monument très étrange est inconnue.<br>
					Contrairement à ce que son nom indique, il ne s'agissait pas d'un pigeonnier pour les pigeons mais probablement d'un lieu pour y conservées les urnes cinéraires.
				</p>
			</div>
			<span id="beacon-tombe-soldat"></span>
		</div>

		<div class="tombe-soldat" id="tombe-soldat">
			<div class="image tombe-soldat-img"></div>
			<div class="text-plus-title">
				<h3>Tombe du soldat romain</h3>
				<p>
					Il fut nommé ainsi à tort, car le soldat représenté dans la niche centrale, au dessus de la porte, était sans doute nabatéen. Le tombeau constituait un ensemble avec le triclinium qui se trouve en face.
				</p>
			</div>
			<span id="beacon-al-khubtha"></span>
		</div>

		<div class="al-khubtha" id="al-khubtha">
			<div class="image al-khubtha-img"></div>
			<div class="text-plus-title">
				<h3>Al-Khubtha</h3>
				<p>
					Al-Khubtha est une grande montagne dans laquelle sont creusées 4 tombes : les tombes royales. Le Tombeau à Étages, les Tombeau Corinthien, le Tombeau de la Soie et le Tombeau à l'Urne.
				</p>
			</div>
			<span id="beacon-tombes-royales"></span>
		</div>

		<div class="tombes-royales" id="tombes-royales">
			<div class="image tombes-royales-img"></div>
			<div class="text-plus-title">
				<h3>Tombes royales</h3>
				<p>
					Au nombre de quatre, ces tombes sont creusées dans la roche. Malgré le nom du monument, il ne semblerait qu'aucun élément ne permette d'identifier qu'un quelconque monarque y soit enterré. Cependant, au vu de l'importance des tombes, on imagine qu'elles devaient appartenir à de hauts dignitaires du royaume.
				</p>
			</div>
			<span id="beacon-al-bint"></span>
		</div>

		<div class="al-bint" id="al-bint">
			<div class="image al-bint-img"></div>
			<div class="text-plus-title">
				<h3>Qasr Al-Bint</h3>
				<p>
					Le Qasr al-Bint était l'un des principaux temples de la cité de Pétra et est l'une des rares structures construites encore relativement intacte. Si le nom donné par les bédouins (Qasr al-Bint Firaun) signifie « le palais de la fille du Pharaon », il s'agissait en fait du plus grand lieu de culte de la cité.
				</p>
			</div>
			<span id="beacon-fontaine"></span>
		</div>

		<div class="fontaine" id="fontaine">
			<div class="image fontaine-img"></div>
			<div class="text-plus-title">
				<h3>Fontaine au lion</h3>
				<p>
					On peut y apercevoir un très grand lion gravé dans la roche.
				</p>
			</div>
			<span id="beacon-nymphaeum"></span>
		</div>

		<div class="nymphaeum" id="nymphaeum">
			<div class="image nymphaeum-img"></div>
			<div class="text-plus-title">
				<h3>Nymphaeum</h3>
				<p>
					C'est un petit temple pourvu d'une fontaine ou grotte ayant une source consacré aux nymphes.
				</p>
			</div>
			<span id="beacon-grand-temple"></span>
		</div>

		<div class="grand-temple" id="grand-temple">
			<div class="image grand-temple-img"></div>
			<div class="text-plus-title">
				<h3>Grand temple</h3>
				<p>
					Construit à l'extrémité ouest de l'allée des colonnes, le temple de Qasr el-Bint fut dédié au dieu nabatéen Dusarès et à son épouse al-Uzza. Par sa forme, le temple rappelle le temple de Bêl de Palmyre (qui fut détruit en 2015 au cours de la guerre en Syrie).
				</p>
			</div>
		</div>

		<div class="unayshu" id="unayshu">
			<div class="image unayshu-img"></div>
			<div class="text-plus-title">
				<h3>Tombe d'Unayshu</h3>
				<p>
					La tombe d'Unayshu date de la fin du 1er siècle après JC.<br>
					Le pilastre de coin de la tombe et ceux qui encadrent l'entrée sont un dessin typiquement nabatéen. La façade lisse est dans le même style que les tombes trouvées à Madâin Sâlih en Arabie Saoudite.
				</p>
			</div>
		</div>

		<div class="obelisque" id="obelisque">
			<div class="image obelisque-img"></div>
			<div class="text-plus-title">
				<h3>Tombeau à Obelisques</h3>
				<p>
					TBD
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