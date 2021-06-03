<?php
	$page = "histoire";
	include("includes/header.inc.php");
?>


<body class="container-h">
	<main>
		<div class="h1">
			<h1><?php echo $h1_h1[$langue]; ?></h1>
		</div>

		<section>
			<aside class="sommaire">
				<h3><?php echo $sommaire[$langue]; ?></h3>
				<ul>
					<li>
						<a href="#beacon-histoire" class="underline" id="beacon-histoire"><?php echo $sommaire_1[$langue]; ?></a>
						<ul>
							<li><a href="#beacon-histoire"><?php echo $sommaire_1_1[$langue]; ?></a></li>
							<li><a href="#beacon-moyen-age"><?php echo $sommaire_1_2[$langue]; ?></a></li>
						</ul>
					</li><br>
					<li><a href="#beacon-archeo" class="underline"><?php echo $sommaire_2[$langue]; ?></a></li><br>
					<li><a href="#beacon-archi" class="underline"><?php echo $sommaire_3[$langue]; ?></a></li><br>
					<li><a href="#culture" class="underline"><?php echo $sommaire_4[$langue]; ?></a></li><br>
				</ul>
			</aside>

			<article class="h2">				<!-- PARTIE ANTIQUITÉ -->
				<h2 id="histoire"><?php echo $sommaire_1[$langue]; ?></h2>          
				<h3 id="antiquite"><?php echo $sommaire_1_1[$langue]; ?></h3>
				<img src="images/image11.jpg" alt="Paysage" class="img1">
				<p>
					<?php echo $h2_p[$langue]; ?>
				</p>
			</article>
			<div id="toSeeMore">
				<article class="h3">				<!-- PARTIE ANTIQUITÉ - VOIR PLUS -->
					<p>
						<?php echo $h3_p[$langue]; ?>
					</p>
					<img src="images/caravane_chameaux.jpg" alt="Paysage" class="img2">
				</article>

				<article class="h4">
					<p>
						<?php echo $h4_p[$langue]; ?>
					</p>
				</article>
			</div>
			<span id="beacon-moyen-age"></span>
			<span class="container-btnSeeMore"><button id="btnSeeMore" onclick="seeMore('toSeeMore', <?php echo $langue; ?>)"><?php echo $h_button[$langue]; ?></button></span>

			<article class="h5">				<!-- PARTIE MOYEN-AGE -->
				<h3 id="moyen-age"><?php echo $h5_h3[$langue]; ?></h3>
				<img src="images/moyen_age.jpg" alt="Paysage" class="img3">
				<p><?php echo $h5_p_1[$langue]; ?></p><br><br>
				<p class="text-centered" id="beacon-archeo"><?php echo $h5_p_2[$langue]; ?></p>
			</article>

			<article class="h6">				<!-- PARTIE RECHERCHES ARCHEO -->
				<h2 id="archeo"><?php echo $h6_h2[$langue]; ?></h2>
				<img src="images/Johann_Ludwig_Burckhardt.png" alt="Johann Ludwig Burckhardt" class="img4">
				<p>
					<?php echo $h6_p[$langue]; ?>
					<span id="beacon-archi"></span>
				</p>
			</article>

			<article class="h7">				<!-- PARTIE ARCHITECTURE -->
				<h2 id="archi"><?php echo $h7_h2[$langue]; ?></h2>
				<p>
					<?php echo $h7_p[$langue]; ?>
				</p>
				<img src="images/image2.jpg" alt="Paysage" class="img5">
			</article>

			<article class="h8">				<!-- PARTIE ART / CULTURE -->
				<h2 id="culture"><?php echo $h8_h2[$langue]; ?></h2>
				<img src="images/image12.png" alt="Paysage" class="img6">
				<p>
					<?php echo $h8_p[$langue]; ?>
				</p>
			</article>
		</section>		
	</main>


	<?php
		include("includes/footer.inc.php");
	?>
</body>
</html>