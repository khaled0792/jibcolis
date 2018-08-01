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
        .titre{
            text-align:center;
            color:#ffffff;
        }
   
        .space{
           margin:5px;
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
    <h2 class="titre">Nos Partenaires</h2>
<br />              
                    <!--1ere ligne-->
                    <div class="row">
                    <!--media-->
                    <div class="col-xs-12 col-md-5 jumbotron partenaires-row">
                        <h2 class="text-center well">Médias</h2>

                        <div class="pbox col-xs-12 col-md-12 text-center space">
                            <a href="http://www.algerie-focus.com/" target="_blanck"
                                class="text-center"><img alt="Algérie focus"
                                class="img-rounded"
                                src="../images/af3.png"></a>
                        </div>
                        
                        
                        <div class="pbox col-xs-12 col-md-12 text-center space">
                            <a href="http://www.lematindz.net/" target="_blanck"
                                class="text-center"><img alt="Le matin d'Algérie"
                                class="img-rounded"
                                src="../images/ma.png" style="background-color: #cd2f2f"></a>
                        </div>
                    </div>
                                        
                    <!--Entreprise-->
                    <div class="partenaires-row col-xs-12 col-md-5 col-md-offset-2 jumbotron">
                        <h2 class="text-center well">Entreprises</h2>
                        
                        <div class="pbox col-xs-12 col-md-12 text-center">
                            <a href="http://www.neufpak.com/" target="_blanck"
                                class="text-center"><img alt="NeufPak"
                                class="img-rounded"
                                src="../images/nfp.jpg"></a>
                        </div>
                        
                    </div>
                    </div>
                    <!--/1ere ligne-->
                    
                    <!--2eme ligne-->
                    <div class="row">
                    <!--services-->
                    <div class="partenaires-row col-xs-12 col-md-5 jumbotron">
                        <h2 class="text-center well">Services</h2>

                        <div class="pbox col-xs-12 col-md-12 text-center">
                            <a href="http://www.defendresesdroits.com/" target="_blanck"
                                class="text-center"><img alt="Le matin d'Algérie"
                                class="img-rounded"
                                src="../images/ma.png" style="background-color: #cd2f2f"></a>
                        </div>
                    </div>
                    </div>
                    <!--/2eme ligne-->
                    <p>
                        <h5 style="text-align: center;">
                            <strong>Pour en s'voir plus sur comment devenir partenaire de Jibcolis, 
                                contactez-nous par téléphone au 00 336 34.58.49.20</strong></h5>
                                <br />
                    </p>
</div>
    <!-- footer -->
<!-- begin footer-->
<?php
    include("footer.php");
?>
<!--end footer-->
</body>
</html>
