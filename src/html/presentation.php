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
    <?php include("head.php"); ?>
    <style>
        .body{
            color : white;
        }
        
        #jibcolis_do {
            display:flex;
            flex-wrap:wrap;
            text-align:center;
            justify-content:space-around;
        }
        
        #jibcolis_do .element h4{
            background-color:rgba(255,255,255,0.3);
            border-radius: 25px;
            padding: 1px;
        }
        
        #jibcolis_do .element p{
            background-color:rgba(255,255,255,0.3);
            border-radius: 15px;
            padding: 15px;
        }
    </style>
    
</head>

<!--**********************************************************************************************************-->
<!--corp de la page-->
<body>
<!--inclure le menu-->

<?php
	include "box.php";
        if ($_SESSION['connect'] == 0)
                        include "menu.php";        
                    else
                        include "menu2.php";        
    ?>
<!--fin du menu-->
		<div class="container body">
			<h2>Présentation</h2>
			<br />
			    <p class="quia">
					<strong>«JibColis»</strong> est une plateforme numérique de
					co-valisage qui met en relation des particuliers entre eux et leur
					permet d’envoyer des colis à destination des 5 Continents et plus
					particulièrement vers l’Europe et l’Afrique du nord.
				</p>
				<p class="quia">Ce site vous offre la possibilité d’envoyer vos courriers, 
				documents, livres, appareils et matériels, habillement et accessoires, médicaments,
				 mobilier divers…
				</p>
				<p class="quia">Ce site fonctionne 24h/24 et 7j/7 et est sécurisé.</p>
				<p class="quia">L’expéditeur (l’envoyeur) est la personne physique ayant choisi de faire envoyer son 
								COLIS  par un tiers sélectionné via notre plateforme :
				</p>
				<!--<img class="text-center" alt="about" src="/resources/images/about.png" height="150px" width="80%" style="margin-left: 10%;">-->
				<br>
				<p class="quia">Le transporteur voyageur s’inscrit sur le site JibColis et
				 propose son trajet de voyage.</p>
				<p class="quia">L’utilisateur souhaitant envoyer son colis choisit librement
				 la personne physique qui lui remettra son besoin à transporter.</p>
				 
				 <p class="quia">
				 <strong>Le site JibColis permet ainsi de :</strong><br><br>
			
			<div id="jibcolis_do">
                <div class="element col-md-3">
                    <h4>1</h4>
                    <P>Rendre service en transportant un ou plusieurs colis</P>
                </div>
                <div class="element col-md-3">
                    <h4>2</h4>
                    <P>Amortir ses frais de voyage et de déplacement</P>
                </div>
                <div class="element col-md-3">
                    <h4>3</h4>
                    <P>A moindre coût ou gratuitement (Au libre choix du transporteur-voyageur)</P>
                </div>
                <div class="element col-md-3">
                    <h4>4</h4>
                    <P>A des dates, horaires et trajets librement définis entre les parties</P>
                </div>
            </div>
			<br>
				 <p class="quia">
				 <strong>«JibColis »</strong> permet donc de mettre en contact des personnes 
				 désirants expédier un colis en urgence avec des personnes prêtes à le transporter. 
				 Ce service vous offre une expédition en toute confiance de votre colis tout en vous 
				 permettant de réduire vos frais d’envoi. Il donne aussi l’opportunité au 
				 transporteur-voyageur de rentabiliser son voyage et par la même occasion, 
				 de dépanner une personne se trouvant dans l’urgence.   
				 </p>  
		</div>
<!-- begin footer-->
<?php
	include("footer.php");
?>
<!--end footer-->
</body>
</html>