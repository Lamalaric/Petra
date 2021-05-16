<?php
	$page = "contact";
	include("header.inc.php");
?>


<body class="container-c">
	<main>
		<div class="container-staff">
			<div id="virgule-titre"><h2>À propos de nous</h2></div>
			<p>Ce site web a été créé dans le cadre de notre projet tutoré de notre première année de DUT informatique. Il vise avant tout la création d’une médiation culturelle et numérique, et a été réalisé en collaboration avec l’UNESCO.</p>
			<div id="virgule-ss-titre"><h3>Notre groupe</h3></div>
			<div class="auteurs">
				<div>
					<div class="img-ama"></div>
					<p>Amalaric Le Forestier</p>
					<span class="reseaux">
						<a href="https://www.linkedin.com/in/amalaric-le-forestier-61a513202/" class="linkedin"><span></span></a>
						<a href="https://github.com/Lamalaric" class="github"><span></span></a>
						<a href="https://www.instagram.com/lamalaric/" class="instagram"><span></span></a>
					</span>
					<p class="role">Chef de projet<br>Lead developpeur<br>Designer</p>
				</div>
				<div>
					<div class="img-bastou"></div>
					<p>Bastien Corgnac</p>
					<span class="reseaux">
						<a href="https://www.linkedin.com/in/bastien-corgnac/" class="linkedin"><span></span></a>
						<a href="https://github.com/Bastien-crg" class="github"><span></span></a>
					</span>
					<p class="role">Lead recherches<br>Développeur<br>Designer</p>
				</div>
				<div>
					<div class="img-dydy"></div>
					<p>Dylan Chalier</p>
					<span class="reseaux">
						<a href="https://www.linkedin.com/in/dylan-chalier-435080206/" class="linkedin"><span></span></a>
						<a href="https://github.com/DylanChalier" class="github"><span></span></a>
					</span>
					<p class="role">Recherches<br>Concepteur</p>
				</div>
				<div id="virgule-ss-titre" class="deux-ss-titre"><h3>Nos contenus</h3></div>
				<p>Vous avez aimé votre voyage à Petra et vous souhaitez le montrer au monde entier ? Empressez-vous d'essayer notre filtre snapchat et de l'envoyer à tous vos proches !</p>
				<img src="images/snapcode.png" alt="Snapcode">
			</div>
		</div>

		<div class="container-form">
			<div id="virgule-titre"><h2>Nous contacter</h2></div>
			<div class="formulaire">
				<form>
					<p>Une question ? Besoin d'aide ? N'hésitez pas à nous écrire, nous serons ravis de vous répondre.</p>
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


	<div id="goto_top">								<!-- Retour haut de page -->
		<a href="#"><img src="images/fleche_haut.jpg" alt="Flèche retour haut de page" /></a>
	</div>


	<?php
		include("footer.inc.php");
	?>
</body>
</html>