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
	$galerie_alex2 = array("<div><h4 class=\"titre\">Ad Deir</h4><p class=\"auteur\">Alexandre Carpentier</p><p class=\"description\">Photo d'Ad Deir de nuit surplombé par la voie lactée.</p></div>", "<div><h4 class=\"titre\">Ad Deir</h4><p class=\"auteur\">Alexandre Carpentier</p><p class=\"description\">Photo of Ad Deir at night overlooked by the Milky Way.</p></div>");
	$galerie_alex3 = array("<div><h4 class=\"titre\">Le Kazneh</h4><p class=\"auteur\">Alexandre Carpentier</p><p class=\"description\">Le Kazneh surveillant les chameaux</p></div>", "<div><h4 class=\"titre\">Al Kazneh</h4><p class=\"auteur\">Alexandre Carpentier</p><p class=\"description\">The Kazneh watching the camels</p></div>");
	$galerie_img1 = array("<div><h4 class=\"titre\">Ad Deir</h4><p class=\"description\">Ad Deir au soleil</p></div>", "<div><h4 class=\"titre\">Ad Deir</h4><p class=\"description\">Ad Deir in the sun</p><br></div>");
	$galerie_img2 = array("<div><h4 class=\"titre\">Ad Deir</h4><br><p class=\"description\">Ad Deir encore au soleil</p></div>", "<div><h4 class=\"titre\">Ad Deir</h4><p class=\"description\">Ad Deir still in the sun</p><br></div>");
	$galerie_img3 = array("<div><h4 class=\"titre\">Le Kazneh</h4><br><p class=\"description\">Le Kazneh le soir</p></div>", "<div><h4 class=\"titre\">Kazneh</h4><p class=\"description\">Kazneh in the evening</p><br></div>");
	$galerie_img4 = array("<div><h4 class=\"titre\">Le Sîq</h4><br><p class=\"description\">Ici les aqueducs creusés dans les parois du Sîq</p></div>", "<div><h4 class=\"titre\">Siq</h4><p class=\"description\">Here the aqueducts dug into the walls of the Sîq</p><br></div>");
	$galerie_img5 = array("<div><h4 class=\"titre\">Une caravane de chameaux</h4></div>", "<div><h4 class=\"titre\">A caravan of camels</h4><br></div>");
	$galerie_img6 = array("<div><h4 class=\"titre\">Les tombes royales</h4><br><p class=\"description\">Les tombes royale creusées dans la montagne</p></div>", "<div><h4 class=\"titre\">Royal Tombs</h4><p class=\"description\">Royal graves dug into the mountain</p><br></div>");
	$galerie_img7 = array("<div><h4 class=\"titre\">Anciens habitats</h4></div>", "<div><h4 class=\"titre\">Ancient habitats</h4></div>");
	$galerie_img8 = array("<div><h4 class=\"titre\">Théâtre romain</h4><br><p class=\"description\">Ce théâtre a été construit lors de l'occupation romaine</p></div>", "<div><h4 class=\"titre\">Roman theater</h4><p class=\"description\">This theatre was built during the Roman occupation</p><br></div>");
	$galerie_img9 = array("<div><h4 class=\"titre\">Théâtre romain</h4><br><p class=\"description\">Ce théâtre a été construit lors de l'occupation romaine</p></div>", "<div><h4 class=\"titre\">Roman theater</h4><p class=\"description\">This theatre was built during the Roman occupation</p><br></div>");
	$galerie_img10 = array("<div><h4 class=\"titre\">Tombeau Palais</h4><br><p class=\"description\">Ce tombeau fait parti des tombes royales</p></div>", "<div><h4 class=\"titre\">Palace Tomb</h4><p class=\"description\">This tomb is one of the royal tombs</p><br></div>");
	$galerie_img11 = array("<div><h4 class=\"titre\">Urne du Deir</h4><br><p class=\"description\">Ce type d'urne est présent sur de nombreux monuments</p></div>", "<div><h4 class=\"titre\">Urn of Deir</h4><p class=\"description\">This type of urn is present on many monuments</p><br></div>");
	$galerie_img12 = array("<div><h4 class=\"titre\">Le Kazneh</h4><br><p class=\"description\">Le Kazneh vue depuis les hauteurs du Sîq</p></div>", "<div><h4 class=\"titre\">Kazneh</h4><p class=\"description\">Kazneh seen from the heights of the Siq</p><br></div>");
	$galerie_img13 = array("<div><h4 class=\"titre\">Vue sur la vallée</h4></div>", "<div><h4 class=\"titre\">View of the valley</h4></div>");
	
	$galerie_img15 = array("<div><h4 class=\"titre\">Des chameaux dans le théâtre romain</h4></div>", "<div><h4 class=\"titre\">Camels in the roman theatre</h4></div>");
	$galerie_img16 = array("<div><h4 class=\"titre\">Vue sur la vallée</h4></div>", "<div><h4 class=\"titre\">View of the valley</h4></div>");
	$galerie_img17 = array("<div><h4 class=\"titre\">Le Kazneh</h4><p class=\"description\">Le Kazneh surveillant les chameaux</p></div>", "<div><h4 class=\"titre\">Kazneh</h4><p class=\"description\">The Kazneh watching the camels</p></div>");
	$galerie_img18 = array("<div><h4 class=\"titre\">Tombe aux obélisques</h4><p class=\"description\">Il s'agit du premier monument que l'on croise en venant à Pétra</p></div>", "<div><h4 class=\"titre\">Tomb of the obelisks</h4><p class=\"description\">It is the first monument you come across when you come to Petra</p></div>");
	$galerie_img19 = array("<div><h4 class=\"titre\">Anciens habitats</h4></div>", "<div><h4 class=\"titre\">Ancient habitats</h4></div>");
	
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


	//Mention légale
	$mention_legal = array("<h2>Mentions légales</h2>
<h3>1. Présentation du site.</h3>
<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
<p><strong>Propriétaire</strong> : Université Gustave Eiffel – Université – 16 Boulevard Newton, 77420 Champs-sur-Marne<br />
<strong>Créateur</strong> : <a target=\"blank\" href=\"http://perso-etudiant.u-pem.fr/~alefor03\">Amalaric Le Forestier</a>, <a target=\"_blank\" href=\"http://perso-etudiant.u-pem.fr/~bcorgnac/portfolio/\">Bastien Corgnac</a>, Dylan Chalier<br />
<strong>Responsable publication</strong> : Amalaric Le Forestier – alefor03@etud.u-pem.fr<br />
Le responsable publication est une personne physique ou une personne morale.<br />
<strong>Webmaster</strong> : Amalaric Le Forestier – alefor03@etud.u-pem.fr<br />
<strong>Hébergeur</strong> : Université Gustave Eiffel – 16 Boulevard Newton, 77420 Champs-sur-Marne<br />
Crédits : Alexandre Carpentier : Photographe professionnel
Tia Pernici : Logo du Site<br />

<h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>
<p>L’utilisation du site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> sont donc invités à les consulter de manière régulière.</p>
<p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par Université Gustave Eiffel, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
<p>Le site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> est mis à jour régulièrement par Amalaric Le Forestier. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
<h3>3. Description des services fournis.</h3>
<p>Le site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
<p>Université Gustave Eiffel s’efforce de fournir sur le site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
<p>Tous les informations indiquées sur le site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
<h3>4. Limitations contractuelles sur les données techniques.</h3>
<p>Le site utilise la technologie JavaScript.</p>
<p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
<h3>5. Propriété intellectuelle et contrefaçons.</h3>
<p>Université Gustave Eiffel est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
<p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Université Gustave Eiffel.</p>
<p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
<h3>6. Limitations de responsabilité.</h3>
<p>Université Gustave Eiffel ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://etudiant.u-pem.fr/~alefor03/website/, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
<p>Université Gustave Eiffel ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a>.</p>
<p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. Université Gustave Eiffel se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, Université Gustave Eiffel se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
<h3>7. Gestion des données personnelles.</h3>
<p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
<p>A l'occasion de l'utilisation du site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
<p> En tout état de cause Université Gustave Eiffel ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> l’obligation ou non de fournir ces informations.</p>
<p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
<p>Aucune information personnelle de l'utilisateur du site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de Université Gustave Eiffel et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a>.</p>
<p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
<h3>8. Liens hypertextes et cookies.</h3>
<p>Le site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Université Gustave Eiffel. Cependant, Université Gustave Eiffel n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
<p>La navigation sur le site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
<p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
<p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
<p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
  Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
<p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section \"Confidentialité\", cliquez sur Paramètres de contenu. Dans la section \"Cookies\", vous pouvez bloquer les cookies.</p>
<p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section \"Confidentialité\", cliquez sur préférences.  Dans l'onglet \"Confidentialité\", vous pouvez bloquer les cookies.</p>

<h3>9. Droit applicable et attribution de juridiction.</h3>
<p>Tout litige en relation avec l’utilisation du site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
<h3>10. Les principales lois concernées.</h3>
<p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
<p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
<h3>11. Lexique.</h3>
<p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
<p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>",
"
<h2>Legal information</h2>
<h3>1. Presentation of the site.</h3>
<p>Pursuant to Article 6 of Law No. 2004-575 of 21 June 2004 on confidence in the digital economy, users of the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> are informed of the identity of the various parties involved in its creation and follow-up:</p>
<p><strong>Owner</strong> : Université Gustave Eiffel – Université – 16 Boulevard Newton, 77420 Champs-sur-Marne<br />
<strong>Creators</strong> : <a target=\"blank\" href=\"http://perso-etudiant.u-pem.fr/~alefor03\">Amalaric Le Forestier</a>, <a target=\"_blank\" href=\"http://perso-etudiant.u-pem.fr/~bcorgnac/portfolio/\">Bastien Corgnac</a>, Dylan Chalier<br />
<strong>Responsible for publication</strong> : Amalaric Le Forestier – alefor03@etud.u-pem.fr<br />
The person responsible for publication is a natural or legal person.<br />
<strong>Webmaster</strong> : Amalaric Le Forestier – alefor03@etud.u-pem.fr<br />
<strong>Host</strong> : Université Gustave Eiffel – 16 Boulevard Newton, 77420 Champs-sur-Marne<br />
Crédits : Alexandre Carpentier : Professional photographer
Tia Pernici : Website logo<br />

<h3>2. General conditions of use of the site and the services offered.</h3>
<p>The use of the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> implies full acceptance of the general conditions of use described below. These terms of use may be modified or supplemented at any time, and users of the <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> website are therefore advised to consult them regularly.</p>
<p>This site is normally accessible to users at all times. However, Université Gustave Eiffel may decide to interrupt the site for technical maintenance purposes, in which case it will endeavour to inform users in advance of the dates and times of the intervention.</p> <p>The site <a href=\">Urgustave Eiffel University</a> will be accessible at all times.
<p>The site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> is regularly updated by Amalaric Le Forestier. Similarly, the legal notices may be modified at any time: they are nevertheless binding on the user, who is invited to refer to them as often as possible in order to read them.
</p>
<h3>3. Description of the services provided.</h3>
<p>The site<a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> is intended to provide information concerning all of the company's activities.</p> <p>Université Gustave Eiffel strives to provide the <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a
<p>Université Gustave Eiffel endeavours to provide the most accurate information possible on the <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> website. However, it cannot be held responsible for omissions, inaccuracies and shortcomings in updating, whether these are its fault or the fault of third-party partners who provide it with this information.</p>
<p>All the information indicated on the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> is given as an indication, and may change. Furthermore, the information on the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> is not exhaustive. They are given subject to modifications having been made since they were put online.</p>
<h3>4. Contractual limitations on technical data.</h3>
<p>The site uses JavaScript technology.</p>
<p>The website cannot be held responsible for any material damage related to the use of the site. Furthermore, the user of the site undertakes to access the site using recent equipment, free of viruses and with a last generation updated browser</p>
<h3>5. Intellectual property and counterfeiting.</h3>
<p>Université Gustave Eiffel is the owner of the intellectual property rights or holds the rights of use on all the elements accessible on the site, in particular the texts, images, graphics, logos, icons, sounds, software.</p> <p>All reproduction, representation, modification, publication, adaptation of all or part of the elements of the site, whatever the means or process used, is forbidden without the prior written authorisation of: Université Gustave Eiffel.
<p>Any reproduction, representation, modification, publication, adaptation of all or part of the elements of the site, whatever the means or process used, is prohibited, except with the prior written permission of : Gustave Eiffel University.
<p>Any unauthorised use of the site or of any of the elements it contains will be considered as constituting an infringement and will be prosecuted in accordance with the provisions of articles L.335-2 et seq. of the Intellectual Property Code.</p>
<h3>6. Limitations of liability.</h3>
<p>Université Gustave Eiffel cannot be held responsible for direct and indirect damage caused to the user's equipment when accessing the https://etudiant.u-pem.fr/~alefor03/website/ website, and resulting either from the use of equipment that does not meet the specifications indicated in point 4, or from the appearance of a bug or incompatibility.</p> <p>Université Gustave Eiffel cannot be held responsible for indirect damage (such as market loss or loss of opportunity) resulting from the use of the https://etudiant.u-pem.fr/ website.
<p>Université Gustave Eiffel may also not be held liable for indirect damages (such as loss of market or loss of opportunity) resulting from the use of the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a>.</p>
<p>Interactive areas (possibility to ask questions in the contact area) are available to users. Université Gustave Eiffel reserves the right to delete, without prior notice, any content posted in this area that contravenes the legislation applicable in France, in particular the provisions relating to data protection. Where applicable, Université Gustave Eiffel also reserves the right to hold the user civilly and/or criminally liable, particularly in the event of messages of a racist, insulting, defamatory or pornographic nature, whatever the medium used (text, photographs, etc.).</p>
<h3>7. Personal data management.</h3>
<p>In France, personal data is notably protected by law n° 78-87 of 6 January 1978, law n° 2004-801 of 6 August 2004, article L. 226-13 of the Penal Code and the European Directive of 24 October 1995.</p> <p>The use of this website is subject to the following conditions
<p>When using the <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> site, the following may be collected: the URL of the links through which the user accessed the <a href=\"//https://etudiant. u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a>, the user's access provider, the user's Internet Protocol (IP) address.</p> <p>The user's access to the site may be collected by means of the following information
<p>In any event, Université Gustave Eiffel only collects personal information relating to the user for the purpose of certain services offered by the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a>. The user provides this information with full knowledge of the facts, in particular when he/she enters it himself/herself. It is then specified to the user of the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website/\">https://etudiant.u-pem.fr/~alefor03/website/</a> the obligation or not to provide this information.</p>
<p>In accordance with the provisions of Articles 38 and following of Law 78-17 of 6 January 1978 relating to information technology, files and freedoms, any user has the right to access, rectify and oppose any personal data concerning him or her, by making a written and signed request, accompanied by a copy of the identity document with the signature of the holder of the document, specifying the address to which the reply should be sent.</p>
<p>No personal information of the user of the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website///\">https://etudiant.u-pem.fr/~alefor03/website/</a> is published without the user's knowledge, exchanged, transferred, ceded or sold on any medium to third parties. Only the assumption of the repurchase of Université Gustave Eiffel and its rights would allow the transmission of the said information to the eventual purchaser who would in turn be bound by the same obligation of conservation and modification of the data with respect to the user of the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a>.</p>
<p>Databases are protected by the provisions of the law of 1 July 1998 transposing directive 96/9 of 11 March 1996 on the legal protection of databases.</p>
<h3>8. Hyperlinks and cookies.</h3>
<p>The site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> contains a certain number of hyperlinks to other sites, set up with the permission of Université Gustave Eiffel. However, Université Gustave Eiffel does not have the possibility of checking the content of the sites thus visited, and consequently will not assume any responsibility for them.</p>
<p>Browsing the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> is likely to cause the installation of cookie(s) on the user's computer. A cookie is a small file, which does not allow the user to be identified, but which records information relating to the navigation of a computer on a site. The data thus obtained is intended to facilitate subsequent navigation on the site, and is also intended to allow various measures of frequentation.</p>
<p>Rejecting the installation of a cookie may make it impossible to access certain services. However, the user can configure his or her computer in the following way, to refuse the installation of cookies:</p> <p>In Internet Explorer: the user can configure his or her computer as follows
<p>In Internet Explorer: tool tab (pictogram in the shape of a cog at the top right) / internet options. Click on Privacy and choose Block all cookies. Validate on Ok.</p>
<p>Under Firefox: at the top of the browser window, click on the Firefox button, then go to the Options tab. Click on the Privacy tab.
  Set the Retention Rules to: use custom settings for history. Finally uncheck it to disable cookies.</p>
<p>In Safari: Click on the menu icon (symbolised by a cog) at the top right of the browser. Select Settings. Click on Show advanced settings. In the \"Privacy\" section, click on Content Settings. In the \"Cookies\" section, you can block cookies.
<p>In Chrome: Click at the top right of the browser on the menu pictogram (symbolized by three horizontal lines). Select Settings. Click on Show advanced settings. In the \"Privacy\" section, click on preferences.  In the \"Privacy\" tab, you can block cookies.</p>

<h3>9. Applicable law and jurisdiction.</h3>
<p>Any dispute relating to the use of the site <a href=\"//https://etudiant.u-pem.fr/~alefor03/website//\">https://etudiant.u-pem.fr/~alefor03/website/</a> is subject to French law. The competent courts of Paris have exclusive jurisdiction.</p>
<h3>10. The main laws involved.</h3>
<p>Law no. 2004-575 of 21 June 2004 for confidence in the digital economy.</p>
<h3>11. Lexicon.</h3>
<p>User: Internet user connecting to, using the above-mentioned site.</p>
<p>Personal information: \"information which allows, in any form whatsoever, directly or not, the identification of the natural persons to whom it applies\" (article 4 of law n° 78-17 of 6 January 1978).</p>
");


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
			</ul>';
		echo '
		<div class="logo_plus_langue">
			<li class="logo-langue2">
				<div>';
				if ($langue == 0) {
					echo '<a href="'.$_SERVER["PHP_SELF"].'" target="_self"><img src="images/flag_fr.png" alt="Langue FR" id="flag" class="langue-actuelle"></a>';
				} else {
					echo '<a href="'.$_SERVER["PHP_SELF"].'" target="_self"><img src="images/flag_fr.png" alt="Langue FR" id="flag"></a>';
				}
				if ($langue == 1) {
					echo '<a href="'.$_SERVER["PHP_SELF"].'?lang=1" target="_self"><img src="images/flag_en.png" alt="Langue EN" id="flag" class="langue-actuelle"></a>';
				} else {
					echo '<a href="'.$_SERVER["PHP_SELF"].'?lang=1" target="_self"><img src="images/flag_en.png" alt="Langue EN" id="flag"></a>';
				}
			echo '
				</div>
			</li>
			';
	echo '
			<a href="index.php?lang='.$langue.'" class="logo2"><img src="images/logo.png" alt="Logo" id="logo"></img></a>
		</div>
		</nav>
	</header>

	<div id="progress"></div> 							<!-- Barre de progression -->
	';
?>
