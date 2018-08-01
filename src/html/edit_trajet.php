<?php
session_start();
//connexion bdd
include ("fonction/db_connexion.php");
?>

<!DOCTYPE html>
<!--INCLURE DE LA-->
<html>
    <head>
        <?php  require ("head.php"); ?>
        <link rel="stylesheet" href="../css/transporteur.css">
    </head>
    
    <body>
        <header>
            <?php
                include "menu2.php";
            ?>
        </header>

        <div class="body container form">
            <p><br /></p>
            <h3 class="txt_center">Méttre à jour votre annonce de trajet</h3>
            <br />
            <br />
            
            <?php
              //recup des info depuis la bdd pour les afficher sur le formulaire avant la modif
              $req = $bdd->prepare('SELECT * FROM trajet where id = :id_v');
              $req->execute(array('id_v' => $_POST['id_v']));
              //$resultat = $req->fetch();

              if(!$req)
                    {
                        echo "<h4>petit probleme concernant l\'affichage des données</h4>";
                    }
                    else
                        {
                            while ($resultat = $req->fetch())
                    {

              ?>

            <form class="center_form" method="post" action="fonction/trajet_update.php">
                
                
                
                
               <!--mode de transport-->      
                    <div class="form-group">
                    <label for="type">Mode de transport</label>
                    <select class="form-control" name="transport" required>
                        <option value="<?php echo $resultat['nature']; ?>" ><?php echo $resultat['nature']; ?></option>
                        <?php  
                        $type_trans = array('Ferroviaire','maritime','Routier','Aérien');
                        for($i=0;$i<4;$i++)
                                {
                                    if($type_trans[$i]!=$resultat['nature'])
                                    {
                                        echo '<option value="'.$type_trans[$i].'" >'.$type_trans[$i].'</option>';                
                                    }
                                }
                        
                        
                        ?>
                    </select>
                </div>
                <br />
                
                
                
                
                
                <!--type-->
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-control" name="type" required>
                        
                        <?php 
                        if ($resultat['colis'] == "med") {
                           echo '<option value="doc"  >Courriels, Livres et documents</option>';
                             echo '<option value="med" selected>Médicaments</option>';
                              echo '<option value="vet" >Vetements et accessoires</option>';
                               echo '<option value="autre" >Objets et autres</option>';
                        }elseif($resultat['colis'] == "doc"){
                            echo '<option value="doc" selected >Courriels, Livres et documents</option>';
                             echo '<option value="med" >Médicaments</option>';
                              echo '<option value="vet" >Vetements et accessoires</option>';
                               echo '<option value="autre" >Objets et autres</option>';
                        }elseif($resultat['colis'] == "vet"){
                            echo '<option value="doc"  >Courriels, Livres et documents</option>';
                             echo '<option value="med" >Médicaments</option>';
                              echo '<option value="vet" selected>Vetements et accessoires</option>';
                               echo '<option value="autre" >Objets et autres</option>';
                        }elseif($resultat['colis'] == "autre"){
                            echo '<option value="doc"  >Courriels, Livres et documents</option>';
                             echo '<option value="med" >Médicaments</option>';
                              echo '<option value="vet" >Vetements et accessoires</option>';
                               echo '<option value="autre" selected>Objets et autres</option>';
                        }
                                
                            ?>
                    </select>
                </div>
                <br />
                
                
                
                
                  <!--poid-->
                  <div class="form-group">
                    <label for="poid">Poids</label>
                    <select class="form-control" name="poid" required>
                        <option value="<?php echo $resultat['poid']; ?>" selected><?php echo $resultat['poid']; ?></option>
                        <?php  
                        $poids = array('Inférrieur à 1kg','Entre 1Kg et 3kg','Entre 3Kg et 5Kg','Suppérrieur à 5Kg');
                        for($i=0;$i<4;$i++)
                                {
                                    if($poids[$i]!=$resultat['poid'])
                                    {
                                        echo '<option value="'.$poids[$i].'" >'.$poids[$i].'</option>';                
                                    }
                                }
                        
                        
                        ?>
                    </select>
                </div>
                
                
                
                <!--trajet-->
                <label for="email">Trajet</label>
                <div class="form-group flex">
                    <select class="form-control w25" name="pays_depart" required>
                        <option value="<?php echo $resultat['pays_dep']; ?>" selected><?php echo $resultat['pays_dep']; ?></option>
                        <?php include "liste_pays.php" ?>
                    </select>
                    <div class="form-group">
                        <input type="text"  class="form-control" name="ville_depart" placeholder="<?php echo $resultat['ville_dep']; ?>" required/>
                    </div>
                    <i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i>
                    <select class="form-control w25" name="pays_arrive" required>
                        <option value="<?php echo $resultat['pays_arr']; ?>" selected><?php echo $resultat['pays_arr']; ?></option>
                        <?php include "liste_pays.php" ?>
                    </select>
                    <div class="form-group">
                        <input type="text"  class="form-control" name="ville_arrive" placeholder="<?php echo $resultat['ville_dep']; ?>" required/>
                    </div>
                </div>
                <br/>
                <!--date depart-->
                <div class="form-group">
                    <label for="date">Date de depart</label>
                    <input type="date" name="date_dep" class="form-control" placeholder="<?php echo $resultat['date_dep']; ?>" required>
                </div>
                <br />
                <!--description-->
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="description" class="form-control" rows="3" cols="80" placeholder="<?php echo $resultat['description']; ?>"></textarea>
                </div>
                
                
                
                <!--check-->
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="condition" required value="1">
                        <a style="color:black;" href="../docs/DECLARATION-DE-CONFIANCE.pdf" target = "_blank">Oui, j'imrpimme et je signe Le contrat de confiance</a></label>
                </div>
                
                
                <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>" />
                <input type="hidden" id="id" name="id" value="<?php echo $resultat['id']; ?>" />
                <button type="submit" class="btn btnjcv">
                    Modifier
                </button>
                <br />
                <br />
            </form>
        </div>
        
        <?php
              //fermeture du while
                            }
              //fermeture du else
                        }
              $req->closeCursor();
              ?>
        
<!-- begin footer-->
<?php
    include("footer.php");
?>
<!--end footer-->
</body>
</html>
