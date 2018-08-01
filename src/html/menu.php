<nav class="navbar navbar-default navbar-fixed-top my-menu">
        <div class="container">
			<!--menu gauche-->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img height="100%" src="../images/logo.png" alt="Logo_JIBCOLIS">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
			<!--menu droite-->
            <div class="navbar-right collapse navbar-collapse" id="myNavbar">                
                <ul class="nav navbar-nav">
				<li><a href="index.php" lass="btn btnjcm menubtn">Accueil</a></li>
				<?php
				if (isset($_SESSION['id']))
					echo '<li><a href="profil.php" lass="btn btnjcm menubtn">Tableau de bord</a></li>';
				?>
				<li><a lass="btn btnjcm menubtn" href="comment_ca_marche.php">Comment ça marche</a></li>
                <!--btn fb-->
               <!-- <li><button class="btn navbar-btn f"><i class="fa fa-facebook" aria-hidden="true"></i>-->
                    <?php 
                    /*include "fbLogin.php";
                    if (isset($_SESSION['token'])) {
                        unset($_SESSION['token']);
                    }
                    echo '<a href="' . $facebookConnect . '"></a>';
                    */
                    ?>
                    </button>                
                 </li>
                <!--btn fb-->
               <!-- <li><button class="btn navbar-btn g"><i class="fa fa-google" aria-hidden="true"></i>-->

                   <!-- <a href="index.php?connecte=true"></a>-->
				    </button>				
				</li>
				<?php
				
				if ($_SESSION['connect'] == 0)
					echo '<li><a name="button" data-toggle="modal" data-target="#myModal">Se connecter</a></li>
						<li><a href="signup.php" lass="btn btnjcm menubtn">S\'incrire</a></li>';
					else
						echo '<li><a type="bouton" href="fonction/logout.php" lass="btn btnjcm menubtn">Déconnexion</a></li>';                   
			      ?>               
		  </ul>	   
	   </div>	
    </div> 
</nav>