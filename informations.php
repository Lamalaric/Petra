<?php
	$page = "informations";
	include("header.inc.php");
?>


<body class="container-if">
	<main>
		<div class="big-picture">
			<h1><?php echo $infos_h1[$langue]; ?></h1>
		</div>

		<h2 id="plan"><?php echo $infos_title1[$langue]; ?></h2>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8577.923890256112!2d35.44819378417468!3d30.323710785533354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh!5e1!3m2!1sfr!2sfr!4v1619632907599!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>

		<h2 id="divers"><?php echo $infos_title2[$langue]; ?></h2>
		<p class="texte-horaires">
			<?php echo $infos_text1[$langue]; ?>
		</p>
		<div class="divers">
			<div class="diplo">
				<h3 id="reco-diplo"><?php echo $infos_subtitle1[$langue]; ?></h3>
				<p>
					<?php echo $infos_text2[$langue]; ?>
				</p>
				<p><u><?php echo $infos_subsubtitle1[$langue]; ?></u></p>
				<ul>
					<li>
						<?php echo $infos_subsubtitle1_text1[$langue]; ?>
					</li>
					<li>
						<?php echo $infos_subsubtitle1_text2[$langue]; ?>
					</li>
					<li>
						<?php echo $infos_subsubtitle1_text3[$langue]; ?>
					</li>
				</ul>
				<p><u><?php echo $infos_subsubtitle2[$langue]; ?></u></p>
				<ul>
					<li>
						<?php echo $infos_subsubtitle2_text1[$langue]; ?>
					</li>
					<li>
						<?php echo $infos_subsubtitle2_text2[$langue]; ?>
					</li>
					<li>
						<?php echo $infos_subsubtitle2_text3[$langue]; ?>
					</li>
				</ul>
				<br>
				<p><u>Sources</u> : <a href="https://www.diplomatie.gouv.fr/fr/conseils-aux-voyageurs/conseils-par-pays-destination/jordanie/#securite">www.diplomatie.gouv.fr</a></p>
			</div>
			<div class="trad-mo">
				<h3 id="trad"><?php echo $infos_subtitle2[$langue]; ?></h3>
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
				<h3 id="convertisseur"><?php echo $infos_subtitle3[$langue]; ?></h3>
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
		<h2 id="alentours"><?php echo $infos_title3[$langue]; ?></h2>
		<div class="autre">
			<div class="hotel">
				<h3 id="hotels"><?php echo $infos_subtitle4[$langue]; ?></h3>
				<p>
					<?php echo $infos_subtitle3_text1[$langue]; ?>
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
						<h4><?php echo $infos_hotel_plus[$langue]; ?></h4>
						<ul>
							<li><?php echo $infos_hotel1_1[$langue]; ?></li>
							<li><?php echo $infos_hotel1_2[$langue]; ?></li>
							<li>Personnel accueillant###</li>
							<li>SPA</li>
							<li><?php echo $infos_hotel1_5[$langue]; ?></li>
							<li>Excellents repas###</li>
							<li>Propre###</li>
						</ul>
						<h4><?php echo $infos_hotel_tarif[$langue]; ?></h4>
						<p><?php echo $infos_hotel_non_renseigne[$langue]; ?></p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $infos_hotel_address[$langue]; ?></u>Tourism St Petra Wadi Musa, 71810, Jordanie<br><br>
							<u><?php echo $infos_hotel_website[$langue]; ?></u> : <a href="https://www.movenpick.com/fr/middle-east/jordan/petra/resort-petra/overview/" target="_blank">https://www.movenpick.com</a><br><br>
							<u>Mail</u> : <a href="mailto:resort.petra@movenpick.com">resort.petra@movenpick.com</a><br><br>
							<u><?php echo $infos_hotel_telephone[$langue]; ?></u> : +962 3 215 71 11<br><br>
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
						<h4><?php echo $infos_hotel_plus[$langue]; ?></h4>
						<ul>
							<li><?php echo $infos_hotel2_1[$langue]; ?></li>
							<li>Divertissement le soir###</li>
							<li>Room service###</li>
							<li>Menus personnalisés###</li>
						</ul>
						<h4><?php echo $infos_hotel_tarif[$langue]; ?></h4>
						<p>
							<?php echo $infos_hotel2_tarif[$langue]; ?>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $infos_hotel_address[$langue]; ?></u> : Main tourist street وادي موسى، 71810, Jordanie<br><br>
							<u><?php echo $infos_hotel_website[$langue]; ?></u> : <a href="https://www.edomhotelpetra.com/" target="_blank">https://www.edomhotelpetra.com/</a><br><br>
							<u><?php echo $infos_hotel_telephone[$langue]; ?></u> : +962 3 215 6266<br><br>
						</p>
					</div>
					<div>
						<h3>Petra Moon Hotel</h3>
						<h4><?php echo $infos_hotel_plus[$langue]; ?></h4>
						<ul>
							<li>Bons repas###</li>
							<li><?php echo $infos_hotel3_2[$langue]; ?></li>
							<li><?php echo $infos_hotel3_3[$langue]; ?></li>
							<li><?php echo $infos_hotel3_4[$langue]; ?></li>
							<li><?php echo $infos_hotel3_5[$langue]; ?></li>
						</ul>
						<h4><?php echo $infos_hotel_tarif[$langue]; ?></h4>
						<p>
							<?php echo $infos_hotel3_tarif[$langue]; ?>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $infos_hotel_website[$langue]; ?></u> : <a href="https://www.petramoonhotel.com" target="_blank">https://www.petramoonhotel.com</a><br><br>
							<u>Mail</u> : <a href="mailto:info@petramoonhotel.com">info@petramoonhotel.com</a><br><br>
							<u><?php echo $infos_hotel_telephone[$langue]; ?></u> : +962 3 215 6220<br><br>
						</p>
					</div>
					<div class="etoiles">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div>
						<h3>Edom Hotel</h3>
						<h4><?php echo $infos_hotel_plus[$langue]; ?></h4>
						<ul>
							<li>Minibar</li>
							<li><?php echo $infos_hotel4_1[$langue]; ?></li>
						</ul>
						<h4><?php echo $infos_hotel_tarif[$langue]; ?></h4>
						<p>
							<?php echo $infos_hotel4_tarif[$langue]; ?>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $infos_hotel_address[$langue]; ?></u> : Tourism Street, Petra, 71810, Jordan<br><br>
							<u><?php echo $infos_hotel_website[$langue]; ?></u> : <a href="https://www.edomhotelpetra.com" target="_blank">https://www.edomhotelpetra.com</a><br><br>
							<u>Mail</u> : <a href="mailto:info@edomhotelpetra.com">info@edomhotelpetra.com</a><br><br>
							<u><?php echo $infos_hotel_telephone[$langue]; ?></u> : +962 3 21 56995<br><br>
						</p>
					</div>
					<div>
						<h3>Shaqilath Hotel</h3>
						<h4><?php echo $infos_hotel_plus[$langue]; ?></h4>
						<ul>
							<li><?php echo $infos_hotel5_1[$langue]; ?></li>
							<li>SPA</li>
							<li>Restaurant</li>
							<li><?php echo $infos_hotel5_4[$langue]; ?></li>
							<li><?php echo $infos_hotel5_5[$langue]; ?></li>
							<li><?php echo $infos_hotel5_6[$langue]; ?></li>
						</ul>
						<h4><?php echo $infos_hotel_tarif[$langue]; ?></h4>
						<p>
							<?php echo $infos_hotel5_tarif[$langue]; ?>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $infos_hotel_address[$langue]; ?></u> : Wadi Musa, Wadi Musa, Ma'an Governorate 71810<br><br>
							<u><?php echo $infos_hotel_website[$langue]; ?></u> : <a href="https://www.wotif.com/Wadi-Musa-Hotels-Shaqilath-Hotel.h33285357.Hotel-Information" target="_blank">https://www.wotif.com</a><br><br>
							<u><?php echo $infos_hotel_telephone[$langue]; ?></u> : 1800 796 370<br><br>
						</p>
					</div>
					<div>
						<h3>Petra palace</h3>
						<h4><?php echo $infos_hotel_plus[$langue]; ?></h4>
						<ul>
							<li><?php echo $infos_hotel6_1[$langue]; ?></li>
							<li>Chambres avec belle vue###</li>
							<li><?php echo $infos_hotel6_3[$langue]; ?></li>
							<li>Restaurant</li>
							<li><?php echo $infos_hotel6_5[$langue]; ?></li>
						</ul>
						<h4><?php echo $infos_hotel_tarif[$langue]; ?></h4>
						<p>
							<?php echo $infos_hotel6_tarif[$langue]; ?>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $infos_hotel_address[$langue]; ?></u> :  P.O. Box 70 Wadi Musa - Petra, Jordan.<br><br>
							<u><?php echo $infos_hotel_website[$langue]; ?></u> : <a href="http://www.petrapalace.com" target="_blank">www.petrapalace.com</a><br><br>
							<u>Mail</u> : <a href="mailto: reservation@petrapalace.com"> reservation@petrapalace.com</a><br><br>
							<u><?php echo $infos_hotel_telephone[$langue]; ?></u> : +962 3 215 67 23<br><br>
						</p>
					</div>
				</div>
			</div>

			<div class="resto">
				<h3 id="resto">Restaurants</h3>
				<p>
					<?php echo $practical_info_subtitle5_text1[$langue]; ?>
				</p>
				<div class="container-resto">
					<div>
						<img src="images/resto-image1.jpg" alt="The cave bar restaurant">
						<h3>The Cave Bar</h3>
						<p>
							<?php echo $practical_info_resto1_pres[$langue]; ?>
						</p>
						<h4><?php echo $practical_info_resto_horaire[$langue]; ?></h4>
							<p>
								<?php echo $practical_info_resto1_horaire1[$langue]; ?>
							</p>
						<h4><?php echo $practical_info_resto_notice[$langue]; ?></h4>
						<p>
							<?php echo $practical_info_resto1_rate[$langue]; ?><br><br>
							<?php echo $practical_info_resto_link_see[$langue]; ?> 
							<a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d6419189-Reviews-The_Cave_Bar-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank"><?php echo $practical_info_resto_link_click[$langue]; ?> </a>
						</p>
						<h4>Contact :</h4>
						<p>
							/
							<u><?php echo $practical_info_hotel_address[$langue]; ?></u> : Main tourist street وادي موسى، 71810, Jordanie<br><br>
							<u><?php echo $practical_info_hotel_web_site[$langue]; ?></u> : <a href="https://www.petraguesthousehotel.com/?lang=fr" target="_blank">www.petraguesthousehotel.com</a><br><br>
							<u><?php echo $practical_info_hotel_telephone[$langue]; ?></u> : +962 7 9889 6806<br><br>

							

						</p>
					</div>
					<div>
						<h3>My mom's recipe</h3>
						<p>
							<?php echo $practical_info_resto2_pres[$langue]; ?>
						</p>
						<h4><?php echo $practical_info_resto_horaire[$langue]; ?></h4>
						<p>
							<?php echo $practical_info_resto2_horaire1[$langue]; ?>
						</p>
						<h4><?php echo $practical_info_resto_notice[$langue]; ?></h4>
						<p>
							<?php echo $practical_info_resto2_rate[$langue]; ?><br><br>
							<?php echo $practical_info_resto_link_see[$langue]; ?> <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d2720550-Reviews-My_Mom_s_Recipe_Restaurant-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank"><?php echo $practical_info_resto_link_click[$langue]; ?></a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $practical_info_hotel_address[$langue]; ?></u> : Tourism Street – Wadi Musa, 71810 Jordanie<br><br>
							<u><?php echo $practical_info_hotel_web_site[$langue]; ?></u> : <a href="http://www.mymomsreciperestaurant.com" target="_blank">http://www.mymomsreciperestaurant.com</a><br><br>
							<u><?php echo $practical_info_hotel_telephone[$langue]; ?></u> : +962 7 7082 4824<br><br>
						</p>
					</div>
					<div>
						<h3>Petra night restaurant</h3>
						<p>
							<?php echo $practical_info_resto3_pres[$langue]; ?>
						</p>
						<h4><?php echo $practical_info_resto_horaire[$langue]; ?></h4>
							<p>
								<?php echo $practical_info_resto3_horaire1[$langue]; ?>
							</p>
						<h4><?php echo $practical_info_resto_notice[$langue]; ?></h4>
						<p>
							<?php echo $practical_info_resto3_rate[$langue]; ?><br><br>
							<?php echo $practical_info_resto_link_see[$langue]; ?> <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d17531880-Reviews-Petra_Night_Restaurant-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank"><?php echo $practical_info_resto_link_click[$langue]; ?></a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $practical_info_hotel_address[$langue]; ?></u> : Tourism Street, Pétra/Wadi Moussa 71810 Jordanie<br><br>
							<u><?php echo $practical_info_hotel_telephone[$langue]; ?></u> : +962 7 7555 0450<br><br>
						</p>
					</div>
					<div>
						<h3>Al Qantarah</h3>
						<p>
							<?php echo $practical_info_resto4_pres[$langue]; ?>
						</p>
						<h4><?php echo $practical_info_resto_horaire[$langue]; ?></h4>
							<p><?php echo $practical_info_hotel_non_renseigne[$langue]; ?></p>
						<h4><?php echo $practical_info_resto_notice[$langue]; ?></h4>
						<p>
							<?php echo $practical_info_resto4_rate[$langue]; ?><br><br>
							<?php echo $practical_info_resto_link_see[$langue]; ?> <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d1570869-Reviews-Al_Qantarah-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank"><?php echo $practical_info_resto_link_click[$langue]; ?></a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $practical_info_hotel_address[$langue]; ?></u> : Near Petra Main Gate Walking distance from Petra Visitor Center, 20 meters from Petra Mevenpick Resort, Pétra/Wadi Moussa Jordanie<br><br>
							<u><?php echo $practical_info_hotel_telephone[$langue]; ?></u> : +962 3 215 5535<br><br>
						</p>
					</div>
					<div>
						<h3>Red Cave restaurant</h3>
						<p>
							<?php echo $practical_info_resto5_pres[$langue]; ?>
						</p>
						<h4><?php echo $practical_info_resto_horaire[$langue]; ?></h4>
							<p>
								<?php echo $practical_info_resto5_horaire1[$langue]; ?>
							</p>
						<h4><?php echo $practical_info_resto_notice[$langue]; ?></h4>
						<p>
							<?php echo $practical_info_resto5_rate[$langue]; ?><br><br>
							<?php echo $practical_info_resto_link_see[$langue]; ?> <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d6363999-Reviews-Red_cave-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank"><?php echo $practical_info_resto_link_click[$langue]; ?></a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $practical_info_hotel_address[$langue]; ?></u> : Tourist Street Main Tourist Street- 30 M From Petra Visitor Center - Petra Guest House, Pétra/Wadi Moussa 71810 Jordanie<br><br>
							<u><?php echo $practical_info_hotel_web_site[$langue]; ?></u> : <a href="http://redcaverestaurant.com" target="_blank">redcaverestaurant.com</a><br><br>
							<u>Mail</u> : <a href="mailto:info@redcaverestaurant.com">info@redcaverestaurant.com</a><br><br>
							<u><?php echo $practical_info_hotel_telephone[$langue]; ?></u> : +962 7 9889 6806<br><br>
						</p>
					</div>
					<div>
						<h3>Jordan heart restaurant</h3>
						<p>
							<?php echo $practical_info_resto6_pres[$langue]; ?>
						</p>
						<h4><?php echo $practical_info_resto_horaire[$langue]; ?></h4>
							<p>
								<?php echo $practical_info_resto6_horaire1[$langue]; ?>
							</p>
						<h4><?php echo $practical_info_resto_notice[$langue]; ?></h4>
						<p>
							<?php echo $practical_info_resto_notice[$langue]; ?><br><br>
							<?php echo $practical_info_resto6_rate[$langue]; ?> <a href="https://www.tripadvisor.fr/Restaurant_Review-g318895-d19113202-Reviews-Jordan_Heart_Restaurant-Petra_Wadi_Musa_Ma_an_Governorate.php" target="_blank"><?php echo $practical_info_resto_link_click[$langue]; ?></a>
						</p>
						<h4>Contact :</h4>
						<p>
							<u><?php echo $practical_info_hotel_address[$langue]; ?></u> : Tourism St 28, Pétra/Wadi Moussa Jordanie<br><br>
							<u><?php echo $practical_info_resto_facebook[$langue]; ?></u> : <a href="https://www.petraguesthousehotel.com/?lang=fr" target="_blank">www.facebook.com/jordanheart2019</a><br><br>
							<u><?php echo $practical_info_hotel_telephone[$langue]; ?></u> : +962 7 7719 5920<br><br>
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