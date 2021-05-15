<?php
	$page = "visiter";
	include("header.inc.php");
?>

<body class="container-v">
	<main>
		<div class="big-picture">
			<h1><?php echo $visiter_h1[$langue]; ?></h1>
		</div>
		

		<div class="kazneh">
			<div class="image kazneh-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_1_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_1_texte[$langue]; ?>
				</p>
			</div>
			
		</div>

		<div class="ad-deir">
			<div class="image ad-deir-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_2_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_2_texte[$langue]; ?>
				</p>
			</div>
		</div>

		<div class="theatre">
			<div class="image theatre-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_3_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_3_texte[$langue]; ?>
				</p>
			</div>
		</div>

		<div class="aqueducs">
			<div class="image aqueducs-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_4_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_4_texte[$langue]; ?>
				</p>
			</div>
			
		</div>

	</main>


	<?php
		include("footer.inc.php");
	?>
</body>
</htmls>