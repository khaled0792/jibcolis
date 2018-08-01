<?php
session_start();

//connexion bdd
include ("fonction/db_connexion.php");

//recup des info depuis la bdd pour les afficher sur le formulaire avant la modif
$req = $bdd->prepare('SELECT * FROM trajet');
$req->execute(array());
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
       <?php
           include "menu2.php";
        ?>
        <div class="container body">
                <p></p>
                <h3 class="titre">Liste des voyageurs</h3>
                <p><br /></p>
                
                <?php
                if (!$req)
                    {
                        //i devrais y'avoir une boite de dialogue c mieux
                        echo '<h4>Il n\'y a aucun voyageur</h4>';
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
                            <img class="img-colis" src="../images/passenger.png" alt="passenger_img" >
                        </div>
                        
                        <!--seconde box-->
                         <div class="col-md-6 text_colis">
                             
                             <!--<p>Mode de transport : <?php echo $resultat['nature']; ?>-->
                             
                             <p>Trajet :
                                 <?php echo $resultat['pays_dep']; ?> <?php echo '('.$resultat['ville_dep'].')'; ?> 
                                 <span class="glyphicon glyphicon-arrow-right"></span>
                                 <?php echo $resultat['pays_arr']; ?>  <?php echo '('.$resultat['ville_arr'].')'; ?>
                             </p>
                             
                             <!--<P>Type de colis : <?php echo $resultat['colis']; ?> </p>-->
                                <p>Poid : <?php echo $resultat['poid']; ?> </p>
                             <br />
                              
                         </div>
                        
                         <!--troisieme box-->
                         <div class="col-md-3">
                         <div class="row">
                                 <!--<a href="colis_update.php" class="col-md-12 btn btn-success">Modifier</a>
                                 <a href="colis_drop.php" class="col-md-12 btn btn-danger">Supprimer</a>-->
                                <form method="post" action="detail_voyage.php" >
                                <input type="hidden" name="id_colis" value="<?php echo $resultat['id']; ?>">
                                <button type="submit" class="btn btn-warning">Détail de l'annonce</button>
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
        
    </body>
</html>