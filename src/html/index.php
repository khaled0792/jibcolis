<?php session_start();
if (!isset($_SESSION['connect'])) {	$_SESSION['prenom'] = "Inconnu";
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
 }if (isset($_GET['decc'])) {
 unset($_SESSION['token']);
 unset($_SESSION['fb_access_token']);
 header("location:index.php");
 exit;
 }*/
?>
<!DOCTYPE html><html><head>
   <?php
include ("head.php");
  ?>
   <link rel="stylesheet" href="../css/style.css">
    
    </head><!--**********************************************************************************************************--><!--corp de la page-->
  
    <body>
    <!--menu-->    
    <?php
    include "box.php";
    if ($_SESSION['connect'] == 0)
        include "menu.php";
    else
        include "menu2.php";
    ?><!--/menu-->   
     <!--corp-->   
     <div>
     <div class="section1">
        <div class="main">
            <div>
    		<!--<br/>-->
                <h3 class="fort">JibColis <img width="30px" height="30px" src="../images/logo2.png" alt=""> AwidColis</h3>
                <br />
                <p>Transport de colis de main à main<br>Entre particuliers</p>
            </div>            <br />
            <div class="row">
            <div class="col-md-3"></div>                              <div class="col-md-3">               
    			<?php
                if (isset($_SESSION['id']))
                    echo '<a class="btn btnjbl vertf" href="deposer.php">Déposer une annonce</a>';
                else
                    echo '<button class="btn btnjbl vertf" name="button" data-toggle="modal" data-target="#myModal" id="myBtn">Déposer une annonce</button>';
	    			?>    			
    		</div>
    			<div class="col-md-3">    			        			    <?php
                if (isset($_SESSION['id']))
                    echo '<a class="btn btnjbr maronf"  href="annonces.php">Voir les annonces</a>';
                else
                    echo '<button class="btn btnjbr maronf" name="button" data-toggle="modal" data-target="#myModal">Voir les annonces</button>';
    				?>
    			</div>    			<div class="col-md-3"></div>
                </div>                <br />                 <a href="#jibcolis" class="btn btn-link" style="color: white;">en savoir plus ... </a>
            </div>            
        </div>        <!--/section1-->
        <div class="section2" id="jibcolis">              <div class="container" style="width:80%;padding: 20px;">                    <div class="row">                                      <h4 class=""><b>JibColis - AwidColis</b></h4>                                            <img src="../images/logo2.png" style="width:100px;float: right; margin-left:10px;">                                                                  <p style="text-align: justify;margin-top:25px;">                    La 1ère plateforme <b>gratuite</b> destinée à la diaspora maghrébine, dans le but de mettre en relation                     des <b>personnes</b> souhaitant envoyer un colis et les <b>voyageurs</b> acceptant de les transporter.                        <br/>                    Le voyageur et l'expéditeur sont libres de négocier entre eux une contre partie en échange du service fourni.                </p>           </div>                    </div>     </div>                    
           </div>    <!--/section2-->
    
    <div class="row desc">
        <div class="container">
            <div class="col-md-4">
                <div class="illus">
                    <img width="100%" src="../images/confiance.png" alt="">
                </div>
                <p class="desc_text">Sécurité/Confiance <br /><br />Après accord entre le voyageur et le transporteur une
                    attestation constituant une preuve de remise de votre colis est imprimable ICI</p>
            </div>
            <div class="col-md-4">
                <div class="illus">
                    <img width="100%" src="../images/economie.png" alt="">
                </div>
                <p class="desc_text">Economique/ Solidaire <br /><br /> Un système Voyageur-Expéditeur gagnant- gagnant. Le
                    voyageur peut amortir son billet.
                    De son côté, l’expéditeur évite de se déplacer dans les aéroports ou
                    dans les gares et peut envoyer son colis à moindre coût, voir gratuitement.</p>
            </div>
            <div class="col-md-4">
                <div class="illus">
                    <img width="100%" src="../images/eco.png" alt="">
                </div>
                <div class="desc_text">Ecologique <br /><br />
                    <p>
                        Réduire l'émission en CO2 des transports,
                        en optimisant les trajets des voyageurs existants plutôt que d'en créer de nouveaux.
                    </p>
                </div>
            </div>
        </div>
    </div>    <!--/corp-->
    </div>
    <!-- footer-->    <?php
    include ("footer.php");
    ?>    <!--/footer-->
    </body>
    </html>
