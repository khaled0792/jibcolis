<nav class="navbar navbar-default navbar-fixed-top my-menu">
        <div>
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
                    <!--<li><a href="index.php" lass="btn btnjcm menubtn">Acceuil</a></li>-->
                    <li><a href="profil.php" lass="btn btnjcm menubtn">Tableau de bord</a></li>
                    <li><a lass="btn btnjcm menubtn" href="comment_ca_marche.php">Comment ça marche</a></li>
                    <!--voyageur-->
                    <li class="dropdown">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">annonces
                         <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="list_voyageurs.php">Voyageurs</a></li>
                              <li><a href="list_colis.php">Colis</a></li>
                          </ul>
                    </li>
                    <!--expediteur-->
                    <li class="dropdown">
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ajouter une annonce
                         <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="transporteur.php">Voyageur</a></li>
                              <li><a href="expediteur.php">Colis</a></li>
                          </ul>
                    </li>
                    <!--menu photo-->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <?php echo '<img src="../'.$_SESSION['img'].'" class="profil_photo" alt="photo de profile" style="margin-top: -8px; 
                                                                                                                                            border-radius: 5px;
                                                                                                                                            height:25px;
                                                                                                                                            width:25px;"">'; ?>
                                        <?php echo $_SESSION['prenom'];  ?>
                                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="edit_profil.php">Mon profile</a></li>
                          <li><a href="my_colis.php">Mes colis</a></li>
                          <li><a href="my_trajet.php">Mes trajets</a></li>
                          <li><a href="reception.php">Ma messagerie</a></li>
                          <li><a href="fonction/logout.php">Deconnexion</a></li>
                        </ul>
                    </li>
                    
                    
                    <!--<li><?php echo '<img src="../'.$_SESSION['img'].'" class="profil_photo" alt="photo de profile" style="height: 10px; width: 10px;">'; ?>
                        <h5 class="profil_brand" type="button" data-toggle="dropdown"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'];  ?><span class="caret"></span></h5>
                            <span class="dropdown">
                                <ul class="dropdown-menu">
                                        <li><a href="editer_profil.php">Mon profile</a></li>
                                        <li><a href="my_colis.php">Mes colis</a></li>
                                        <li><a href="#">Mes trajets</a></li>
                                        <li><a href="#">Ma messagerie</a></li>
                                        <li><a href="fonction/logout.php">Deconnexion</a></li>
                                 </ul>
                            </span> 
                    </li>
                    -->                      
                </ul>    
        </div>  
        <!--/menu droit--> 
    </div> 
</nav>