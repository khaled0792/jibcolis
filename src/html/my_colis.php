<?php
session_start();

//connexion bdd
include ("fonction/db_connexion.php");

//recup des info depuis la bdd pour les afficher sur le formulaire avant la modif
$req = $bdd->prepare('SELECT * FROM colis1 WHERE user_id = :id ORDER BY id DESC;');
$req->execute(array('id' => $_SESSION['id']));
//$resultat = $req->fetch();
?>
<!DOCTYPE html>
<html>
    <head>
      <?php include("head.php"); ?>
      <link rel="stylesheet" href="../css/my_colis.css" type="text/css" media="screen">
        
        <style>
            /*.img-colis{
                width:100%;   
             }*/
        </style>
        
    </head>
    <body>
       <div>
           <header>
       <?php
           include "menu2.php";
        ?>
        </header>
        <div class="container body">
                <div><h2 class="titre">Mes Colis</h2></div>
                <?php
                if (!$req)
                    {
                        //i devrais y'avoir une boite de dialogue c mieux
                        echo '<h4>Vous navez aucun colis</h4>';
                    }
                        else
                    {
                         
                    // On affiche chaque entrée une à une
                    while ($resultat = $req->fetch())
                    {
                   ?>
                
                    <div  class="row annonce">
                        <!--premiere box-->
                        <div class="col-md-3">
                            <img class="img-colis" src="../images/colis.png" alt="Colis_image" >
                        </div>
                        
                        <!--seconde box-->
                         <div class="col-md-6 text_colis">
                             
                             <P>Type de colis : <?php echo $resultat['type']; ?> </p>
                             <!--<p>Poid : <?php echo $resultat['poid']; ?> </p>-->
                             <p>Trajet :
                                 <?php echo $resultat['pays_dep']; ?> <?php echo '('.$resultat['ville_dep'].')'; ?> 
                                 <span class="glyphicon glyphicon-arrow-right"></span>
                                 <?php echo $resultat['pays_arr']; ?>  <?php echo '('.$resultat['ville_arr'].')'; ?>
                             </p>
                             <!--<p>Date d'expedition avant : <?php echo $resultat['date']; ?> </p>-->
                             <!--<p>Description : <?php echo $resultat['description']; ?> </p>-->
                             <!--<p>Prix : <?php echo $resultat['prix'].'<br />'; ?> </p>-->
                             <!--<br />-->
 
                         </div>
                        
                         <!--troisieme box-->
                         <div class="col-md-3">
                         <div class="row">
                                <!--modifier-->
                                 <a href="colis_update.php" class="btn btn-success">Modifier</a>
                                 
                                 <!--supprimer-->
                                 <button class="btn btn-danger" data-toggle="modal" data-target="<?php echo "#confirm_modal".$resultat['id']; ?>" >Supprimer</button>
                                 <!--confirmation modal-->
                                   <div id="<?php echo "confirm_modal".$resultat['id']; ?>" class="modal center" role="dialog" style="top:30%" >
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-body">
                                                    <p>Voulez vous vraiment supprimer ce colis</p>
                                                    
                                                    <form method="post" action="fonction/drop_colis.php">
                                                        <input type="hidden" name="idc_drop" value="<?php echo $resultat['id']; ?>">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Non</button>
                                                        <button type="submit" class="btn btn-secondary">Oui</button>
                                                    </form>
                                                    </div>
                                                </div>
                                             </div>
                                  </div>
                                 <!--/confirmation modal-->
                                 <!--/supprimer-->
                                 
                                 <!--detail de l'annonce-->
                                 <form method="post" action="detail_mycolis.php" >
                                    <input type="hidden" name="idc" value="<?php echo $resultat['id']; ?>">
                                    <!--<input type="hidden" name="<?php echo 'id_colis'.$resultat['id']; ?>" value="<?php echo $resultat['id']; ?>">-->
                                    <button type="submit" class="btn btn-warning">Détail de l'annonce </button>
                                </form> 
                                
                         </div>
                         </div>
                       </div>
                       <br />
                     <?php
                    }
                    }
                     $req->closeCursor();       
                    
                    ?>
            </div>

<!-- begin footer-->
<?php
	include("footer.php");
?>
<!--end footer-->
        </div>
  </body>
</html>