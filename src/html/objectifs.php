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
    <!--<link rel="stylesheet" href="../css/style.css">-->
    <style>
        .titre{
            color:#ffffff;
        }
        ol{
            padding:4px;
        }
        ol li{
            margin-top: 20px;
            margin-bottom:20px;
            background-color: rgba(255,255,255,0.7);
            padding:8px;
            -webkit-transform: skew(-12deg);
}
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
		    <p><br /></p>
			<h3 class="titre">Nos objectifs</h3>
		<div>
			<p>
    					<ol>
    						<li>Faire fonctionner la plateforme sur la base du bénévolat</li>
    						<li>Offrir une vraie relation entre le transporteur-voyageur, l’expéditeur et le récepteur, à la fois virtuellement et physiquement</li>
    						<li>Développer notre plateforme numérique à l'international</li>
    						<li>Cultiver l’économie de responsabilité, de partage et solidaire entre transporteurs-voyageurs et les expéditeurs </li>
    						<li>Cultiver une économie solidaire de responsabilité et de partage, entre transporteurs-voyageurs et l’expéditeurs</li>
    						<li>Réduire les émissions de CO2</li>
    					</ol>
    		</p>  
        </div>        
    </div>
	
<!-- begin footer-->
<?php
	include("footer.php");
?>
<!--end footer-->
</body>
</html>
