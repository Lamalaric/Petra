<!DOCTYPE html> 
<html lang="FR"> 
<head> 
	<title>Petra</title>
	<meta name="author" content="Amalaric Le Forestier" />
	<link rel="icon" href="images/logo.ico" />
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<script type="text/javascript" src="script.js" ></script>
</head>

<body class="container-i">
	<div id="progress"></div> 							<!-- Barre de progression -->

	<header>
		<nav>											<!-- Menu de navigation -->
			<span id="logo_MCN"></span>
			<a class="page-actuelle" href="index.html"><span>Accueil</span></a>
			<a href="histoire.html"><span>Histoire</span></a>
			<a href="visiter.html"><span>À visiter</span></a>
			<a href="galerie.html"><span>Galerie d'image</span></a>
			<a href="informations.php"><span>Informations pratiques</span></a>
			<a href="contact.html"><span>Contact</span></a>
			<span id="logo_UPEM"></span>
		</nav>
	</header>

	<main>
		<div class="a1">							<!-- Grande image -->		
			<h1>Petra, une cité nabatéenne</h1>
		</div>

		<article>
			<section class="a2">					<!-- Introduction -->
				<div>
					<span id="image1_1"></span>
				</div>
				<div id="texte_image1_1">
					<span id="texte1_1">
						<p>Petra est une cité antique du sud de l’actuelle Jordanie.<br>
	                    Son attraction mondiale en a fait l’un des principaux pôle touristique de Jordanie. Fondé en -1200 par les Édomites, elle fut par la suite occupée par les Nabatéens à partir du VIe siècle avant JC qui la firent prospérer grâce à sa position stratégique sur la route des caravanes en provenance de l’Orient. Aujourd’hui classée au patrimoine mondial de l’Unesco, elle est considérée comme l’un des plus beaux sites troglodytiques du monde.</p>
					</span>
				</div>
			</section>

			<section class="a3">					<!-- Parcours -->
				<div id="virgule-titre"><h2>Parcours</h2></div>

				<form name="saisie" method="GET" action="#">

					<label>Parcours</label>
            
          			<select size="1" name="choix">
            			<option value="1">1h30</option>
            			<option value="2">2h</option><br>
            			<option value="4">3h30</option><br>
            			<option value="7">7h</option><br>
            			<option value="-1">Tout afficher</option><br>
          			</select>
          			<input type="submit" name="OK" value="OK"/>

          		</form>

          			

				<?php

					if(isset($_GET["choix"])){

						if($_GET["choix"] == 1){
							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m46!1m12!1m3!1d16341.653245232623!2d35.4423221064377!3d30.31897624308142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m31!3e2!4m5!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh%2C%20Jordanie!3m2!1d30.322003!2d35.4514944!4m5!1s0x15016eedb8afcaff%3A0x3e34f6d53e720c78!2zVGjDqcOidHJlIG5hYmF0w6llbiwgSm9yZGFuaWU!3m2!1d30.324766999999998!2d35.446895999999995!4m5!1s0x15016fc5ec55f107%3A0x16b2f3f8816f3221!2sAl-Khubtha%20Trail%2C%20Street%20of%20Facades%2C%20Jordanie!3m2!1d30.3272071!2d35.4484582!4m5!1s0x15016ef1d6c5cd83%3A0x344023fd11ed1f73!2sNymphaeum%2C%20Jordanie!3m2!1d30.329024699999998!2d35.445031!4m5!1s0x15016ef136099c87%3A0x9da47d586c0ecf87!2sQasr%20al-Bint%2C%20Jordanie!3m2!1d30.329573!2d35.440130499999995!5e1!3m2!1sfr!2sfr!4v1619864892239!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';


					} else if($_GET["choix"] == 2){

							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d16339.645710263641!2d35.44371158436279!3d30.331010145895473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e2!4m5!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh%2C%20Jordanie!3m2!1d30.322003!2d35.4514944!4m5!1s0x15016eec38b3b245%3A0x6cc17a299af9cbf9!2sTomb%20of%20&#39;Unayshu%2C%20Jordanie!3m2!1d30.3244653!2d35.4490741!4m5!1s0x15016eedb8afcaff%3A0x3e34f6d53e720c78!2zVGjDqcOidHJlIG5hYmF0w6llbiwgSm9yZGFuaWU!3m2!1d30.324766999999998!2d35.446895999999995!4m5!1s0x15016e570fc29f7b%3A0x90411b0e75179d49!2sDeir%2C%20Jordanie!3m2!1d30.338249299999998!2d35.430999299999996!5e1!3m2!1sfr!2sfr!4v1619862279724!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';

							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m46!1m12!1m3!1d8170.281506010191!2d35.44742752670954!3d30.325512037958863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m31!3e2!4m5!1s0x15016eea4f10cc6d%3A0x85c03bea6e26b2bf!2zU8OucSwgSm9yZGFuaWU!3m2!1d30.322998799999997!2d35.4562042!4m5!1s0x15016eeee7b66743%3A0xf550344008e12dcf!2sTombe%20%C3%A0%20l&#39;Urne%2C%20Jordanie!3m2!1d30.327578!2d35.4492857!4m5!1s0x15016eeee06b05fd%3A0x9d1e32d1eefefd87!2sSilk%20Tomb%2C%20Jordanie!3m2!1d30.328009899999998!2d35.449358!4m5!1s0x15016eef1f55309f%3A0x59df24f65846b8d0!2sTombe%20corinthienne%2C%20Jordanie!3m2!1d30.328388399999998!2d35.4494233!4m5!1s0x15016eef3d183f77%3A0xdaf3818dee44c440!2sPalace%20Tomb%2C%20Jordanie!3m2!1d30.3287454!2d35.449563999999995!5e1!3m2!1sfr!2sfr!4v1619864325516!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';


					} else if($_GET["choix"] == 4){
							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d16340.666085695462!2d35.43674483705946!3d30.32489418031924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m5!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh%2C%20Jordanie!3m2!1d30.322003!2d35.4514944!4m5!1s0x15016eedb8afcaff%3A0x3e34f6d53e720c78!2zVGjDqcOidHJlIG5hYmF0w6llbiwgSm9yZGFuaWU!3m2!1d30.324766999999998!2d35.446895999999995!4m5!1s0x15016ef176a305f5%3A0x45c9a797ccb7f394!2sGrand%20Temple%2C%20Gaia%2C%20Jordanie!3m2!1d30.3286819!2d35.4423105!4m5!1s0x15016ef136099c87%3A0x9da47d586c0ecf87!2sQasr%20al-Bint%2C%20Jordanie!3m2!1d30.329573!2d35.440130499999995!4m5!1s0x15016e92a0af7ac7%3A0x9252bd2e0d205198!2sTombe%20Renaissance%2C%20Jordanie!3m2!1d30.3215695!2d35.4448259!4m5!1s0x15016e9296919c3d%3A0x7519a73aaaee52ce!2sFontaine%20au%20lion%2C%20Jordanie!3m2!1d30.320191599999998!2d35.4463618!5e1!3m2!1sfr!2sfr!4v1619864497841!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';


					} else if($_GET["choix"] == 7){
							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m76!1m12!1m3!1d34043.10490690082!2d35.42948561385083!3d30.329049126085536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m61!3e2!4m5!1s0x15016ec151cbb82d%3A0x8b35ed81160d00c!2sTombe%20aux%20ob%C3%A9lisques%2C%20Jordanie!3m2!1d30.321217299999997!2d35.4633305!4m5!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh%2C%20Jordanie!3m2!1d30.322003!2d35.4514944!4m5!1s0x15016eedb8afcaff%3A0x3e34f6d53e720c78!2zVGjDqcOidHJlIG5hYmF0w6llbiwgSm9yZGFuaWU!3m2!1d30.324766999999998!2d35.446895999999995!4m5!1s0x15016eeee7b66743%3A0xf550344008e12dcf!2sTombe%20%C3%A0%20l&#39;Urne%2C%20Jordanie!3m2!1d30.327578!2d35.4492857!4m5!1s0x15016fc5ec55f107%3A0x16b2f3f8816f3221!2sAl-Khubtha%20Trail%2C%20Street%20of%20Facades%2C%20Jordanie!3m2!1d30.3272071!2d35.4484582!4m5!1s0x15016e570fc29f7b%3A0x90411b0e75179d49!2sDeir%2C%20Jordanie!3m2!1d30.338249299999998!2d35.430999299999996!4m5!1s0x15016ef136099c87%3A0x9da47d586c0ecf87!2sQasr%20al-Bint%2C%20Jordanie!3m2!1d30.329573!2d35.440130499999995!4m5!1s0x15016ef176a305f5%3A0x45c9a797ccb7f394!2sGrand%20Temple%2C%20Gaia%2C%20Jordanie!3m2!1d30.3286819!2d35.4423105!4m5!1s0x15016e92a0af7ac7%3A0x9252bd2e0d205198!2sTombe%20Renaissance%2C%20Jordanie!3m2!1d30.3215695!2d35.4448259!4m5!1s0x15016e9296919c3d%3A0x7519a73aaaee52ce!2sFontaine%20au%20lion%2C%20Jordanie!3m2!1d30.320191599999998!2d35.4463618!5e1!3m2!1sfr!2sfr!4v1619960876378!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';

					} else if($_GET["choix"] == -1){

							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m46!1m12!1m3!1d16341.653245232623!2d35.4423221064377!3d30.31897624308142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m31!3e2!4m5!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh%2C%20Jordanie!3m2!1d30.322003!2d35.4514944!4m5!1s0x15016eedb8afcaff%3A0x3e34f6d53e720c78!2zVGjDqcOidHJlIG5hYmF0w6llbiwgSm9yZGFuaWU!3m2!1d30.324766999999998!2d35.446895999999995!4m5!1s0x15016fc5ec55f107%3A0x16b2f3f8816f3221!2sAl-Khubtha%20Trail%2C%20Street%20of%20Facades%2C%20Jordanie!3m2!1d30.3272071!2d35.4484582!4m5!1s0x15016ef1d6c5cd83%3A0x344023fd11ed1f73!2sNymphaeum%2C%20Jordanie!3m2!1d30.329024699999998!2d35.445031!4m5!1s0x15016ef136099c87%3A0x9da47d586c0ecf87!2sQasr%20al-Bint%2C%20Jordanie!3m2!1d30.329573!2d35.440130499999995!5e1!3m2!1sfr!2sfr!4v1619864892239!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';

							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d16339.645710263641!2d35.44371158436279!3d30.331010145895473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e2!4m5!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh%2C%20Jordanie!3m2!1d30.322003!2d35.4514944!4m5!1s0x15016eec38b3b245%3A0x6cc17a299af9cbf9!2sTomb%20of%20&#39;Unayshu%2C%20Jordanie!3m2!1d30.3244653!2d35.4490741!4m5!1s0x15016eedb8afcaff%3A0x3e34f6d53e720c78!2zVGjDqcOidHJlIG5hYmF0w6llbiwgSm9yZGFuaWU!3m2!1d30.324766999999998!2d35.446895999999995!4m5!1s0x15016e570fc29f7b%3A0x90411b0e75179d49!2sDeir%2C%20Jordanie!3m2!1d30.338249299999998!2d35.430999299999996!5e1!3m2!1sfr!2sfr!4v1619862279724!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';

							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m46!1m12!1m3!1d8170.281506010191!2d35.44742752670954!3d30.325512037958863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m31!3e2!4m5!1s0x15016eea4f10cc6d%3A0x85c03bea6e26b2bf!2zU8OucSwgSm9yZGFuaWU!3m2!1d30.322998799999997!2d35.4562042!4m5!1s0x15016eeee7b66743%3A0xf550344008e12dcf!2sTombe%20%C3%A0%20l&#39;Urne%2C%20Jordanie!3m2!1d30.327578!2d35.4492857!4m5!1s0x15016eeee06b05fd%3A0x9d1e32d1eefefd87!2sSilk%20Tomb%2C%20Jordanie!3m2!1d30.328009899999998!2d35.449358!4m5!1s0x15016eef1f55309f%3A0x59df24f65846b8d0!2sTombe%20corinthienne%2C%20Jordanie!3m2!1d30.328388399999998!2d35.4494233!4m5!1s0x15016eef3d183f77%3A0xdaf3818dee44c440!2sPalace%20Tomb%2C%20Jordanie!3m2!1d30.3287454!2d35.449563999999995!5e1!3m2!1sfr!2sfr!4v1619864325516!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';

							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d16340.666085695462!2d35.43674483705946!3d30.32489418031924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m5!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh%2C%20Jordanie!3m2!1d30.322003!2d35.4514944!4m5!1s0x15016eedb8afcaff%3A0x3e34f6d53e720c78!2zVGjDqcOidHJlIG5hYmF0w6llbiwgSm9yZGFuaWU!3m2!1d30.324766999999998!2d35.446895999999995!4m5!1s0x15016ef176a305f5%3A0x45c9a797ccb7f394!2sGrand%20Temple%2C%20Gaia%2C%20Jordanie!3m2!1d30.3286819!2d35.4423105!4m5!1s0x15016ef136099c87%3A0x9da47d586c0ecf87!2sQasr%20al-Bint%2C%20Jordanie!3m2!1d30.329573!2d35.440130499999995!4m5!1s0x15016e92a0af7ac7%3A0x9252bd2e0d205198!2sTombe%20Renaissance%2C%20Jordanie!3m2!1d30.3215695!2d35.4448259!4m5!1s0x15016e9296919c3d%3A0x7519a73aaaee52ce!2sFontaine%20au%20lion%2C%20Jordanie!3m2!1d30.320191599999998!2d35.4463618!5e1!3m2!1sfr!2sfr!4v1619864497841!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';

							echo '<iframe src="https://www.google.com/maps/embed?pb=!1m76!1m12!1m3!1d34043.10490690082!2d35.42948561385083!3d30.329049126085536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m61!3e2!4m5!1s0x15016ec151cbb82d%3A0x8b35ed81160d00c!2sTombe%20aux%20ob%C3%A9lisques%2C%20Jordanie!3m2!1d30.321217299999997!2d35.4633305!4m5!1s0x15016eeb79d3cf39%3A0xa40550ba81476059!2sKhazneh%2C%20Jordanie!3m2!1d30.322003!2d35.4514944!4m5!1s0x15016eedb8afcaff%3A0x3e34f6d53e720c78!2zVGjDqcOidHJlIG5hYmF0w6llbiwgSm9yZGFuaWU!3m2!1d30.324766999999998!2d35.446895999999995!4m5!1s0x15016eeee7b66743%3A0xf550344008e12dcf!2sTombe%20%C3%A0%20l&#39;Urne%2C%20Jordanie!3m2!1d30.327578!2d35.4492857!4m5!1s0x15016fc5ec55f107%3A0x16b2f3f8816f3221!2sAl-Khubtha%20Trail%2C%20Street%20of%20Facades%2C%20Jordanie!3m2!1d30.3272071!2d35.4484582!4m5!1s0x15016e570fc29f7b%3A0x90411b0e75179d49!2sDeir%2C%20Jordanie!3m2!1d30.338249299999998!2d35.430999299999996!4m5!1s0x15016ef136099c87%3A0x9da47d586c0ecf87!2sQasr%20al-Bint%2C%20Jordanie!3m2!1d30.329573!2d35.440130499999995!4m5!1s0x15016ef176a305f5%3A0x45c9a797ccb7f394!2sGrand%20Temple%2C%20Gaia%2C%20Jordanie!3m2!1d30.3286819!2d35.4423105!4m5!1s0x15016e92a0af7ac7%3A0x9252bd2e0d205198!2sTombe%20Renaissance%2C%20Jordanie!3m2!1d30.3215695!2d35.4448259!4m5!1s0x15016e9296919c3d%3A0x7519a73aaaee52ce!2sFontaine%20au%20lion%2C%20Jordanie!3m2!1d30.320191599999998!2d35.4463618!5e1!3m2!1sfr!2sfr!4v1619960876378!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
				}

				} else {
					echo'choisissez un parcours';
			}


				?>







			</section>

			<section class="a4">					<!-- Images -->
				<div id="virgule-titre"><h2>Images à la une</h2></div>
				<div>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="container-see-more"><a href="galerie.html" class="see_more">Voir plus</a></div>
			</section>
			
			

			<div id="goto_top">						<!-- Retour haut de page -->
				<a href="#"><img src="images/fleche_haut.jpg" alt="Flèche retour haut de page" /></a>
			</div>
		</article>
			
	</main>
		

	<footer>										<!-- Footer -->
        <div class="partenaires">
            <div class="f-logoMCN"></div>
            <div class="f-logoUPEM"></div>
            <div class="f-logoUNESCO"></div>
            <div class="f-logoIDEA"></div>
            <div class="f-logoANR"></div>
        </div>
	</footer>

</body>
</html>