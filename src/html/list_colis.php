<?php
session_start();
                    
                        
//connexion bdd
include ("fonction/db_connexion.php");

//recup des info depuis la bdd pour les afficher sur le formulaire avant la modif
$req = $bdd->prepare('SELECT * FROM colis1');
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
        <header>
       <?php
           include "menu2.php";
        ?>
        </header>
        <div class="container body">
                <h3 class="titre">Liste des Colis</h3>
                <p></p>
                
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
                        <div class="row">
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
                            <div class="col-md-3">
                                <form method="post" action="detail_colis.php" >
                                <input type="hidden" name="id_colis" value="<?php echo $resultat['id']; ?>">
                                <button type="submit" class="btn btn-warning">Détail de l'annonce</button>
                                </form>
                             </div>
                         </div>

                         <!--troisieme box-->
                         
                         
                         
                         <!--
                         <div class="row">
                             <a href="detail.php"><button type="button" class="btn btn-warning">Détail de l'annonce</button></a>
                         </div>
                         -->
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