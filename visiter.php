<?php
	$page = "visiter";
	include("includes/header.inc.php");
?>

<body class="container-v">
	<main>
		<div class="big-picture">
			<h1><?php echo $visiter_h1[$langue]; ?></h1>
		</div>
		

		<div class="kazneh" id="kazneh">
			<div class="image kazneh-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_1_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_1_texte[$langue]; ?>
				</p>
			</div>
			
		</div>

		<div class="ad-deir" id="ad-deir">
			<div class="image ad-deir-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_2_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_2_texte[$langue]; ?>
				</p>
			</div>
		</div>

		<div class="theatre" id="theatre">
			<div class="image theatre-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_3_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_3_texte[$langue]; ?>
				</p>
			</div>
		</div>

		<div class="aqueducs" id="aqueducs">
			<div class="image aqueducs-img"></div>
			<div class="text-plus-title">
				<h3><?php echo $visiter_4_titre[$langue]; ?></h3>
				<p>
					<?php echo $visiter_4_texte[$langue]; ?>
				</p>
			</div>
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
		</div>

		<div class="tombe-soldat" id="tombe-soldat">
			<div class="image tombe-soldat-img"></div>
			<div class="text-plus-title">
				<h3>Tombe du soldat romain</h3>
				<p>
					Il fut nommé ainsi à tort, car le soldat représenté dans la niche centrale, au dessus de la porte, était sans doute nabatéen. Le tombeau constituait un ensemble avec le triclinium qui se trouve en face.
				</p>
			</div>
		</div>

		<div class="al-khubtha" id="al-khubtha">
			<div class="image al-khubtha-img"></div>
			<div class="text-plus-title">
				<h3>Al-Khubtha</h3>
				<p>
					Al-Khubtha est une grande montagne dans laquelle sont creusées 4 tombes : les tombes royales. Le Tombeau à Étages, les Tombeau Corinthien, le Tombeau de la Soie et le Tombeau à l'Urne.
				</p>
			</div>
		</div>

		<div class="tombes-royales" id="tombes-royales">
			<div class="image tombes-royales-img"></div>
			<div class="text-plus-title">
				<h3>Tombes royales</h3>
				<p>
					Au nombre de quatre, ces tombes sont creusées dans la roche. Malgré le nom du monument, il ne semblerait qu'aucun élément ne permette d'identifier qu'un quelconque monarque y soit enterré. Cependant, au vu de l'importance des tombes, on imagine qu'elles devaient appartenir à de hauts dignitaires du royaume.
				</p>
			</div>
		</div>

		<div class="al-bint" id="al-bint">
			<div class="image al-bint-img"></div>
			<div class="text-plus-title">
				<h3>Qasr Al-Bint</h3>
				<p>
					Le Qasr al-Bint était l'un des principaux temples de la cité de Pétra et est l'une des rares structures construites encore relativement intacte. Si le nom donné par les bédouins (Qasr al-Bint Firaun) signifie « le palais de la fille du Pharaon », il s'agissait en fait du plus grand lieu de culte de la cité.
				</p>
			</div>
		</div>

		<div class="fontaine" id="fontaine">
			<div class="image fontaine-img"></div>
			<div class="text-plus-title">
				<h3>Fontaine au lion</h3>
				<p>
					On peut y apercevoir un très grand lion gravé dans la roche.
				</p>
			</div>
		</div>

		<div class="nymphaeum" id="nymphaeum">
			<div class="image nymphaeum-img"></div>
			<div class="text-plus-title">
				<h3>Nymphaeum</h3>
				<p>
					C'est un petit temple pourvu d'une fontaine ou grotte ayant une source consacré aux nymphes.
				</p>
			</div>
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

	</main>


	<?php
		include("includes/footer.inc.php");
	?>
</body>
</htmls>