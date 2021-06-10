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
			<div class="slider">
				<div class="slides">
					<div class="image kazneh-img" id="slide1_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1722.01193977304!2d35.45137436614536!3d30.321838596222776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh!5e0!3m2!1sfr!2sfr!4v1623285698302!5m2!1sfr!2sfr" width="364" height="301" id="slide1_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide1_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide1_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_1_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_1_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-deir"></span>
		</div>

		<div class="ad-deir" id="ad-deir">
			<div class="slider">
				<div class="slides">
					<div class="image ad-deir-img" id="slide2_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.446642532097!2d35.428805251027946!3d30.338253911497752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016e570fc29f7b%3A0x90411b0e75179d49!2sDeir!5e0!3m2!1sfr!2sfr!4v1623286781633!5m2!1sfr!2sfr" width="364" height="301" id="slide2_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide2_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide2_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_2_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_2_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-theatre"></span>
		</div>

		<div class="theatre" id="theatre">
			<div class="slider">
				<div class="slides">
					<div class="image theatre-img" id="slide3_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.731244324785!2d35.44470195102791!3d30.324771612140147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016eedb8afcaff%3A0x3e34f6d53e720c78!2zVGjDqcOidHJlIG5hYmF0w6llbg!5e1!3m2!1sfr!2sfr!4v1623287002038!5m2!1sfr!2sfr" width="364" height="301" id="slide3_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide3_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide3_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_3_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_3_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-aqueducs"></span>
		</div>

		<div class="aqueducs" id="aqueducs">
			<div class="slider">
				<div class="slides">
					<div class="image aqueducs-img" id="slide4_1"></div>
				</div>
				<div class="slide-links">
					<a href="#slide4_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_4_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_4_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-columbarium"></span>
		</div>

		<div class="columbarium" id="columbarium">
			<div class="slider">
				<div class="slides">
					<div class="image columbarium-img" id="slide5_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.549671396516!2d35.43717885102775!3d30.3289952119389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016ef6a93297b9%3A0x15faadc615dca38d!2sColumbarium!5e1!3m2!1sfr!2sfr!4v1623287589242!5m2!1sfr!2sfr" id="slide5_2" width="364" height="301" style="border:0;" allowfullscreen="" loading="lazy">
				</div>
				<div class="slide-links">
					<a href="#slide5_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide5_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_5_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_5_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-tombe-soldat"></span>
		</div>

		<div class="tombe-soldat" id="tombe-soldat">
			<div class="slider">
				<div class="slides">
					<div class="image tombe-soldat-img" id="slide6_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.901257967645!2d35.4426834510277!3d30.320816412328554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016e8d5df0b737%3A0x69accbd865cd45a7!2sTombe%20du%20soldat%20romain!5e1!3m2!1sfr!2sfr!4v1623287144333!5m2!1sfr!2sfr" width="364" height="301" id="slide6_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide6_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide6_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_6_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_6_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-al-khubtha"></span>
		</div>

		<div class="al-khubtha" id="al-khubtha">
			<div class="slider">
				<div class="slides">
					<div class="image al-khubtha-img" id="slide7_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2105.3132726397675!2d35.447363858721914!3d30.327207099999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016fc5ec55f107%3A0x16b2f3f8816f3221!2sAl-Khubtha%20Trail!5e1!3m2!1sfr!2sfr!4v1623287193360!5m2!1sfr!2sfr" width="364" height="301" id="slide7_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide7_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide7_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_7_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_7_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-tombes-royales"></span>
		</div>

		<div class="tombes-royales" id="tombes-royales">
			<div class="slider">
				<div class="slides">
					<div class="image tombes-royales-img" id="slide8_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2105.300345052102!2d35.44781417598115!3d30.327808510574016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016ef1c2143fd1%3A0x618e450a01f1e291!2sTombes%20royales!5e1!3m2!1sfr!2sfr!4v1623287219818!5m2!1sfr!2sfr" width="364" height="301" id="slide8_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide8_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide8_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_8_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_8_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-al-bint"></span>
		</div>

		<div class="al-bint" id="al-bint">
			<div class="slider">
				<div class="slides">
					<div class="image al-bint-img" id="slide9_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.528720855281!2d35.43790355102783!3d30.329482511915653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016ef136099c87%3A0x9da47d586c0ecf87!2sQasr%20al-Bint!5e1!3m2!1sfr!2sfr!4v1623287243585!5m2!1sfr!2sfr" width="364" height="301" id="slide9_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide9_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide9_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_9_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_9_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-fontaine"></span>
		</div>

		<div class="fontaine" id="fontaine">
			<div class="slider">
				<div class="slides">
					<div class="image fontaine-img" id="slide10_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.927915346063!2d35.444167751027784!3d30.320196212357963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016e9296919c3d%3A0x7519a73aaaee52ce!2sFontaine%20au%20lion!5e1!3m2!1sfr!2sfr!4v1623287264296!5m2!1sfr!2sfr" width="364" height="301" id="slide10_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide10_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide10_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_10_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_10_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-nymphaeum"></span>
		</div>

		<div class="nymphaeum" id="nymphaeum">
			<div class="slider">
				<div class="slides">
					<div class="image nymphaeum-img" id="slide11_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.548205341465!2d35.44283695102781!3d30.32902931193725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016ef1d6c5cd83%3A0x344023fd11ed1f73!2sNymphaeum!5e1!3m2!1sfr!2sfr!4v1623287284047!5m2!1sfr!2sfr" width="364" height="301" id="slide11_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide11_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide11_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_11_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_11_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-grand-temple"></span>
		</div>

		<div class="grand-temple" id="grand-temple">
			<div class="slider">
				<div class="slides">
					<div class="image grand-temple-img" id="slide12_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.5629432111855!2d35.440116451027926!3d30.328686511953624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016ef176a305f5%3A0x45c9a797ccb7f394!2sGrand%20Temple!5e1!3m2!1sfr!2sfr!4v1623287303632!5m2!1sfr!2sfr" width="364" height="301" id="slide12_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide12_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide12_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_12_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_12_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-unayshu"></span>
		</div>

		<div class="unayshu" id="unayshu">
			<div class="slider">
				<div class="slides">
					<div class="image unayshu-img" id="slide13_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.74421355822!2d35.44688005102787!3d30.32446991215449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016eec38b3b245%3A0x6cc17a299af9cbf9!2sTomb%20of%20&#39;Unayshu!5e1!3m2!1sfr!2sfr!4v1623287324933!5m2!1sfr!2sfr" width="364" height="301" id="slide13_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide13_1" class="slide-link"><i class="far fa-dot-circle"></i></a>
					<a href="#slide13_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_13_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_13_texte[$langue]; ?>
				</p>
			</div>
			<span id="beacon-obelisque"></span>
		</div>

		<div class="obelisque" id="obelisque">
			<div class="slider">
				<div class="slides">
					<div class="image obelisque-img" id="slide14_1"></div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4210.883828537808!2d35.461136451027585!3d30.321221912309124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016ec151cbb82d%3A0x8b35ed81160d00c!2sTombe%20aux%20ob%C3%A9lisques!5e1!3m2!1sfr!2sfr!4v1623287364995!5m2!1sfr!2sfr" width="364" height="301" id="slide14_2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="slide-links">
					<a href="#slide14_1" class="slide-link" style="background-image: url('');"><i class="far fa-dot-circle"></i></a>
					<a href="#slide14_2" class="slide-link"><i class="far fa-dot-circle"></i></a>
				</div>
			</div>
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
					<div class="slider">
						<div class="slides">
							<div class="image" style="background-image: url(\''.$image.'\');"></div>
						</div>
						<div class="slide-links">
							<a href="" class="slide-link"><i class="far fa-dot-circle"></i></a>
						</div>
					</div>
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