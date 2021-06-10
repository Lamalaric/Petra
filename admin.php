<?php
	session_start();
	$page = "admin";
	include("includes/header.inc.php");
 

	// if (!isset($_SESSION['login']) && !isset($_SESSION['password'])) {	
	// 	header('Location: index.php');
	// }
?>
<body class="container-admin">
	
	<main>
	

		<h2>Interface administrateur</h2>
		<a href="deconnexion.php" >Déconnexion</a>
		
		<div class="indications-form">

			<label for="type-action">Que voulez-vous faire :</label>
			<select name="action" id="type-action">
				<option selected>Choisir une option...</option>
				<option value="ajout">Ajouter du contenu</option>
				<option value="modif">Modifier du contenu</option>
				<option value="supp">Supprimer du contenu</option>
			</select>
			<br>
			<label for="type-contenu">Sur quelle page :</label>
			<select name="contenu" id="type-contenu">
				<option selected>Choisir une option...</option>
				<option value="histoire">Paragraphe dans la page Histoire</option>
				<option value="visiter">Monument dans la page À visiter</option>
				<option value="image">Image dans la page Galerie d'image</option>
			</select>
			<br>
			<button onclick="getSelect()">Suivant</button>
			<br>

			<!-- AJOUTER DANS VISITER -->
			<form id="form-ajout-visiter" enctype="multipart/form-data" class="form-admin" action="send_form.php?page=admin&action=ajout-visiter" method="post">
				<h2>Ajouter un monument</h2>
				<label>Choisissez une image à afficher :</label>
				<input type="file" accept="image/*" name="UploadFileName" onchange="loadFile(event)" required>
				<input type="text" name="alt" placeholder="Alt de l'image" required>
				<div class="content-fr-en">
					<div class="content-fr">
						<h3>Partie française</h3>
						<input type="text" name="titre_fr" id="titre-fr" placeholder="Titre" required>
						<textarea placeholder="Texte" name="texte_fr" id="texte-fr" required></textarea>
					</div>
					<div class="content-en">
						<h3>Partie anglaise</h3>
						<input type="text" name="titre_en" id="titre-en" placeholder="Titre" required>
						<textarea placeholder="Texte" name="texte_en" id="texte-en" required></textarea>
					</div>
				</div>
				<input type="submit" name="submit" value="Ajouter">
			</form>

			<!-- MODIFIER DANS VISITER -->
			<form id="form-modif-visiter" enctype="multipart/form-data" class="form-admin" action="send_form.php?page=admin&action=modif-visiter" method="post">
				<h2>Modifier un monument</h2>
				<label>Modifier le monument dans la page "À visiter" ayant pour titre :</label>
				<input type="text" name="modif_titre" id="modif-titre" placeholder="Titre" required>
				<p class="warning">Le titre doit être exactement celui affiché en version française. Les majuscules ne sont pas importantes.</p>
				<label>Remplacer l'image :</label>
				<input type="file" accept="image/*" name="UploadFileName" onchange="loadFile(event)">
				<div class="content-fr-en">
					<div class="content-fr">
						<h3>Partie française</h3>
						<input type="text" name="titre_fr" id="titre-fr" placeholder="Titre">
						<textarea placeholder="Texte" name="texte_fr" id="texte-fr"></textarea>
					</div>
					<div class="content-en">
						<h3>Partie anglaise</h3>
						<input type="text" name="titre_en" id="titre-en" placeholder="Titre">
						<textarea placeholder="Texte" name="texte_en" id="texte-en"></textarea>
					</div>
				</div>
				<input type="submit" name="submit" value="Modifier">
			</form>

			<!-- SUPPRIMER DANS VISITER -->
			<form id="form-supp-visiter" class="form-admin" action="send_form.php?page=admin&action=supp-visiter" method="post">
				<h2>Supprimer un monument</h2>
				<label>Supprimer le monument dans la page "À visiter" ayant pour titre :</label>
				<input type="text" name="supp_titre" id="supp-titre" placeholder="Titre" required>
				<p class="warning">Le titre doit être exactement celui affiché en version française. Les majuscules ne sont pas importantes.</p>
				<input type="submit" name="submit" value="Supprimer">
			</form>

			<!-- PREVIEW VISUEL DANS VISITER -->
			<div id="preview-visiter" class="preview">
				<h2>Preview visuel</h2>
				<button class="btn-refresh" onclick="refreshPreview()">Actualiser</button>
				<!-- On recréer tout comme si c'était un contenu de la page À visiter -->
				<div class="container-v">
					<main>
						<div>
							<div class="slider">
								<div class="slides">
									<div class="image" id="preview-image"></div>
								</div>
								<div class="slide-links">
									<a href="" class="slide-link"><i class="far fa-dot-circle"></i></a>
								</div>
							</div>
							<div class="text-plus-title">
								<h3 id="preview-titre-fr"></h3>
								<p id="preview-texte-fr"></p>
							</div>
						</div>
					</main>
				</div>
			</div>



			<!-- AJOUTER DANS GALERIE D'IMAGE -->
			<form id="form-ajout-galerie" enctype="multipart/form-data" class="form-admin" action="send_form.php?page=admin&action=ajout-galerie" method="post">
				<h2>Ajouter une image</h2>
				<label>Choisissez une image à afficher :</label>
				<input type="file" accept="image/*" name="UploadFileName" id="input_image" onchange="loadFile(event)" required>
				<input type="text" name="alt" placeholder="Alt de l'image" required>
				<div class="content-fr-en">
					<div class="content-fr">
						<h3>Partie française</h3>
						<input type="text" name="titre_fr" id="titre-fr" placeholder="Titre">
						<textarea placeholder="Description" name="desc_fr" id="desc-fr"></textarea>
					</div>
					<div class="content-en">
						<h3>Partie anglaise</h3>
						<input type="text" name="titre_en" id="titre-en" placeholder="Titre">
						<textarea placeholder="Description" name="desc_en" id="desc-en"></textarea>
					</div>
				</div>

				<h3>Auteur</h3>
				<p>Si l'image provient d'une tierce personne / site, indiquer le nom de ce dernier ainsi que l'URL de son site si il y en a une :</p>
				<input type="text" name="nom_auteur" placeholder="Nom de l'auteur">
				<input type="text" name="site_auteur" placeholder="Site web de l'auteur">
				<input type="submit" name="submit" value="Ajouter">
			</form>

			<!-- MODIFIER DANS GALERIE D'IMAGE -->
			<form id="form-modif-galerie" enctype="multipart/form-data" class="form-admin" action="send_form.php?page=admin&action=modif-galerie" method="post">
				<h2>Modifier une image</h2>
				<label>Modifier l'image dans la page "Galerie d'image" ayant pour alt :</label>
				<input type="text" name="modif_alt" id="modif-alt" placeholder="Alt de l'image" required>
				<p class="warning">L'alt doit être exactement celui présent dans la base de donnée. Si vous ne vous en rappellez plus, ouvrez l'inspecteur d'élément (clic droit dans la page Galerie d'image), séléctionnez l'image, et regardez son alt dans la partie HTML. Les majuscules ne sont pas importantes.</p>
				<label>Remplacer l'image :</label>
				<input type="file" accept="image/*" name="UploadFileName" onchange="loadFile(event)">
				<input type="text" name="alt" placeholder="Alt de l'image">
				<div class="content-fr-en">
					<div class="content-fr">
						<h3>Description française</h3>
						<textarea placeholder="Description" name="desc_fr" id="texte-fr"></textarea>
					</div>
					<div class="content-en">
						<h3>Description anglaise</h3>
						<textarea placeholder="Description" name="desc_en" id="texte-fr"></textarea>
					</div>
				</div>
				<h3>Auteur</h3>
				<p>Si l'image provient d'une tierce personne / site, indiquer le nom de ce dernier à modifier ainsi que l'URL de son site si il y en a une :</p>
				<input type="text" name="nom_auteur" placeholder="Nom de l'auteur">
				<input type="text" name="site_auteur" placeholder="Site web de l'auteur">
				<input type="submit" name="submit" value="Modifier">
			</form>

			<!-- SUPPRIMER DANS GALERIE D'IMAGE -->
			<form id="form-supp-galerie" class="form-admin" action="send_form.php?page=admin&action=supp-galerie" method="post">
				<h2>Supprimer une image</h2>
				<label>Supprimer l'image dans la page "Galerie d'image" ayant pour alt :</label>
				<input type="text" name="supp_alt" id="supp-alt" placeholder="Alt de l'image" required>
				<p class="warning">L'alt doit être exactement celui présent dans la base de donnée. Si vous ne vous en rappellez plus, ouvrez l'inspecteur d'élément (clic droit dans la page Galerie d'image), séléctionnez l'image, et regardez son alt dans la partie HTML. Les majuscules ne sont pas importantes.</p>
				<input type="submit" name="submit" value="Supprimer">
			</form>

			<!-- PREVIEW VISUEL DANS GALERIE D'IMAGE -->
			<div id="preview-galerie" class="preview">
				<h2>Preview visuel</h2>
				<button class="btn-refresh" onclick="refreshPreview()">Actualiser</button>
				<!-- On recréer tout comme si c'était un contenu de la page Galerie d'image -->
				<div class="container-g">
					<main>
						<div class="container-images">
							<div>
								<img id="preview-image" src="#" alt="your image"></img>
								<p id="preview-desc-fr"></p>
							</div>
						</div>
					</main>
				</div>
			</div>


			<!-- AJOUTER DANS HISTOIRE -->
			<form id="form-ajout-histoire" enctype="multipart/form-data" class="form-admin" action="send_form.php?page=admin&action=ajout-histoire" method="post">
				<h2>Ajouter un paragraphe</h2>
				<label>Choisissez une image à afficher (optionnel) :</label>
				<input type="file" name="UploadFileName">
				<input type="text" name="alt" placeholder="Alt de l'image">
				<div class="content-fr-en">
					<div class="content-fr">
						<h3>Partie française</h3>
						<input type="text" name="titre_fr" id="titre-fr" placeholder="Titre" required>
						<textarea placeholder="Texte" name="texte_fr" id="texte-fr" required></textarea>
					</div>
					<div class="content-en">
						<h3>Partie anglaise</h3>
						<input type="text" name="titre_en" id="titre-en" placeholder="Titre" required>
						<textarea placeholder="Texte" name="texte_en" id="texte-en" required></textarea>
					</div>
				</div>
				<input type="submit" name="submit" value="Ajouter">
			</form>
		

			<?php
			//<!-- Si ça a marché, on l'indique à l'utilisateur -->
				error_reporting(0);
				if ($_GET['isAdded'] == true) {
					echo "<p id='info' class='ajout-ok'>Le contenu a bien été ajouté au site.</p>";
				}
				if ($_GET['isModif'] == true) {
					echo "<p id='info' class='ajout-ok'>Le contenu a bien été modifié.</p>";
				}
				if ($_GET['isDeleted'] == true) {
					echo "<p id='info' class='delete-ok'>Le contenu a bien été supprimé du site.</p>";
				}
			?>
			<script>
				// Cache le texte d'info au bout de 5sec
				let info = document.getElementById('info');
				setTimeout('info.style.display = "none"', 7500);

				// Affiche l'image actuelle en live
				var loadFile = function(event) {
				    var output = document.getElementById('preview-image');
				    output.src = URL.createObjectURL(event.target.files[0]);
				    output.onload = function() {
				    	URL.revokeObjectURL(output.src) // free memory
			   		}
				};
			</script>

		</div>

	</main>

</body>

<?php 
	include("includes/footer.inc.php");
 ?>
