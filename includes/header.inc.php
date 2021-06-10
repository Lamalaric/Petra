<?php
	// Initialisation de la variable langue qui va indiquer à la page si le contenu doit
	// être affiché en anglais ou en français.
	// 0 : français
	// 1 : anglais
	$langue = 0;
	if (isset($_GET["lang"])) {
		switch ($_GET["lang"]) {
			case 0:
				$langue = 0; break;
			case 1:
				$langue = 1; break;
		}
	}

	// Traductions
	// Si on est en français on prend le texte à l'index 0 de la liste.
	// Si on est en anglais on prend le texte à l'index 1 de la liste.
	/* NAV */
	$nav_home = array("Accueil", "Home");
	$nav_history = array("Histoire", "History");
	$nav_galery = array("Galerie d'image", "Image gallery");
	$nav_visit = array("À visiter", "To visit");
	$nav_infos = array("Infos pratiques", "Practical informations");
	$nav_contact = array("À propos", "About us");

	/* INDEX */
	$a1_h1 = array("Pétra, une cité nabatéenne", "Petra, a Nabatean city");
	$introduction = array("Pétra est une cité antique du sud de l’actuelle Jordanie.<br>Son attraction mondiale en a fait l’un des principaux pôle touristique de Jordanie. Fondée en -1200 par les Édomites, elle fut par la suite occupée par les Nabatéens à partir du VIe siècle avant JC, qui la firent prospérer grâce à sa position stratégique sur la route des caravanes en provenance de l’Orient. Aujourd’hui classée au patrimoine mondial de l’UNESCO, elle est considérée comme l’un des plus beaux sites troglodytiques du monde.",
	    "Petra is an ancient city in the south of present-day Jordan.<br>Its worldwide attraction has made it one of Jordan's main tourist poles. Founded in 1200 BC by the Edomites, it was later occupied by the Nabataeans from the 6th century BC who made it prosper thanks to its strategic position on the route of caravans from the East. Today, classified as a UNESCO World Heritage Site, it is considered one of the most beautiful troglodytic sites in the world.");
	$a3_h2 = array("Parcours", "Courses");
	$kazneh = array("Le Kazneh", "Al Kazneh");
	$theatre = array("Théâtre nabatéen", "Nabataean theater");
	$a3_p = array("Nous avons sélectionné pour vous les meilleurs parcours à effectuer, tout en nous assurant que vous ne raterez aucun des monuments phare de cette magnifique citée nabatéenne.", "We have selected for you the best routes to take, ensuring that you will not miss any of the highlights of this magnificent Nabatean city.");
	$a3_label = array("Durée du parcours : ", "Duration of the course : ");
	$a3_option0 = array("Aucun ", "None ");
	$a3_option1 = array("Tout afficher ", "Display all ");
	$a3_input_value = array("Rechercher", "Search");
	$a4_h2 = array("IMAGES À LA UNE", "FEATURED IMAGES");
	$a4_a = array("Voir plus", "See more");

	/* HISTOIRE */
	$h1_h1 = array("La grande histoire de Pétra", "The great history of Petra");
	$sommaire = array("Sommaire", "Summary");
	$sommaire_1 = array("Histoire", "History");
	$sommaire_1_1 = array("Antiquité", "Antiquity");
	$sommaire_1_2 = array("Moyen-Âge", "Middle Ages");
	$sommaire_2 = array("Recherches archéologiques", "Archaeological researches");
	$sommaire_3 = array("Architecture", "Architecture");
	$sommaire_4 = array("Pétra dans l'art et la culture", "Petra in art and culture");
	$h_button = array("Voir plus", "See more");
	$h2_h2 = $sommaire_1;
	$h2_h3 = $sommaire_1_1;
	$h2_p = array("Aux alentours de 1200 avant  JC les Édomites furent les premiers à occuper l’emplacement actuel de la cité de Pétra. Originaire du royaume d’Édom (sud de l’actuelle Jordanie) ces tribus nomades étaient réputés pour leurs textiles, leurs céramiques et leur travail des métaux. Parmi leur héritage sur place, on retrouve les traces d’une série de fortins au dessus de promontoires visant à les protéger d’éventuelles attaques.", "Around 1200 B.C. the Edomites were the first to occupy the present site of the city of Petra. Originally from the Kingdom of Edom (southern Jordan), these nomadic tribes were famous for their textiles, ceramics, and metalwork. Nowaday, their legacies on the site are traces of a series of forts above promontories to protect them from possible attack.");
	$h3_p = array("La fin de l’occupation Édomite vers le VIe siècle avant JC se mêle avec le début de l’occupation nabatéenne qui fit prospérer la cité en en faisant un carrefour du commerce oriental notamment grâce aux caravanes de chameaux. Les Nabatéens étaient à l’origine un peuple de nomades connus pour leur commerce des aromates.", "The end of the Edomite occupation around the 6th century BC is mixed with the beginning of the Nabataean occupation which made the city prosper by making it a crossroads of oriental trade, notably thanks to camel caravans. The Nabataeans were originally a nomadic people known for their trade in herbs.");
	$h4_p = array("C’est durant l’occupation nabatéenne (VIe avant J.-C. jusqu’au Ie siècle après J.-C.) qu’apparaissent les principaux monuments comme Al Kazneh. Il s’agit principalement de tombeaux royaux.<br>
		La cité attire alors l’attention de nombreux rois locaux et les nabatéens devrons repousser des nombreuses incursions ennemies. C’est à ce moment qu’est construit le Temple de Deir, en l’honneur du roi Obodas 1er après de nombreuses victoires militaires. Après à la mort du dernier roi Nabatéen Rabbel II, la cité tombe aux mains des romains. <br>
		En 363 lors de sa période byzantine, la cité est frappée d’un violent séisme détruisant de nombreux bâtiments comme les aqueducs et le théâtre. La ville affaiblie depuis l’occupation romaine ne fut pas reconstruite et perdra petit à petit ses habitants.", "It was during the Nabataean occupation (6th B.C. to 1st century A.D.) that the main monuments such as Al Kazneh appeared. They are mainly royal tombs.<br>
		The city then attracted the attention of many local kings and the Nabataeans had to repel numerous enemy incursions. It is at this time that the Temple of Deir was built in honor of King Obodas I after many military victories. After the death of the last Nabataean king, Rabbel II, the city fell to the Romans.<br>
		In 363 during its Byzantine period, the city was struck by a violent earthquake destroying many buildings like the aqueducts and the theater. The city weakened since the Roman occupation was not rebuilt and will lose little by little its inhabitants.");
	$h5_h3 = $sommaire_1_2;
	$h5_p_1 = array("Au Moyen Age, la cité se dépeuple et en l'an 700 il ne s’agit plus que d’un petit village, ignoré, même par l’expansion de l’Islam.", "In the Middle Ages, the city was depopulated and in 700 it was only a small village, ignored even by the expansion of Islam.");
	$h5_p_2 = array("La cité tombe peu à peu dans l’oubli.", "The city falls step by step into oblivion.");
	$h6_h2 = $sommaire_2;
	$h6_p = array("La cité nabatéenne fut redécouverte par le monde occidental en 1812 grâce à l’explorateur suisse Jean-Louis Burckhardt. Malheureusement la situation géopolitique d’alors ne lui permit pas d’étudier les vestiges de la cité oubliée en détail et dû se contenter de la traverser sans même pouvoir prendre de notes. Cependant il fit part de sa découverte aux occidentaux installés en Syrie et en Égypte. Il fallut attendre 6 ans pour qu’une véritable expédition ait lieu, menée par William John Bankes, un égyptologue anglais. Avec son équipe pue rester quelques jours et faire des croquis des lieux. Par la suite Pétra fit l’objet de nombreuses expéditions et recherches archéologiques.", "The Nabatean city was rediscovered by the Western world in 1812 thanks to the Swiss explorer Jean-Louis Burckhardt. Unfortunately, the geopolitical situation at the time did not allow him to study the remains of the forgotten city in detail and he had to be satisfied with crossing it without even being able to take notes. However, he shared his discovery with the Westerners settled in Syria and Egypt. It was necessary to wait 6 years for a true expedition to take place, led by William John Bankes, an English Egyptologist. He and his team stayed a few days and made sketches of the place. Thereafter, Petra was the subject of many expeditions and archaeological research.");
	$h7_h2 = $sommaire_3;
	$h7_p = array("Les premières constructions des Nabatéens étaient simplement creusées dans la roche de manière assez rustique. Progressivement, les habitants s’inspirèrent des styles architecturaux des civilisations voisines afin de créer des façades plus complexe. On peut aussi retrouver des traces de l’architecture hellénistiques dans l’aspect des bâtiments public que ce soit les colonnes ou encore le péristyle. Les lieux de vie et de travail des habitants sont quand à eux d’avantage d’inspiration arabe.", "The first constructions of the Nabateans were simply dug into the rock in a rather rustic way. Gradually, the inhabitants were inspired by the architectural styles of neighboring civilizations to create more complex facades. Traces of Hellenistic architecture can also be found in the appearance of the public buildings, be it the columns or the peristyle. The living and working places of the inhabitants are more of Arab inspiration.");
	$h8_h2 = $sommaire_4;
	$h8_p = array("Depuis sa redécouverte, Pétra subjugue et inspire. C’est ainsi que virent le jours de nombres œuvres . Plusieurs peintre en firent des représentations.<br><br>
		La cité nabatéenne fit aussi quelques apparitions sur grand écran que ce soit dans Indiana Jones et la dernière croisade, Transformers 2, Le Retour de la Momie ou encore Mortal Kombat : Destruction Finale. Le jeu vidéo Overwatch lui fit aussi hommage en recréant la cité dans un monde futuriste.", "Since his rediscovery Petra subjugates and inspires, that's how many works saw the light of day. Several painters made representations of it.<br><br>
		The Nabataean city also made some appearances on large screen that it is in Indiana Jones and the last crusade, Transformers 2, The Return of the Mummy or Mortal Kombat: Final Destruction. The video game Overwatch also paid homage to him by recreating the city in a futuristic world.");

	/* GALERIE */
	/*
	 * Exemple à suivre :

	<div>
		<h4 class=\"titre\">TITRE</h4><br>
		<p class=\"auteur\">AUTEUR - <i class=\"fas fa-globe-americas\"></i> <a href=\"URL DU SITE WEB\" target=\"_blank\">Site web</a></p>
		<p class=\"description\">
			DESCRIPTION
		</p>
	</div>
	<div>
	 *
	 *
	*/
	$galerie_h1 = array("Galerie d'image", "Image gallery");
	$galerie_alex1 = array("<div><h4 class=\"titre\">Ad Deir</h4><p class=\"auteur\">Alexandre Carpentier</p><p class=\"description\">Une magnifique photo d'Ad Deir prise lors d'un couché du soleil, avec un mélange de couleur qui fait plaisir à l'oeuil.</p></div>", "<div><h4 class=\"titre\">Ad Deir</h4><p class=\"auteur\">Alexandre Carpentier</p><p class=\"description\">A beautiful picture of Ad Deir taken during a sunset, with a mix of colors that pleases the eye.</p>
		</div>");
	$galerie_alex2 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_alex3 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img1 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img2 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img3 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img4 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img5 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img6 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img7 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img8 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img9 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img10 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img11 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img12 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img13 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img14 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img15 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img16 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img17 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img18 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img19 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img20 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img21 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_img22 = array("<div><h4>Titre</h4><br><p>Description</p></div>", "<div><h4>Titre</h4><p>Description</p><br></div>");
	$galerie_credits_info = array("Si vous aussi vous souhaitez publier vos photographies de Pétra sur notre site, n'hésitez pas à nous contacter ", "If you also wish to publish your photographs of Petra on our site, do not hesitate to contact us ");
	$galerie_credits_info_ici = array("ici", "here");

	/* A VISITER */
	$visiter_h1 = array("Principaux monuments", "Main monuments");
	$visiter_1_titre = array("Le Kazneh", "El Kazneh");
	$visiter_1_texte = array("Cette édifice troglodyte, sans doute le plus impressionnant, serait le tombeau d’un roi nabatéen mort autour de l’an 40 de notre ère. Le style architectural de la façade est inspiré de celui d’Alexandrie que l’on peut également retrouver dans les décors de certaines villas de Pompéi. À l’intérieur du monuments se trouve un vestibules débouchant sur 3 salles complètement souterraine dont les dimensions vont jusqu’à 11*28 m pour la plus grande.", "Perhaps the most impressive of the troglodytic buildings is the tomb of a Nabataean king who died around 40. The architectural style of the facade is inspired by that of Alexandria, which can also be found in the decoration of some of the villas in Pompeii. Inside the monument is a vestibule leading to 3 completely underground rooms, the largest of which is 11*28 m in size.");
	$visiter_2_titre = array("Ad Deir", "Ad Deir");
	$visiter_2_texte = array("Ce monument aux envergures impressionnantes (45 m de large et 42 m de haut) est lui aussi un tombeau d’un roi nabatéen, sans doute Obodas 1er qui accéda au trône en -96. Une urne funéraire de 9 mètres de haut est présente à son sommet. Il fut par la suite utilisé comme monastère par des Chrétiens qui lui donnèrent son nom actuel.", "This monument of impressive proportions (45 meters wide and 42 meters high) is also the tomb of a Nabataean king, probably Obodas I, who acceded to the throne in 96 BC. A 9-meter (30-foot) tall funerary urn stands at the top of the tomb. It was later used as a monastery by Christians who gave it its present name.");
	$visiter_3_titre = array("Théâtre nabatéen", "Nabatean theater");
	$visiter_3_texte = array("L’occupation romaine a elle aussi marqué la cité de Pétra. Un théâtre pouvant accueillir de 3000 à 8500 spectateurs a été creusé dans le grès.<br>Il avait un orchestre semi-circulaire et des gradins en trois niveaux superposés en forme de lune croissante.", "The Roman occupation also marked the city of Petra. A theater that could accommodate from 3000 to 8500 spectators was dug in the sandstone.<br>It had a semi-circular orchestra and tiers in three superimposed levels in the shape of a growing moon.");
	$visiter_4_titre = array("Les aqueducs", "The aqueducts");
	$visiter_4_texte = array("La cité se situe dans une zone très aride. Ainsi plusieurs systèmes de gestion de l’eau furent mis en place. L’eau de la cité provenait essentiellement de la pluie, le sol étant peu perméable, les habitants pouvaient la récupérer aux alentours. Pour l’acheminer, deux aqueducs furent creusé dans la parois le long du Sîq (défilé rocheux menant devant Al Kazneh, l’un alimenté par l’Aïn Moussa (cours d’eau passant non loin), l’autre par les eaux de pluies. Enfin environs 200 citernes permettaient de stocker l’eau à proximiter de la citer.", "The city is located in a very arid area. Thus several systems of water management were set up. The water of the city came essentially from the rain, the ground being not very permeable, the inhabitants could recover it in the surroundings. To convey it, two aqueducts were dug in the wall along the Sîq (rocky gorge leading in front of Al Kazneh), one fed by the Aïn Moussa (a stream passing nearby), the other by rainwater. Finally, about 200 cisterns were used to store water near the cistern.");
	$visiter_5_titre = array("Columbarium", "Columbarium");
	$visiter_5_texte = array("L'utilisation de ce monument très étrange est inconnue.<br>Contrairement à ce que son nom indique, il ne s'agissait pas d'un pigeonnier pour les pigeons mais probablement d'un lieu pour y conservées les urnes cinéraires.", "The use of this very strange monument is unknown.<br>Contrary to its name, it was not a pigeon loft for pigeons but probably a place to keep cinerary urns.");
	$visiter_6_titre = array("Tombe du soldat romain", "Roman soldier's tomb");
	$visiter_6_texte = array("Elle fut nommé ainsi à tort, car le soldat représenté dans la niche centrale, au dessus de la porte, était sans doute nabatéen. Le tombeau constituait un ensemble avec le triclinium qui se trouve en face.", "It was wrongly so named because the soldier in the central niche above the doorway was probably a Nabataean. The tomb formed a complex with the triclinium opposite.");
	$visiter_7_titre = array("Al-Khubtha", "Al-Khubtha");
	$visiter_7_texte = array("Al-Khubtha est une grande montagne dans laquelle sont creusées 4 tombes : les tombes royales. Le Tombeau Palais, les Tombeau Corinthien, le Tombeau de la Soie et le Tombeau à l'Urne.", "Al-Khubtha is a large mountain in which four tombs are dug: the royal tombs. The Palace Tomb, the Corinthian Tomb, the Silk Tomb and the Urn Tomb.");
	$visiter_8_titre = array("Tombes Royales", "Royal Tombs");
	$visiter_8_texte = array("Au nombre de quatre, ces tombes sont creusées dans la roche. Malgré le nom du monument, il ne semblerait qu'aucun élément ne permette d'identifier qu'un quelconque monarque y soit enterré. Cependant, au vu de l'importance des tombes, on imagine qu'elles devaient appartenir à de hauts dignitaires du royaume.", "There are four of these tombs carved into the rock. Despite the name of the monument, there is no evidence to suggest that any monarch is buried there. However, in view of the size of the tombs, one can imagine that they must have belonged to high dignitaries of the kingdom.");
	$visiter_9_titre = array("Qasr Al-Bint", "Qasr Al-Bint");
	$visiter_9_texte = array("Le Qasr al-Bint était l'un des principaux temples de la cité de Pétra et est l'une des rares structures construites encore relativement intacte. Si le nom donné par les bédouins (Qasr al-Bint Firaun) signifie « le palais de la fille du Pharaon », il s'agissait en fait du plus grand lieu de culte de la cité.", "The Qasr al-Bint was one of the main temples of the city of Petra and is one of the few built structures still relatively intact. Although the name given by the Bedouins (Qasr al-Bint Firaun) means \"the palace of the Pharaoh's daughter\", it was in fact the largest place of worship in the city.");
	$visiter_10_titre = array("Fontaine au lion", "Lion fountain");
	$visiter_10_texte = array("Ce relief monumental d'un lion est sculpté dans la paroi rocheuse orientale du site où se trouvait autrefois un bassin. Le canal au-dessus de la tête (aujourd'hui partiellement détruite) de l'animal est alimenté par une branche de l'aqueduc qui alimentait en eau potable la zone urbaine.", "This monumental relief of a lion is carved into the eastern rock face of the site, where a pool once stood. The canal above the (now partially destroyed) head of the animal is fed by a branch of the aqueduct that supplied the urban area with drinking water.");
	$visiter_11_titre = array("Nymphée", "Nymphaeum");
	$visiter_11_texte = array("Un Nymphée est un bassin recevant sont eau d'une source sacrée. Seules les fondations subsistent aujourd'hui, à l'ombre d'un arbre.", "A Nymphaeum is a basin receiving its water from a sacred spring. Only the foundations remain today, in the shade of a tree.");
	$visiter_12_titre = array("Grand temple", "Great Temple");
	$visiter_12_texte = array("Construit à l'extrémité ouest de l'allée des colonnes, ce temple fut dédié au dieu nabatéen Dusarès et à son épouse al-Uzza. Par sa forme, le temple rappelle le temple de Bêl de Palmyre (qui fut détruit en 2015 au cours de la guerre en Syrie).", "Built at the western end of the columned alley, this temple was dedicated to the Nabataean god Dusares and his wife al-Uzza. The temple's shape is reminiscent of the Temple of Bel in Palmyra (which was destroyed in 2015 during the Syrian war).");
	$visiter_13_titre = array("Tombe d'Unayshu", "Tomb of Unayshu");
	$visiter_13_texte = array("La tombe d'Unayshu date de la fin du 1er siècle après JC.<br>Le pilastre de coin de la tombe et ceux qui encadrent l'entrée sont un dessin typiquement nabatéen. La façade lisse est dans le même style que les tombes trouvées à Madâin Sâlih en Arabie Saoudite.", "The tomb of Unayshu dates to the late 1st century AD.<br>The corner pilaster of the tomb and those that frame the entrance are a typical Nabataean design. The smooth façade is in the same style as the tombs found at Madâin Sâlih in Saudi Arabia.");
	$visiter_14_titre = array("Tombeau à Obelisques", "Tomb of the Obelisk");
	$visiter_14_texte = array("Ce tombeau se trouve sur le chemin pour accéder à Pétra, ainsi il s'agit du premier monument que l'on croise. Par ailleurs, ce sont en réalité deux temples distincts superposés et non un seul comme on pourrait le croire. Les quatre obélisques situés au niveau supérieur et qui encadrent une petite niche sont en réalité des nefesh représentant les personnes inhumées dans la chambre funéraire.", "This tomb is located on the way to Petra, so it is the first monument that we come across. Moreover, it is actually two distinct temples superimposed on each other and not one as one might think. The four obelisks located on the upper level and framing a small niche are in reality nefesh representing the people buried in the burial chamber.");

	/* INFOS PRATIQUE */
	$infos_h1 = array("Informations pratiques", "Practicals informations");
	$infos_title1 = array("Plan du site", "Site map");
	$infos_title2 = array("Divers", "Other");
	$infos_text1_1 = array("Le site de Petra et son office de tourisme est ouverte de 6h00 à 18h00 en été, et de 6h00 à 16h00 en hiver.<br>Nous vous recommandons de réserver une chambre d'hôtel avant de débuter votre voyage.<br><br>", "The Petra site and its tourist office is open from 6:00 am to 6:00 pm in summer, and from 6:00 am to 4:00 pm in winter.<br>We recommend that you book an hotel room before starting your trip.<br><br>");
	$infos_text1_2 = array("Une fois là-bas, il se peut que vous vous retrouviez à un endroit sans connexion. Ne prennez pas de risque et téléchargez le site web afin d'accéder à toutes les informations dont vous aurez-besoin, hors connexion :<br><br>", "Once there, you may find yourself in a place without connection. Don't take any chances and download the website to access all the information you need, offline:<br><br>");
	$infos_text_download = array("Télécharger", "Download");
	$infos_subtitle1 = array("Recommandations diplomatiques", "Diplomatic advices");
	$infos_text2 = array("Le Royaume hachémite de Jordanie, pôle de stabilité dans une région traversée par les crises, n’est cependant pas à l’abri de troubles, en particulier du risque terroriste. La Jordanie connaît une menace permanente d’attentats. Cette menace est prise en compte par les autorités jordaniennes qui continuent de se mobiliser pour prévenir le risque terroriste ou infiltrations aux frontières.", "The Hashemite Kingdom of Jordan, a pole of stability in a region plagued by crises, is not, however, immune to unrest, particularly the risk of terrorism. Jordan is under constant threat of terrorist attacks. This threat is taken into account by the Jordanian authorities who continue to mobilize to prevent the risk of terrorism or infiltration at the borders.");
	$infos_subsubtitle1 = array("Recommandations", "Advices");
	$infos_subsubtitle1_text1 = array("La discrétion, y compris vestimentaire, doit être de mise aux abords des mosquées, notamment lors des rassemblements pour la prière du vendredi.", "Discretion, including clothing, must be exercised in the vicinity of mosques, especially during gatherings for Friday prayers.");
	$infos_subsubtitle1_text2 = array("Il est préférable d’éviter tout signe distinctif permettant d’être identifié comme français (drapeaux, logos français sur véhicules, vêtements, etc.).", "It is preferable to avoid any distinctive sign allowing to be identified as French (flags, French logos on vehicles, clothing, etc.). ");
	$infos_subsubtitle1_text3 = array("Il est recommandé aux femmes de ne pas voyager seules et de préférence de jour, et d’adopter une tenue sobre en public. De manière générale, les épaules dénudées, les shorts et les jupes sont à éviter.", "It is recommended that women do not travel alone and preferably during the day, and that they dress conservatively in public. In general, bare shoulders, shorts and skirts should be avoided.");
	$infos_subsubtitle2 = array("Zone de vigilance", "Vigilance area");
	$infos_subsubtitle2_text1 = array("Frontière entre la Jordanie et la Syrie.", "Border between Jordan and Syria.");
	$infos_subsubtitle2_text2 = array("Frontière entre la Jordanie et l’Irak.", "Border between Jordan and Iraq.");
	$infos_subsubtitle2_text3 = array("Péninsule du Sinaï (Égypte) depuis la Jordanie.", "Sinai Peninsula (Egypt) from Jordan.");
	$infos_subtitle2 = array("Quelques traductions utiles", "Some helpful translations");
	$infos_trad1 = array("Bonjour", "Hello");
	$infos_trad2 = array("Merci", "Thank you");
	$infos_trad3 = array("S'il vous plaît", "Please");
	$infos_trad4 = array("Au revoir", "Goodbye");
	$infos_trad5 = array("Manger", "Eat");
	$infos_trad6 = array("Dormir", "Sleep");
	$infos_trad7 = array("Où sont les toilettes", "Where are the toilets");
	$infos_trad8 = array("Je ne parle pas arabe", "I don't speak Arabia");
	$infos_trad9 = array("Parlez-vous anglais", "Do you speak English");
	$infos_trad10 = array("Parlez-vous français", "Do you speak french");
	$infos_subtitle3 = array("Convertisseur de monnaie", "Currency converter");
	$infos_title3 = array("Aux alentours", "near by");
	$infos_subtitle4 = array("Hôtels", "Hotels");
	$infos_subtitle3_text1 = array("Besoin de vous loger ? Ne vous en faites pas ! Nous avons séléctionné pour vous les hôtels à proximité, classé par étoiles.", "Need a place to stay? Don't worry about it! We have selected for you the hotels in the area, classified by stars.");
	$infos_hotel_plus = array("Les + :", "Advantages :");
	$infos_hotel_tarif = array("Tarifs : ", "Prices :");
	$infos_hotel_non_renseigne = array("Non renseignés.", "Unknown.");
	$infos_hotel_address = array("Adresse", "Address");
	$infos_hotel_website = array("Site web", "Website");
	$infos_hotel_telephone = array("Téléphone", "Phone");


	$practical_info_s1 = array("Plan du site", "Site map");
	$practical_info_s2 = array("Divers", "Other");
	$practical_info_s2_1 = array("Recommandations diplomatiques", "Diplomatic advices");

	$practical_info_s2_2 = array("Quelques traductions utiles", "Some helpful translations");

	$practical_info_s2_3 = array("Convertisseur de monnaie", "Currency converter");

	$practical_info_s3 = array("Aux alentours", "Near by");

	$practical_info_s3_1 = array("Hôtels", "Hotels");

	$practical_info_s3_2 = array("Restaurants", "Restaurants");


	$var = array("", "");
	$practical_info_h1 = array("Informations pratiques", "Practicals informations");
	$practical_info_title1 = array("PLAN DU SITE", "SITE MAP");
	$practical_info_title2 = array("DIVERS", "OTHER");
	$practical_info_text1 = array("Le site de Pétra et son office de tourisme est ouverte de 6h00 à 18h00 en été, et de 6h00 à 16h00 en hiver.<br>Nous vous recommandons de réserver une chambre d'hôtel avant de débuter votre voyage.", "The Petra site and its tourist office is open from 6:00 am to 6:00 pm in summer, and from 6:00 am to 4:00 pm in winter.<br>We recommend that you book a hotel room before starting your trip.");
	$practical_info_subtitle1 = array("RECOMMANDATIONS DIPLOMATIQUES", "DIPLOMATIC ADVICE");
	$practical_info_text2 = array("Le Royaume hachémite de Jordanie, pôle de stabilité dans une région traversée par les crises, n’est cependant pas à l’abri de troubles, en particulier du risque terroriste. La Jordanie connaît une menace permanente d’attentats. Cette menace est prise en compte par les autorités jordaniennes qui continuent de se mobiliser pour prévenir le risque terroriste ou infiltrations aux frontières.", "The Hashemite Kingdom of Jordan, a pole of stability in a region plagued by crises, is not, however, immune to unrest, particularly the risk of terrorism. Jordan is under constant threat of terrorist attacks. This threat is taken into account by the Jordanian authorities who continue to mobilize to prevent the risk of terrorism or infiltration at the borders.");
	$practical_info_subsubtitle1 = array("Recommandations", "Advice");
	$practical_info_subsubtitle1_text1 = array("La discrétion, y compris vestimentaire, doit être de mise aux abords des mosquées, notamment lors des rassemblements pour la prière du vendredi.", "Discretion, including clothing, must be exercised in the vicinity of mosques, especially during gatherings for Friday prayers.");
	$practical_info_subsubtitle1_text2 = array("Il est préférable d’éviter tout signe distinctif permettant d’être identifié comme français (drapeaux, logos français sur véhicules, vêtements, etc.).", "It is preferable to avoid any distinctive sign allowing to be identified as French (flags, French logos on vehicles, clothing, etc.). ");
	$practical_info_subsubtitle1_text3 = array("Il est recommandé aux femmes de ne pas voyager seules et de préférence de jour, et d’adopter une tenue sobre en public. De manière générale, les épaules dénudées, les shorts et les jupes sont à éviter.", "It is recommended that women do not travel alone and preferably during the day, and that they dress conservatively in public. In general, bare shoulders, shorts and skirts should be avoided.");
	$practical_info_subsubtitle2 = array("Zone de vigilance", "Vigilance area");
	$practical_info_subsubtitle2_text1 = array("Frontière entre la Jordanie et la Syrie.", "Border between Jordan and Syria.");
	$practical_info_subsubtitle2_text2 = array("Frontière entre la Jordanie et l’Irak.", "Border between Jordan and Iraq.");
	$practical_info_subsubtitle2_text3 = array("Péninsule du Sinaï (Égypte) depuis la Jordanie.", "Sinai Peninsula (Egypt) from Jordan.");
	$practical_info_subtitle2 = array("QUELQUES TRADUCTIONS UTILES", "SOME HELPFUL TRANSLATIONS");
	$practical_info_subtitle3 = array("Convertisseur de monnaie", "Currency converter");
	$practical_info_title3 = array("Aux alentours", "near by");
	$practical_info_subtitle4 = array("Hôtels", "Hotels");
	$practical_info_subtitle3_text1 = array("Besoin de vous loger ? Ne vous en faites pas ! Nous avons séléctionné pour vous les hôtels à proximité, classé par étoiles.", "Need a place to stay? Don't worry about it! We have selected for you the hotels in the area, classified by stars.");
	$practical_info_hotel_plus = array("Les + :", "The + :");
	$practical_info_hotel_tarif = array("Tarifs : ", "Rates :");
	$practical_info_hotel_non_renseigne = array("Non renseignés.", "No informations");
	$practical_info_hotel_address = array("Adresse", "Address");
	$practical_info_hotel_web_site = array("Site web", "Web site");
	$practical_info_hotel_telephone = array("Téléphone", "Telephone");

	$practical_info_hotel1_1 = array("L'hotel le plus proche de Pétra", "The nearest hotel to Petra");
	$practical_info_hotel1_2 = array("Vue sur la vallée du grand rift", "View of the Great Rift Valley");
	$practical_info_hotel1_5 = array("Piscine", "Pool");
	$practical_info_hotel2_1 = array("Internet haut débit gratuit", "Free high speed internet");
	

	$infos_hotel1_1 = array("L'hotel le plus proche de Petra", "The nearest hotel to Petra");
	$infos_hotel1_2 = array("Vue sur la vallée du grand rift", "View of the Great Rift Valley");
	$infos_hotel1_5 = array("Piscine", "Pool");

	$infos_hotel2_1 = array("Divertissement le soir", "Nightly entertainment");
	$infos_hotel2_tarif = array(
							"1 lit : 62 à 88 JOD (72 à 102€)<br>
							2 lits : 75 à 88 JOD (87 à 102€)<br>
							3 lits : 110 à 141 JOD (128 à 164€)<br><br>
							Les prix varient selon la taille des lits. (Single ou Kings)<br>
							Prix indiqués pour une nuit.", 
							"1 bed : 62 to 88 JOD (88 to 124\$ / 62 to 88£)<br>
							2 beds : 75 to 88 JOD (106 to 124\$ / 75 to 88£)<br>
							3 beds : 110 to 141 JOD (155 to 175\$ / 110 to 141£)<br><br>
							Prices vary depending on the size of the beds. (Single or Kings)<br>
							Prices are for one night.");

	$practical_info_hotel3_2 = array("Situé à 150m de Pétra", "Located at 150m from Petra");
	$practical_info_hotel3_3 = array("Piscine", "Pool");
	$practical_info_hotel3_4 = array("Déjeuner gratuit", "Free lunch");
	$practical_info_hotel3_5 = array("Parking gratuit", "Free parking");
	

	$infos_hotel3_2 = array("Situé à 150m de Petra", "Located at 150m from Petra");
	$infos_hotel3_3 = array("Piscine", "Pool");
	$infos_hotel3_4 = array("Déjeuner gratuit", "Free lunch");
	$infos_hotel3_5 = array("Parking gratuit", "Free parking");
	$infos_hotel3_tarif = array(
							"2 personne : 137 JOD (165€)<br>
							3 personnes : 168 JOD (195€)<br>
							5 personnes : 215 JOD (250€)<br>", 
							"2 persons : 137 JOD (193\$ / 137£)<br>
							3 persons : 168 JOD (236\$ / 168£)<br>
							5 persons : 215 JOD (303\$ / 215£)<br>");
	$infos_hotel4_1 = array("Internet gratuit", "Free internet");
	$infos_hotel4_tarif = array(
							"Suite Deluxe : 35 JOD (41€)<br>
							King suite : 106 JOD (123€)<br>
							Suite avec vue sur océan : 142 JOD (165€)", 
							"Suite Deluxe : 35 JOD (39\$ / 35£)<br>
							King suite : 106 JOD (149\$ / 106£)<br>
							Ocean view Suite : 142 JOD (200\$ / 142£)");

	$practical_info_hotel5_1 = array("Situé à 10min de Pétra", "Located at 10min from Petra");
	$practical_info_hotel5_4 = array("Petit-déjeuner gratuit", "Free breakfast");
	$practical_info_hotel5_5 = array("Wifi gratuit", "Free Internet");
	$practical_info_hotel5_6 = array("Parking gratuit", "Free parking");
	

	$infos_hotel5_1 = array("Situé à 10min de Petra", "Located at 10min from Petra");
	$infos_hotel5_4 = array("Petit-déjeuner gratuit", "Free breakfast");
	$infos_hotel5_5 = array("Wifi gratuit", "Free Internet");
	$infos_hotel5_6 = array("Parking gratuit", "Free parking");
	$infos_hotel5_tarif = array(

							"2 personnes : 81 JOD (95€)<br>
							3 personnes : 75 à 85 JOD (87 à 99€)", 
							"2 persons : 81 JOD (114\$ / 81£)<br>
							3 persons : 75 to 85 JOD (105\$ to 119\$ / 75 to 85£)");


	$practical_info_hotel6_1 = array("Proche de Pétra", "Near to Petra");
	$practical_info_hotel6_3 = array("Piscine", "Pool");
	$practical_info_hotel6_5 = array("Wifi gratuit", "Free Internet");
	

	$infos_hotel6_1 = array("Proche de Petra", "Near to Petra");
	$infos_hotel6_3 = array("Piscine", "Pool");
	$infos_hotel6_5 = array("Wifi gratuit", "Free Internet");
	$infos_hotel6_tarif = array(
							"1 personne : 37 ou 58 JOD (44 ou 68€)<br>
							2 personnes : 53 ou 66 JOD (62 ou 77€)<br>
							3 personnes : 72 ou 89 JOD (84 ou 104€)<br>
							4 personnes : 93 ou 117 JOD (108 ou 136€)<br><br>
							Le premier prix indiqué fait référence aux saisons hautes, le second aux saisons basses.", 
							"1 person : 37 or 58 JOD (52 or 81\$ / 37 or 58£)<br>
							2 persons : 53 or 66 JOD (74 or 93\$ / 53 or 66£)<br>
							3 persons : 72 or 89 JOD (101 or 125\$ / 72 or 89£)<br>
							4 persons : 93 or 117 JOD (131 or 165\$ / 93 or 117£)<br><br>
							The first price indicated refers to high seasons, the second to low seasons.");


	$practical_info_subtitle5_text1 = array("Un petit creux ? Pas de soucis, voici une liste de restaurants aux alentours qui sauront vous préparer les meilleures spécialités du coin !", "Feeling hungry? Don't worry, here is a list of restaurants in the area that will be able to prepare the best specialties of the area!");
	$practical_info_resto_horaire = array("Horaires : ","Schedules : ");
	$practical_info_resto_notice = array("Avis Tripadvisor : ","Tripadvisor notice : ");
	$practical_info_resto_link_see = array("Voir les avis : ","See the notices : ");
	$practical_info_resto_link_click = array("Cliquez ici","Click here");
	$practical_info_resto_facebook = array("Page Facebook","Facebook page");

	$practical_info_resto1_pres = array("Restaurant traditionnel.<br>
							<u>Régimes spéciaux</u> : végétariens bienvenus, choix végétaliens.","
							Traditional restaurant.<br>
							<u>Special diets</u>: vegetarians welcome, vegan choices.");
	$practical_info_resto1_horaire1 = array("Tous les jours : 14h - 23h","Every day : 14h - 23h");
	$practical_info_resto1_rate = array("4.5/5 (1656 avis)","4.5/5 (1656 notices)");

	$practical_info_resto2_pres = array("Restaurant traditionnel.<br>
							<u>Cuisine</u> : libanaise, méditerranéenne, barbecue/grillades, Moyen-Orient, arabe.<br>
							<u>Régimes</u> spéciaux : végétariens bienvenus, choix végétaliens, halal, plats sans gluten.","
							Traditional restaurant.<br>
							<u>Cuisine</u>: Lebanese, Mediterranean, barbecue/grill, Middle Eastern, Arabic.<br>
							<u>Special diets</u>: vegetarians welcome, vegan choices, halal, gluten-free dishes.");
	$practical_info_resto2_horaire1 = array(
							"Lun / Mer / Jeu : 10h - 23h<br>
							Mar / Ven / Sam / Dim : 10h - 22h",
							"Mon / Wed / Thu : 10h - 23h<br>
							Tue / Fri / Sat / Sun : 10h - 22h");
	$practical_info_resto2_rate = array("4.5/5 (1930 avis)","4.5/5 (1930 notices)");

	$practical_info_resto3_pres = array("<u>Cuisines</u> : pizza, internationale, méditerranéenne, Moyen-Orient, arabe.<br>
							<u>Régimes spéciaux</u> : végétariens bienvenus, choix végétaliens.","
							<u>Cuisines</u>: pizza, international, Mediterranean, Middle Eastern, Arabic.<br>
							<u>Special diets</u>: vegetarians welcome, vegan choices.");
	$practical_info_resto3_horaire1 = array("Tous les jours : 11h - 00h","Every day : 11h - 00h");
	$practical_info_resto3_rate = array("4.5/5 (141 avis)","4.5/5 (141 notices)");

	$practical_info_resto4_pres = array("Restaurant traditionnel.<br>
							<u>Régimes spéciaux</u> : végétariens bienvenus, choix végétaliens, plats sans gluten.","
							Traditional restaurant.<br>
							<u>Special diets</u>: vegetarians welcome, vegan choices, gluten-free dishes.");
	$practical_info_resto4_rate = array("4/5 (383 avis)","4/5 (383 notices)");

	$practical_info_resto5_pres = array("Restaurant traditionnel.<br>
							<u>Régimes spéciaux</u> : végétariens bienvenus, halal, choix végétaliens.","
							Traditional restaurant.<br>
							<u>Special diets</u>: vegetarians welcome, halal, vegan choices.");
	$practical_info_resto5_horaire1 = array("Tous les jours : 10h - 23h","Every day : 10h - 23h");
	$practical_info_resto5_rate = array("4/5 (1043 avis)","4/5 (1043 notices)");

	$practical_info_resto6_pres = array("Restaurant traditionnel.<br>
							<u>Cuisines</u> : méditerranéenne, Moyen-Orient, arabe, barbecue/grillades.<br>
							<u>Régimes spéciaux</u> : végétariens bienvenus, choix végétaliens.","
							Traditional restaurant.<br>
							<u>Cuisines</u>: Mediterranean, Middle Eastern, Arabic, barbecue/grilled.<br>
							<u>Special diets</u>: vegetarians welcome, vegan choices.");
	$practical_info_resto6_horaire1 = array("Tous les jours : 9h - 23h","Every day : 9h - 23h");
	$practical_info_resto6_rate = array("5/5 (223 avis)","5/5 (223 notices)");


	//Contact
	$contact_title1 = array("À propos de nous","About us");
	$contact_title1_subtitle1 = array("Notre groupe","Our group");
	$contact_title1_subtitle1_text = array("Ce site web a été créé dans le cadre de notre projet tutoré de notre première année de DUT informatique. Il vise avant tout la création d’une médiation culturelle et numérique, et a été réalisé en collaboration avec l’UNESCO.","This website was created as part of our tutored project in our first year of computer science DUT. It aims above all at creating a cultural and digital mediation, and was realized in collaboration with UNESCO.");
	$contact_chef = array("Chef de projet","Project Manager");
	$contact_chef_dev = array("Lead développeur","Lead developer");
	$contact_dev = array("Développeur","Developer");
	$contact_chef_recherche = array("Lead recherches","Lead research");
	$contact_recherche = array("Recherches","Researcher");
	$contact_concept = array("Concepteur","Concepter");
	$contact_title1_subtitle2 = array("Nos contenus","Our contents");
	$contact_title1_subtitle2_text = array("Vous avez aimé votre voyage à Pétra et vous souhaitez le montrer au monde entier ? Empressez-vous d'essayer notre filtre snapchat et de l'envoyer à tous vos proches !",
		"Did you enjoy your trip to Petra and want to show it to the world? Try our snapchat filter and send it to all your friends and family!");
	$contact_title1_subtitle3 = array("<h3>Crédits</h3>
					<h4>Projet</h4>
					<ul>
						<li>ETTAYEB Tewfik : Responsable du Forum UNESCO - UGE</li>
						<li>CESSY David</li>
						<li>REBY Yann</li>
					</ul>
					<h4>Traductions</h4>
					<ul>
						<li>Prof d'arabe ?</li>
					</ul>
					<h4>Illustrations</h4>
					<ul>
						<li>PERNICI Tia : Logo</li>
					</ul>",
					"<h3>Credits</h3>
					<h4>Project</h4>
					<ul>
						<li>ETTAYEB Tewfik: Head of Forum UNESCO - UGE</li>
						<li>CESSY David</li>
						<li>REBY Yann</li>
					</ul>
					<h4>Translations</h4>
					<ul>
						<li>Arabic teacher?</li>
					</ul>
					<h4>Illustrations</h4>
					<ul>
						<li>PERNICI Tia: Logo</li>
					</ul>");
	$contact_title2 = array("Partenaires","Partner");
	$contact_title3 = array("Nous contacter","Contact us");
	$contact_title3_text = array("Une question ? Besoin d'aide ? N'hésitez pas à nous écrire, nous serons ravis de vous répondre.","Have a question? Need help ? Do not hesitate to write to us, we will be delighted to answer you.");




	// Header + nav
	if ($langue == 0) {
		$lang_header = "fr";
	} else {
		$lang_header = "en";
	}
	echo '
	<!DOCTYPE html> 
	<html lang="'.$lang_header.'">
	<head> 
		<title>Petra - Médiation Culturelle et Numérique</title>
		<meta name="author" content="Amalaric Le Forestier" />
		<link rel="icon" href="images/logo.ico" />
		<meta charset="utf-8" />
		<script src="https://kit.fontawesome.com/79f61c2135.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="styles/style.css" type="text/css" />
		<link rel="stylesheet" href="styles/mediaqueries.css" type="text/css" />
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="scripts/app.js" ></script>
		<script type="text/javascript" src="scripts/scroller.js" ></script>
	</head>

	<header>
		<nav class="navbar" role="navigation">											<!-- Menu de navigation -->
			<i class="fas fa-bars"></i>
			<ul>';
				// Pour appliquer un style différent à la page où l'on se trouve
				if ($page == "index") {
					echo '<li><a href="index.php?lang='.$langue.'" class="page-actuelle">'.$nav_home[$langue].'</a></li>';
				} else {
					echo '<li><a href="index.php?lang='.$langue.'">'.$nav_home[$langue].'</a></li>';
				}
				if ($page == "histoire") {
					echo '<li class="histoire"><a href="histoire.php?lang='.$langue.'" class="page-actuelle">'.$nav_history[$langue].'</a>';
				} else {
					echo '<li class="histoire"><a href="histoire.php?lang='.$langue.'">'.$nav_history[$langue].'</a>';
				}
				echo "
				<ul class=\"deroulant deroulant-h\">
					<li><a href=\"histoire.php?lang=".$langue."#beacon-histoire\">".$sommaire_1[$langue]."</a></li>
					<ul>
						<li><a href=\"histoire.php?lang=".$langue."#beacon-histoire\">".$sommaire_1_1[$langue]."</a></li>
						<li><a href=\"histoire.php?lang=".$langue."#beacon-moyen-age\">".$sommaire_1_2[$langue]."</a></li>
					</ul>
					<li><a href=\"histoire.php?lang=".$langue."#beacon-archeo\">".$sommaire_2[$langue]."</a></li>
					<li><a href=\"histoire.php?lang=".$langue."#beacon-archi\">".$sommaire_3[$langue]."</a></li>
					<li><a href=\"histoire.php?lang=".$langue."#culture\">".$sommaire_4[$langue]."</a></li>
				</ul></li>
				";
				if ($page == "galerie") {
					echo '<li><a href="galerie.php?lang='.$langue.'" class="page-actuelle">'.$nav_galery[$langue].'</a></li>';
				} else {
					echo '<li><a href="galerie.php?lang='.$langue.'">'.$nav_galery[$langue].'</a></li>';
				}
				echo '
				<li class="logo-langue">
					<div>';
					if ($langue == 0) {
						echo '<a href="'.$_SERVER["PHP_SELF"].'" target="_self"><img src="images/flag_fr.png" alt="Langue FR" id="flag" class="langue-actuelle"></a>';
					} else {
						echo '<a href="'.$_SERVER["PHP_SELF"].'" target="_self"><img src="images/flag_fr.png" alt="Langue FR" id="flag"></a>';
					}
					echo '<a href="index.php?lang='.$langue.'"><img src="images/logo.png" alt="Logo" id="logo"></img></a>';
					if ($langue == 1) {
						echo '<a href="'.$_SERVER["PHP_SELF"].'?lang=1" target="_self"><img src="images/flag_en.png" alt="Langue EN" id="flag" class="langue-actuelle"></a>';
					} else {
						echo '<a href="'.$_SERVER["PHP_SELF"].'?lang=1" target="_self"><img src="images/flag_en.png" alt="Langue EN" id="flag"></a>';
					}
				echo '
					</div>
				</li>
				';
				if ($page == "visiter") {
					echo '<li class="visiter"><a href="visiter.php?lang='.$langue.'" class="page-actuelle">'.$nav_visit[$langue].'</a>';
				} else {
					echo '<li class="visiter"><a href="visiter.php?lang='.$langue.'">'.$nav_visit[$langue].'</a>';
				}
				echo "
				<ul class=\"deroulant deroulant-v\">
					<li><a href=\"visiter.php?lang=".$langue."#beacon-kazneh\">".$visiter_1_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-deir\">".$visiter_2_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-theatre\">".$visiter_3_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-aqueducs\">".$visiter_4_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-columbarium\">".$visiter_5_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-tombe-soldat\">".$visiter_6_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-al-khubtha\">".$visiter_7_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-tombes-royales\">".$visiter_8_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-al-bint\">".$visiter_9_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-fontaine\">".$visiter_10_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-nymphaeum\">".$visiter_11_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-grand-temple\">".$visiter_12_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-unayshu\">".$visiter_13_titre[$langue]."</a></li>
					<li><a href=\"visiter.php?lang=".$langue."#beacon-obelisque\">".$visiter_14_titre[$langue]."</a></li>
				</ul></li>
				";
				if ($page == "informations") {
					echo '<li class="informations"><a href="informations.php?lang='.$langue.'" class="page-actuelle">'.$nav_infos[$langue].'</a>';
				} else {
					echo '<li class="informations"><a href="informations.php?lang='.$langue.'">'.$nav_infos[$langue].'</a>';
				}
				echo "
				<ul class=\"deroulant deroulant-if\">
					<li><a href=\"informations.php?lang=".$langue."#beacon-plan\">".$practical_info_s1[$langue]."</a></li>
					<li><a href=\"informations.php?lang=".$langue."#beacon-divers\">".$practical_info_s2[$langue]."</a></li>
					<ul>
						<li><a href=\"informations.php?lang=".$langue."#beacon-reco-diplo\">".$practical_info_s2_1[$langue]."</a></li>
						<li><a href=\"informations.php?lang=".$langue."#beacon-trad\">".$practical_info_s2_2[$langue]."</a></li>
						<li><a href=\"informations.php?lang=".$langue."#beacon-convertisseur\">".$practical_info_s2_3[$langue]."</a></li>
					</ul>
					<li><a href=\"informations.php?lang=".$langue."#beacon-alentours\">".$practical_info_s3[$langue]."</a></li>
					<ul>
						<li><a href=\"informations.php?lang=".$langue."#beacon-hotels\">".$practical_info_s3_1[$langue]."</a></li>
						<li><a href=\"informations.php?lang=".$langue."#beacon-resto\">".$practical_info_s3_2[$langue]."</a></li>
					</ul>
				</ul></li>
				";
				if ($page == "contact") {
					echo '<li><a href="contact.php?lang='.$langue.'" class="page-actuelle">'.$nav_contact[$langue].'</a></li>';
				} else {
					echo '<li><a href="contact.php?lang='.$langue.'">'.$nav_contact[$langue].'</a></li>';
				}
	echo '
			</ul>
			<a href="index.php?lang='.$langue.'" class="logo2"><img src="images/logo.png" alt="Logo" id="logo"></img></a>
		</nav>
	</header>

	<div id="progress"></div> 							<!-- Barre de progression -->
	';
?>
