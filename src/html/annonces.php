<?php
session_start();
if(!isset($_SESSION['connect']))
{
	$_SESSION['prenom'] = "Inconnu";
	$_SESSION['nom'] = "Mr";
	$_SESSION['connect'] = 0;
	$_SESSION['img'] = "images/profile.png";
}

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
    <link rel="stylesheet" href="../css/standard_style.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<!--**********************************************************************************************************-->
<!--corp de la page-->
<body>
<!--inclure le menu-->
<?php
	include "menu2.php";
?>
<!--fin du menu-->

<div class="section1">
    <div class="main">
        <div>
		<!--<br/>-->
            <h3>JibColis <img width="30px" height="30px" src="../images/logo2.png" alt=""> AwidColis</h3>
            <!--<br>-->
            <p class="fort">TRANSPORT DE COLIS ENTRE PARTICULIERS <br>DE MAIN A MAIN !</p>
        </div>

        <div class="row pad">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <a class="btn btnjbl vertf"  href="list_voyageurs.php">Voyageurs transporteurs</a>
            </div>
            <div class="col-md-3">
                <a class="btn btnjbr maronf" href="list_colis.php">Liste des colis</a>
            </div>
            <div class="col-md-3"></div>
        </div>

        <a id="more">En savoir plus ... </a>
    </div>

</div>
<div class="section2">
    <div class="c row prs">
        <div class="col-md-1"></div>
        <div class="media col-md-10">
            <div class="media-left">
                <img src="../images/logo2.png" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
                <h4 class="media-heading"><span class="titre">JibColis - AwidColis</span></h4>
                <p>C'est la 1ère plateforme GRATUITE destinée à la diaspora maghrébine, de mise en relation entre
                    l'EXPEDITEUR
                    souhaitant envoyer un colis et LE VOYAGEUR acceptant de transporter ce même colis.
                    Le voyageur et l'expéditeur sont libres de négocier
                    entre eux une contre partie en échange du service fourni</p>
            </div>
        </div>

    </div>
</div>
<div class="row desc">
    <div class="container">
        <div class="col-md-4">
            <div class="illus">
                <img width="100%" src="../images/confiance.png" alt="">
            </div>
            <p class="desc_text">Sécurité/Confiance <br><br>Après accord entre le voyageur et le transporteur une
                attestation constituant une preuve de remise de votre colis est imprimable ICI</p>
        </div>
        <div class="col-md-4">
            <div class="illus">
                <img width="100%" src="../images/economie.png" alt="">
            </div>
            <p class="desc_text">Economique/ Solidaire <br><br> Un système Voyageur-Expéditeur gagnant- gagnant. Le
                voyageur peut amortir son billet.
                De son côté, l’expéditeur évite de se déplacer dans les aéroports ou
                dans les gares et peut envoyer son colis à moindre coût, voir gratuitement.</p>
        </div>
        <div class="col-md-4">
            <div class="illus">
                <img width="100%" src="../images/eco.png" alt="">
            </div>
            <div class="desc_text">Ecologique <br><br>
                <p>
                    Réduire l'émission en CO2 des transports,
                    en optimisant les trajets des voyageurs existants plutôt que d'en créer de nouveaux.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- begin footer-->
<?php
	include("footer.php");
?>
<!--end footer-->
</div>
</body>


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
            window.location.replace("profil-.php");
        });

    });
</script>
</html>
