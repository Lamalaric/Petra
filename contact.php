<?php
	$page = "contact";
	include("header.inc.php");
?>


<body class="container-c">
	<main>
		<div class="container-staff">
			<h2><?php echo $contact_title1[$langue]; ?></h2>
			<h3><?php echo $contact_title1_subtitle1[$langue]; ?></h3>
			<p><?php echo $contact_title1_subtitle1_text[$langue]; ?></p>
			<div class="auteurs">
				<div>
					<div class="img-ama"></div>
					<p>Amalaric Le Forestier</p>
					<span class="reseaux">
						<a href="https://www.linkedin.com/in/amalaric-le-forestier-61a513202/" class="linkedin"><span></span></a>
						<a href="https://github.com/Lamalaric" class="github"><span></span></a>
						<a href="https://www.instagram.com/lamalaric/" class="instagram"><span></span></a>
					</span>
					<p class="role"><?php echo $contact_chef[$langue]; ?><br><?php echo $contact_chef_dev[$langue]; ?><br>Designer</p>
				</div>
				<div>
					<div class="img-bastou"></div>
					<p>Bastien Corgnac</p>
					<span class="reseaux">
						<a href="https://www.linkedin.com/in/bastien-corgnac/" class="linkedin"><span></span></a>
						<a href="https://github.com/Bastien-crg" class="github"><span></span></a>
					</span>
					<p class="role"><?php echo $contact_chef_recherche[$langue]; ?><br><?php echo $contact_dev[$langue]; ?><br>Designer</p>
				</div>
				<div>
					<div class="img-dydy"></div>
					<p>Dylan Chalier</p>
					<span class="reseaux">
						<a href="https://www.linkedin.com/in/dylan-chalier-435080206/" class="linkedin"><span></span></a>
						<a href="https://github.com/DylanChalier" class="github"><span></span></a>
					</span>
					<p class="role"><?php echo $contact_recherche[$langue]; ?><br><?php echo $contact_concept[$langue]; ?></p>
				</div>
			</div>

			<div class="snap_credit">
				<div class="snap">
					<h3><?php echo $contact_title1_subtitle2[$langue]; ?></h3>
					<p><?php echo $contact_title1_subtitle2_text[$langue]; ?></p>
					<img src="images/snapcode.png" alt="Snapcode">
				</div>

				<div class="credits">
					<?php echo $contact_title1_subtitle3[$langue]; ?>
				</div>
				</div>			
		</div>

		<div class="container-partenaires">
			<h2><?php echo $contact_title2[$langue]; ?></h2>
			<div class="partenaires">
				<a href=""><span class="f-logoMCN"></span></a>
	            <a href="http://www.u-pem.fr" target="_blank"><span class="f-logoUPEM"></span></a>
	            <a href="https://fr.unesco.org" target="_blank"><span class="f-logoUNESCO"></span></a>
	            <a href="https://anr.fr" target="_blank"><span class="f-logoANR"></span></a>
	            <a href="http://idea.univ-paris-est.fr/fr" target="_blank"><span class="f-logoIDEA"></span></a>
			</div>
            
		</div>

		<div class="container-form">
			<h2><?php echo $contact_title3[$langue]; ?></h2>
			<div class="formulaire">
				<form>
					<p><?php echo $contact_title3_text[$langue]; ?></p>
					<input type="text" name="prenom" id="prenom" placeholder="Prénom">
					<input type="text" name="nom" id="nom" placeholder="Nom">
					<input type="text" name="mail" id="mail" placeholder="Adresse mail">
					<input type="text" name="titre" id="titre" placeholder="Sujet de votre message" required>
					<textarea rows="10" cols="100" placeholder="Écrivez votre message ici" required></textarea>
					<input type="submit" name="Submit">
				</form>
			</div>
		</div>
	</main>

	<?php
		include("footer.inc.php");
	?>
</body>
</html>