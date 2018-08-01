<?php
session_start();

/*function seConnecterGOOGLE()
{
    include "gpCallback.php"; 
}

if (isset($_GET['connecte'])) {
    if (isset($_SESSION['fb_access_token'])) {
        unset($_SESSION['fb_access_token']);
    }
    seConnecterGOOGLE();
}

if (isset($_GET['decc'])) {
    unset($_SESSION['token']);
    unset($_SESSION['fb_access_token']);
    header("location:index.php");
    exit;
}*/

?>

<!DOCTYPE html>
<!--INCLURE DE LA-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="296518496590-2qnum6hr0ccclr46ecn1fu4iglf1gvtf.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="../scripts/googleLogin.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script src="../scripts/fbConnect.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../bootstrap/js/bootstrap.js" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
            integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
            crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/standard_style.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>JibColis</title>
    <script type="text/javascript">
    $(function () {
        setTimeout(function () {
            $('#more').fadeIn('slow');
        }, 1000);

        $('#more').click(function () {
            window.location.replace("comment_ca_marche.php");
        });

        $('#how').click(function () {
            window.location.replace("comment_ca_marche.php");
        });

        $('#btn_cnx').click(function () {
            window.location.replace("profil.php");
        });

    });
</script>
</head>

<!--**********************************************************************************************************-->
<!--corp de la page-->
<body>
<!--inclure le menu-->

<?php
	include "menu.php";
?>

<!--fin du menu-->
<div class="banner-bottom">
		<div class="container">
			<h4>Qui sommes nous</h4>
			    <p class="quia">
					Jeunes, dynamiques et soucieux de l’impact des transports sur l’environnement.  
					Et c’est aux voyageurs qu’incombe la responsabilité  d’un système économique, 
					collaboratif, utile et social.
				</p>
				<br><br>
				<div class="col-md-3"><img class="text-center" alt="about" src="/resources/images/AYAD.png" height="150px" width="80%"></div>
				<div class="col-md-3"><h4>Jugurta 3iyad </h4></div>
				<div class="col-md-6"></div>
				<br><br>
				<p class="quia">Originaire d’Afrique du nord, je vis à Paris, je suis
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
				<br><br>
				<div class="col-md-3"><img class="text-center" alt="about" src="/resources/images/IMAD.png" height="150px" width="80%"></div>
				<div class="col-md-3"><h4>Imad Bakli</h4></div>
				<div class="col-md-6"></div>
				<br><br>
				<p class="quia">Est un jeune et talentueux informaticien rencontré lors de 
				nos diners organisés dans le cadre de mes activités associatives. Je lui ai soumis 
				l’idée de JibColis : il a trouvé cette initiative géniale et a de suite adhéré au projet.  
				Ayant déjà expérimenté les déplacements hasardeux et inutiles à l’aéroport sans trouver 
				une personne bienveillante pour lui rendre ce service, Imad, très enthousiaste, a créé 
				notre plateforme de covalisage en deux mois, en respectant toutes mes préconisations.</p>
				
				<br><br>
				<div class="col-md-3"><img class="text-center" alt="about" src="/resources/images/SAMIR.png" height="150px" width="80%"></div>
				<div class="col-md-3"><h4>Samir OUGUERGOUZ</h4></div>
				<div class="col-md-6"></div>
				<br><br>
				<p class="quia">Est le fondateur de la start-up Legal Solution. 
				Juriste chevronné, boîte foisonnante à idées, passionné par les nouvelles technologies, 
				il a créé le site DefendreSesDROITS afin de démocratiser le droit et de le rendre 
				plus accessible aux justiciables. Il m’a accompagné dans les démarches et le suivi 
				juridique du site. Son but : faciliter les formalités juridiques, rendre plus simple 
				l’accès au droit et d’offrir un service juridique à toutes et à tous. Avec la plateforme 
				juridique SaisirLeTRIBUNAL.com, il permet également aux justiciables, grâce à sa bourse 
				aux avocats,  de trouver l’avocat le plus compétent et plus proche de chez vous aux tarifs 
				les plus compétitifs.
				</p>
				<br><br>
				<div class="col-md-3"><img class="text-center" alt="about" src="/resources/images/IDIR.png" height="150px" width="80%"></div>
				<div class="col-md-3"><h4>Idir SIFEDDINE</h4></div>
				<div class="col-md-6"></div>
				<br><br>
				<p class="quia">Jeune étudiant en design industriel, créatif et imaginatif, 
				il a su réaliser avec brio le logo de notre site en l’enracinant davantage dans notre vision 
				écologique, solidaire et responsable. A la recherche de nouveaux défis, il dirige plusieurs 
				projets dans le domaine du design industriel et du graphisme 3 D.</p>
				<br><br>
				
		</div>
	</div>

	<!-- //banner -->

	
    <!-- footer -->
<!-- begin footer-->
<?php
	include("footer.php");
?>
<!--end footer-->
</body>
</html>
