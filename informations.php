<?php
	$page = "informations";
	include("header.inc.php");
?>


<body class="container-if">
	<main>
		<div class="big-picture">
			<h1>Informations pratiques</h1>
		</div>

		<h2 id="plan">Plan du site</h2>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8577.923890256112!2d35.44819378417468!3d30.323710785533354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh!5e1!3m2!1sfr!2sfr!4v1619632907599!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>

		<h2 id="divers">Divers</h2>
		<p class="texte-horaires">
			Le site de Petra et son office de tourisme est ouverte de 6h00 à 18h00 en été, et de 6h00 à 16h00 en hiver.<br>
			Nous vous recommandons de réserver une chambre d'hôtel avant de débuter votre voyage.
		</p>
		<div class="divers">
			<div class="diplo">
				<h3 id="reco-diplo">Recommandations diplomatiques</h3>
				<p>
					Le Royaume hachémite de Jordanie, pôle de stabilité dans une région traversée par les crises, n’est cependant pas à l’abri de troubles, en particulier du risque terroriste. La Jordanie connaît une menace permanente d’attentats. Cette menace est prise en compte par les autorités jordaniennes qui continuent de se mobiliser pour prévenir le risque terroriste ou infiltrations aux frontières.
				</p>
				<p><u>Recommandations :</u></p>
				<ul>
					<li>
						La discrétion, y compris vestimentaire, doit être de mise aux abords des mosquées, notamment lors des rassemblements pour la prière du vendredi.
					</li>
					<li>
						Il est préférable d’éviter tout signe distinctif permettant d’être identifié comme français (drapeaux, logos français sur véhicules, vêtements, etc.).
					</li>
					<li>
						Il est recommandé aux femmes de ne pas voyager seules et de préférence de jour, et d’adopter une tenue sobre en public. De manière générale, les épaules dénudées, les shorts et les jupes sont à éviter.
					</li>
				</ul>
				<p><u>Zones de vigilance :</u></p>
				<ul>
					<li>
						Frontière entre la Jordanie et la Syrie.
					</li>
					<li>
						Frontière entre la Jordanie et l’Irak
					</li>
					<li>
						Péninsule du Sinaï (Égypte) depuis la Jordanie
					</li>
				</ul>
				<br>
				<p><u>Sources</u> : <a href="https://www.diplomatie.gouv.fr/fr/conseils-aux-voyageurs/conseils-par-pays-destination/jordanie/#securite">www.diplomatie.gouv.fr</a></p>
			</div>
			<div class="trad-mo">
				<h3 id="trad">Quelques traductions utiles</h3>
				<p>
					<u>Bonjour/Hello</u> : sabah alkhyr    صباح الخير<br><br>
					<u>Merci/Thank you</u> : ashkurak    اشكرك<br><br>
					<u>Au revoir/Good bye</u> : 'iilaa alliqa'    إلى اللقاء<br><br>
					<u>Manger/Eat</u> : 'akl    أكل<br><br>
					<u>Dormir/Sleep</u> : lilnuwm      للنوم<br><br>
					<u>Je ne parle pas arabe/I don’t speak arabia</u> : la 'atakalam alearabia      لا أتكلم العربية<br><br>
					<u>Parlez vous anglais/Do you speak english</u> : hal tatakalam al'iinjlizia    هل تتكلم الانجليزية<br><br>
					<u>Parlez vous français/Do you speak french</u> : hal tatakalam alfaransia    هل تتكلم الفرنسية<br><br>
				</p>
				<h3 id="convertisseur">Convertisseur de monnaie</h3>
				<div class="conv-monnaie" id="conv-monnaie">
					<?php 
						if ($langue == 0) {
							echo '<form method="post" action="'.$_SERVER["PHP_SELF"].'#convertisseur">';
						} else {
							echo '<form method="post" action="'.$_SERVER["PHP_SELF"].'?lang=1#convertisseur">';
						}
						
					?>				
						<?php
							error_reporting(0);
							if ($langue == 0) {				// Convertisseur euro --> jod (site fr)
								$eur=$_POST['euro'];
								$jod=$_POST['jod'];

								if (!empty($eur) && !empty($jod))
								{
									echo '<div class="mini-flex">';
									echo '<input type="text" name="euro" placeholder="Euro (€)">';
									echo '<span></span>';
									echo '<input type="text" name="jod" placeholder="Dinar jordanien (JOD)">';
									echo '</div>';
									echo '<input type="submit" name="convertir" value="Convertir">';
									echo '<p>Veuillez ne renseigner qu\'un seul champ.</p>';
								}
								elseif (empty($eur) && !empty($jod))
								{
									echo '<div class="mini-flex">';
									echo '<input type="text" name="euro" placeholder="'.$jod*1.16.' €">';
									echo '<span></span>';
									echo '<input type="text" name="jod" placeholder="'.$jod.' JOD">';
									echo '</div>';
									echo '<input type="submit" name="convertir" value="Convertir">';
								}
								elseif (!empty($eur) && empty($jod))
								{
									echo '<div class="mini-flex">';
									echo '<input type="text" name="euro" placeholder="'.$eur.' €">';
									echo '<span></span>';
									echo '<input type="text" name="jod" placeholder="'.$eur*0.86.' JOD">';
									echo '</div>';
									echo '<input type="submit" name="convertir" value="Convertir">';
								}
								else
								{
									echo '<div class="mini-flex">';
									echo '<input type="text" name="euro" placeholder="Euro (€)">';
									echo '<span></span>';
									echo '<input type="text" name="jod" placeholder="Dinar jordanien (JOD)">';
									echo '</div>';
									echo '<input type="submit" name="convertir" value="Convertir">';
								}
							}

							if ($langue == 1) {				// Convertisseur dollars/livre --> jod (site en)
								$dol=$_POST['dol'];
								$liv=$_POST['liv'];
								$jod=$_POST['jod'];
								echo '
								<select name="monnaie">
									<option value="dol" selected>Dollars ($)</option>
									<option value="liv">Pound (£)</option>
								</select>
								';
								if (isset($_POST["monnaie"])) {			// Si on choisit de convertir en dollars
									if ($_POST["monnaie"] == "dol") {
										
										if (!empty($dol) && !empty($jod))
										{
											echo '
											<div class="mini-flex">
												<input type="text" name="dol" placeholder="Dollars ($)">
												<span></span>
												<input type="text" name="jod" placeholder="Dinar jordanien (JOD)">
											</div>
											<input type="submit" name="convertir" value="Convert">
											<p>Please only fill one field.</p>
											';
										}
										elseif (empty($dol) && !empty($jod))
										{
											echo '
											<div class="mini-flex">
												<input type="text" name="dol" placeholder="'.$jod*1.41.' $">
												<span></span>
												<input type="text" name="jod" placeholder="'.$jod.' JOD">
											</div>
											<input type="submit" name="convertir" value="Convert">
											';
										}
										elseif (!empty($dol) && empty($jod))
										{
											echo '
											<div class="mini-flex">
												<input type="text" name="dol" placeholder="'.$dol.' $">
												<span></span>
												<input type="text" name="jod" placeholder="'.$dol*0.71.' JOD">
											</div>
											<input type="submit" name="convertir" value="Convert">
											';
										} else {
											echo '
											<div class="mini-flex">
												<input type="text" name="dol" placeholder="Dollars ($)">
												<span></span>
												<input type="text" name="jod" placeholder="Dinar jordanien (JOD)">
											</div>
											<input type="submit" name="convertir" value="Convert">
											';
										}
									}
								}
								if (isset($_POST["monnaie"])) {			// Si on choisit de convertir en livre sterling
									if ($_POST["monnaie"] == "liv") {
										if (!empty($liv) && !empty($jod))
										{
											echo '
											<div class="mini-flex">
												<input type="text" name="liv" placeholder="Pound (£)">
												<span></span>
												<input type="text" name="jod" placeholder="Dinar jordanien (JOD)">
											</div>
											<input type="submit" name="convertir" value="Convert">
											<p>Please only fill one field.</p>
											';
										}
										elseif (empty($liv) && !empty($jod))
										{
											echo '
											<div class="mini-flex">
												<input type="text" name="liv" placeholder="'.$jod.' £">
												<span></span>
												<input type="text" name="jod" placeholder="'.$jod.' JOD">
											</div>
											<input type="submit" name="convertir" value="Convert">
											';
										}
										elseif (!empty($liv) && empty($jod))
										{
											echo '
											<div class="mini-flex">
												<input type="text" name="liv" placeholder="'.$liv.' £">
												<span></span>
												<input type="text" name="jod" placeholder="'.$liv.' JOD">
											</div>
											<input type="submit" name="convertir" value="Convert">
											';
										} else {
											echo '
											<div class="mini-flex">
												<input type="text" name="liv" placeholder="Pound (£)">
												<span></span>
												<input type="text" name="jod" placeholder="Dinar jordanien (JOD)">
											</div>
											<input type="submit" name="convertir" value="Convert">
											';
										}
									}
								}

								else
								{
									echo '
									<div class="mini-flex">
										<input type="text" name="dol" placeholder="Chose a currency">
										<span></span>
										<input type="text" name="jod" placeholder="Dinar jordanien (JOD)">
									</div>
									<input type="submit" name="convertir" value="Convert">
									';
								}
							}
						?>
					</form>
				</div>
			</div>
		</div>

		<!-- Recommandations diplomatiques -->
		<h2 id="alentours">Aux alentours</h2>
		<div class="autre">
			<div class="hotel">
				<h3 id="hotels">Hôtels</h3>
				<p>
					Besoin de vous loger ? Ne vous en faites pas ! Nous avons séléctionné pour vous les hôtels à proximité, classé par étoiles.
				</p>
				<div class="container-hotel">
					<div class="etoiles">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div>
						<img src="images/hotel-image1.jpg" alt="Movenpick hotel">
						<h3>Movenpick Resort Petra</h3>
						<h4>Les + :</h4>
						<ul>
							<li>L'hotel le plus proche de Petra</li>
							<li>Vue sur la vallée du grand rift</li>
							<li>Personnel accueillant</li>
							<li>SPA</li>
							<li>Piscine</li>
							<li>Excellents repas</li>
							<li>Propre</li>
						</ul>
						<h4>Tarifs :</h4>
						<p>Non renseignés.</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Tourism St Petra Wadi Musa, 71810, Jordanie<br><br>
							<u>Site web</u> : <a href="https://www.movenpick.com/fr/middle-east/jordan/petra/resort-petra/overview/" target="_blank">https://www.movenpick.com</a><br><br>
							<u>Mail</u> : <a href="mailto:resort.petra@movenpick.com">resort.petra@movenpick.com</a><br><br>
							<u>Téléphone</u> : +962 3 215 71 11<br><br>
						</p>
					</div>
					<div class="etoiles">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div>
						<img src="images/hotel-image2.jpg" alt="Petra Guest House hotel">
						<h3>Petra Guest House</h3>
						<h4>Les + :</h4>
						<ul>
							<li>Internet haut débit gratuit</li>
							<li>Divertissement le soir</li>
							<li>Room service</li>
							<li>Menus personnalisés</li>
						</ul>
						<h4>Tarifs :</h4>
						<p>
							1 lit : 62 à 88 JOD (72 à 102€)<br>
							2 lits : 75 à 88 JOD (87 à 102€)<br>
							3 lits : 110 à 141 JOD (128 à 164€)<br><br>
							Les prix varient selon la taille des lits. (Single ou Kings)<br>
							Prix indiqués pour une nuit.
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Main tourist street وادي موسى، 71810, Jordanie<br><br>
							<u>Site web</u> : <a href="https://www.edomhotelpetra.com/" target="_blank">https://www.edomhotelpetra.com/</a><br><br>
							<u>Téléphone</u> : +962 3 215 6266<br><br>
						</p>
					</div>
					<div>
						<h3>Petra Moon Hotel</h3>
						<h4>Les + :</h4>
						<ul>
							<li>Bons repas</li>
							<li>Situé à 150m de Petra</li>
							<li>Piscine</li>
							<li>Déjeuner gratuit</li>
							<li>Parking gratuit</li>
						</ul>
						<h4>Tarifs :</h4>
						<p>
							2 personne : 165€ / nuit<br>
							3 personnes : 195€ / nuit<br>
							5 personnes : 250€ / nuit<br>
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Site web</u> : <a href="https://www.petramoonhotel.com" target="_blank">https://www.petramoonhotel.com</a><br><br>
							<u>Mail</u> : <a href="mailto:info@petramoonhotel.com">info@petramoonhotel.com</a><br><br>
							<u>Téléphone</u> : +962 3 215 6220<br><br>
						</p>
					</div>
					<div class="etoiles">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div>
						<h3>Edom Hotel</h3>
						<h4>Les + :</h4>
						<ul>
							<li>Minibar</li>
							<li>WiFi gratuit</li>
						</ul>
						<h4>Tarifs :</h4>
						<p>
							Suite Deluxe : 41€+ / nuit<br>
							King suite : 123€+ / nuit<br>
							Suite avec vue sur océan : 165€+ / nuit
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Tourism Street, Petra, 71810, Jordan<br><br>
							<u>Site web</u> : <a href="https://www.edomhotelpetra.com" target="_blank">https://www.edomhotelpetra.com</a><br><br>
							<u>Mail</u> : <a href="mailto:info@edomhotelpetra.com">info@edomhotelpetra.com</a><br><br>
							<u>Téléphone</u> : +962 3 21 56995<br><br>
						</p>
					</div>
					<div>
						<h3>Shaqilath Hotel</h3>
						<h4>Les + :</h4>
						<ul>
							<li>Situé à 10min de Petra</li>
							<li>SPA</li>
							<li>Restaurant</li>
							<li>Petit-déjeuner gratuit</li>
							<li>WiFi gratuit</li>
							<li>Parking gratuit</li>
						</ul>
						<h4>Tarifs :</h4>
						<p>
							2 personnes : 95€ / nuit<br>
							3 personnes : 87 à 99€ / nuit
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Wadi Musa, Wadi Musa, Ma'an Governorate 71810<br><br>
							<u>Site web</u> : <a href="https://www.wotif.com/Wadi-Musa-Hotels-Shaqilath-Hotel.h33285357.Hotel-Information" target="_blank">https://www.wotif.com</a><br><br>
							<u>Téléphone</u> : 1800 796 370<br><br>
						</p>
					</div>
					<div>
						<h3>Petra palace</h3>
						<h4>Les + :</h4>
						<ul>
							<li>Proche de Petra</li>
							<li>Chambres avec belle vue</li>
							<li>Piscine</li>
							<li>Restaurant</li>
							<li>WiFi gratuit</li>
						</ul>
						<h4>Tarifs :</h4>
						<p>
							1 personne : 44 ou 68€<br>
							2 personnes : 62 ou 77€<br>
							3 personnes : 84 ou 104€<br>
							4 personnes : 108 ou 136€<br><br>
							Le premier prix indiqué fait référence aux saisons hautes, le second aux saisons basses.
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> :  P.O. Box 70 Wadi Musa - Petra, Jordan.<br><br>
							<u>Site web</u> : <a href="http://www.petrapalace.com" target="_blank">www.petrapalace.com</a><br><br>
							<u>Mail</u> : <a href="mailto: reservation@petrapalace.com"> reservation@petrapalace.com</a><br><br>
							<u>Téléphone</u> : +962 3 215 67 23<br><br>
						</p>
					</div>
				</div>
			</div>

			<div class="resto">
				<h3 id="resto">Restaurants</h3>
				<p>
					Un petit creux ? Pas de soucis, voici une liste de restaurants aux alentours qui sauront vous préparer les meilleures spécialités du coin !
				</p>
				<div class="container-resto">
					<div>
						<img src="images/resto-image1.jpg" alt="The cave bar restaurant">
						<h3>The Cave Bar</h3>
						<p>
							Restaurant traditionnel.<br>
							<u>Régimes spéciaux</u> : végétariens bienvenus, choix végétaliens.
						</p>
						<h4>Horaires :</h4>
							<p>Tous les jours : 14h - 23h</p>
						<h4>Avis tripadvisor :</h4>
						<p>
							4.5/5 (1656 avis)<br><br>
							Voir les avis : <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d6419189-Reviews-The_Cave_Bar-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank">cliquez ici</a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Main tourist street وادي موسى، 71810, Jordanie<br><br>
							<u>Site web</u> : <a href="https://www.petraguesthousehotel.com/?lang=fr" target="_blank">www.petraguesthousehotel.com</a><br><br>
							<u>Téléphone</u> : +962 7 9889 6806<br><br>
						</p>
					</div>
					<div>
						<h3>My mom's recipe</h3>
						<p>
							Restaurant traditionnel.<br>
							<u>Cuisine</u> : libanaise, méditerranéenne, barbecue/grillades, Moyen-Orient, arabe.<br>
							<u>Régimes</u> spéciaux : végétariens bienvenus, choix végétaliens, halal, plats sans gluten.
						</p>
						<h4>Horaires :</h4>
						<p>
							Lun / mer / jeu : 10h - 23h<br>
							Mar / ven / sam / dim : 10h - 22h
						</p>
						<h4>Avis tripadvisor :</h4>
						<p>
							4.5/5 (1930 avis)<br><br>
							Voir les avis : <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d2720550-Reviews-My_Mom_s_Recipe_Restaurant-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank">cliquez ici</a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Tourism Street – Wadi Musa, 71810 Jordanie<br><br>
							<u>Site web</u> : <a href="http://www.mymomsreciperestaurant.com" target="_blank">http://www.mymomsreciperestaurant.com</a><br><br>
							<u>Téléphone</u> : +962 7 7082 4824<br><br>
						</p>
					</div>
					<div>
						<h3>Petra night restaurant</h3>
						<p>
							<u>Cuisines</u> : pizza, internationale, méditerranéenne, Moyen-Orient, arabe.
							<u>Régimes spéciaux</u> : végétariens bienvenus, choix végétaliens.
						</p>
						<h4>Horaires :</h4>
							<p>Tous les jours : 11h - 00h</p>
						<h4>Avis tripadvisor :</h4>
						<p>
							4.5/5 (141 avis)<br><br>
							Voir les avis : <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d17531880-Reviews-Petra_Night_Restaurant-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank">cliquez ici</a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Tourism Street, Pétra/Wadi Moussa 71810 Jordanie<br><br>
							<u>Téléphone</u> : +962 7 7555 0450<br><br>
						</p>
					</div>
					<div>
						<h3>Al Qantarah</h3>
						<p>
							Restaurant traditionnel.<br>
							<u>Régimes spéciaux</u> : végétariens bienvenus, choix végétaliens, plats sans gluten.
						</p>
						<h4>Horaires :</h4>
							<p>Non renseignées.</p>
						<h4>Avis tripadvisor :</h4>
						<p>
							4/5 (383 avis)<br><br>
							Voir les avis : <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d1570869-Reviews-Al_Qantarah-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank">cliquez ici</a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Near Petra Main Gate Walking distance from Petra Visitor Center, 20 meters from Petra Mevenpick Resort, Pétra/Wadi Moussa Jordanie<br><br>
							<u>Téléphone</u> : +962 3 215 5535<br><br>
						</p>
					</div>
					<div>
						<h3>Red Cave restaurant</h3>
						<p>
							Restaurant traditionnel.<br>
							<u>Régimes spéciaux</u> : végétariens bienvenus, halal, choix végétaliens.
						</p>
						<h4>Horaires :</h4>
							<p>Tous les jours : 10h - 23h</p>
						<h4>Avis tripadvisor :</h4>
						<p>
							4/5 (1043 avis)<br><br>
							Voir les avis : <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d6363999-Reviews-Red_cave-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank">cliquez ici</a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Tourist Street Main Tourist Street- 30 M From Petra Visitor Center - Petra Guest House, Pétra/Wadi Moussa 71810 Jordanie<br><br>
							<u>Site web</u> : <a href="http://redcaverestaurant.com" target="_blank">redcaverestaurant.com</a><br><br>
							<u>Adresse mail</u> : <a href="mailto:info@redcaverestaurant.com">info@redcaverestaurant.com</a><br><br>
							<u>Téléphone</u> : +962 7 9889 6806<br><br>
						</p>
					</div>
					<div>
						<h3>Jordan heart restaurant</h3>
						<p>
							Restaurant traditionnel.<br>
							<u>Cuisines</u> : méditerranéenne, Moyen-Orient, arabe, barbecue/grillades.<br>
							<u>Régimes spéciaux</u> : végétariens bienvenus, choix végétaliens.
						</p>
						<h4>Horaires :</h4>
							<p>Tous les jours : 9h - 23h</p>
						<h4>Avis tripadvisor :</h4>
						<p>
							5/5 (223 avis)<br><br>
							Voir les avis : <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d19113202-Reviews-Jordan_Heart_Restaurant-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank">cliquez ici</a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u>Adresse</u> : Tourism St 28, Pétra/Wadi Moussa Jordanie<br><br>
							<u>Page Facebook</u> : <a href="https://www.petraguesthousehotel.com/?lang=fr" target="_blank">www.facebook.com/jordanheart2019</a><br><br>
							<u>Téléphone</u> : +962 7 7719 5920<br><br>
						</p>
					</div>
				</div>
			</div>
		</div>
	</main>


	<?php
		include("footer.inc.php");
	?>
</body>
</html>