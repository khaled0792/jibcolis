<?php session_start();
?>

<!DOCTYPE html>
<!--INCLURE DE LA-->
<html>
	<head>
		<?php
        include 'head.php';
 ?>
		<!--<link rel="stylesheet" href="../css/style.css">-->
		<style>
		  body{
		      color:#ffffff;
		  }
		
			.portrait {
				height: 100%;
				max-height: 200px;
				max-width: 80%;
				border-radius: 4px;
				margin-bottom: 8px;
			}

			.biblio {
				text-align: justify;
				padding: 2px;
			}

			.nom {
				margin-left: 15px;
				padding: 4px;
				margin-bottom: 15px;
			}
		</style>
	</head>

	<!--**********************************************************************************************************-->
	<!--corp de la page-->
	<body>
	    <header>
		<!--inclure le menu-->
		<?php
        include "box.php";
        if ($_SESSION['connect'] == 0)
            include "menu.php";
        else
            include "menu2.php";
		?>
		</header>
		<!--fin du menu-->
		<div class="container body">
			<h3 style="text-align: center">Qui sommes nous</h3>
			<br />
			<br />
			<p style="text-align: center; width: 80%;margin-left: auto;margin-right: auto">
				Jeunes, dynamiques et soucieux de l’impact des transports sur l’environnement.
				Et c’est aux voyageurs qu’incombe la responsabilité  d’un système économique,
				collaboratif, utile et social.
			</p>
			<br>
			<br>
			<!--Mr aiyad-->
			<div class="row">
				<h4 class="nom"> Jugurta 3iyad </h4>
				<div class="col-md-3"><img class="portrait" alt="ayad" src="../images/jug.jpg" >
				</div>
				<div class="col-md-9">
					<p class="biblio">
						Originaire d’Afrique du nord, je vis à Paris, je suis
						fondateur de www.JibColis.com. Le secteur des postes et transports de colis sont
						peu développés et très onéreux dans de nombreuses régions en Afrique du nord et
						dans le monde. Passionné par les solutions à effet social,  l’idée de mon site
						JibColis est née d’un besoin et d’un vécu personnel.  Etant responsable d’une
						association humanitaire, il m’arrive, comme vous,  d’avoir besoin d’envoyer en
						toute urgence, un médicament, un  document, un appareil, des vêtements … à des proches.
						Je suis dans ces cas-là contraint de me déplacer et « squatter » pendants des heures
						dans un aéroport ou une gare,  espérant rencontrer une personne bienveillante, qui
						accepterait de transporter l’objet en question. Désormais, avec JibColis,  nous savons
						qu’une personne du même quartier, de la même région, de la même ville ou du même pays
						est disposée à transporter cet objet pour nous.
						Au travers  d’une entraide communautaire et de proximité  cette plateforme JibColis
						vous offre  une opportunité et  une alternative  efficaces  entre vous  voyageurs
						effectuant des trajets vers l’ Algérie, Tunisie, Maroc et autres pays (pour rendre
						service aux expéditeurs, désireux d’envoyer des  colis, en amortissant vos frais de
						voyages ou de déplacements).
					</p>
				</div>
			</div>
			<br>
			<br>
			<!--Mr AKLI-->
			<div class="row">
				<h4 class="nom">Imad Bakli</h4>
				<div class="col-md-3">
					<img alt="Imad" src="../images/bylka.jpg" class="portrait" >
				</div>
				<div class="col-md-9">
					<p class="biblio">
						Est un jeune et talentueux informaticien rencontré lors de
						nos diners organisés dans le cadre de mes activités associatives. Je lui ai soumis
						l’idée de JibColis : il a trouvé cette initiative géniale et a de suite adhéré au projet.
						Ayant déjà expérimenté les déplacements hasardeux et inutiles à l’aéroport sans trouver
						une personne bienveillante pour lui rendre ce service, Imad, très enthousiaste, a créé
						notre plateforme de covalisage en deux mois, en respectant toutes mes préconisations.
					</p>
				</div>
			</div>
			<br>
			<br>
			<!--Mr OUGUERGOUZ-->
			<div class="row">
				<h4 class="nom">Samir OUGUERGOUZ</h4>
				<div class="col-md-3">
					<img alt="Samir" src="../images/samir.png" class="portrait" >
				</div>
				<div class="col-md-9">
					<p class="biblio">
						Est le fondateur de la start-up Legal Solution.
						Juriste chevronné, boîte foisonnante à idées, passionné par les nouvelles technologies,
						il a créé le site DefendreSesDROITS afin de démocratiser le droit et de le rendre
						plus accessible aux justiciables. Il m’a accompagné dans les démarches et le suivi
						juridique du site. Son but : faciliter les formalités juridiques, rendre plus simple
						l’accès au droit et d’offrir un service juridique à toutes et à tous. Avec la plateforme
						juridique SaisirLeTRIBUNAL.com, il permet également aux justiciables, grâce à sa bourse
						aux avocats,  de trouver l’avocat le plus compétent et plus proche de chez vous aux tarifs
						les plus compétitifs.
					</p>
				</div>
			</div>
			<br>
			<br>
			<!--Mr SIFEDDINE-->
			<div class="row">
				<h4 class="nom">Idir SIFEDDINE</h4>
				<div class="col-md-3">
					<img alt="Idir" src="../images/idir.png" class="portrait" >
				</div>
				<div class="col-md-9">
					<p class="biblio">
						Jeune étudiant en design industriel, créatif et imaginatif,
						il a su réaliser avec brio le logo de notre site en l’enracinant davantage dans notre vision
						écologique, solidaire et responsable. A la recherche de nouveaux défis, il dirige plusieurs
						projets dans le domaine du design industriel et du graphisme 3 D.
					</p>
				</div>
			</div>
			<br>
			<br>
			<!--Khaled MESSAD
			<div class="row">
				<h4 class="nom">Khaled MESSAD</h4>
				<div class="col-md-3">
					<img alt="Khaled" src="../images/" class="portrait" >
				</div>
				<div class="col-md-9">
					<p class="biblio"></p>
				</div>
			</div>
			<br />
			<br />-->
			
			<!--Massi BOULKARIA
			<div class="row">
				<h4 class="nom">Massinissa BOULKARIA</h4>
				<div class="col-md-3">
					<img alt="Massi" src="../images/" class="portrait" >
				</div>
				<div class="col-md-9">
					<p class="biblio"></p>
				</div>
			</div>-->
			
			<!--structure pour ajouter un nouveau dans l'equipe-->
			<!--nom prenom -->
			<!--<div class="row">
			<h4 class="nom">Nom et prenom</h4>
			<div class="col-md-3">
			<img alt="photo de la personne" src="../images/" class="portrait" >
			</div>
			<div class="col-md-9">
			<p class="biblio">sa bibliographie</p>
			</div>
			</div>-->
		</div>
		<!-- //banner -->
		<!-- begin footer-->
		
		<?php
        include ("footer.php");
		?>
		<!--end footer-->
	</body>
</html>
