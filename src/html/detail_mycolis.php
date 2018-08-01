<?php
session_start();
//connexion bdd
include ("fonction/db_connexion.php");

//recup des info depuis la bdd pour les afficher sur le formulaire avant la modif
$req = $bdd->prepare('SELECT * FROM colis1 where id = :id_colis');
$req->execute(array('id_colis' => $_POST['idc']));
//$resultat = $req->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include("head.php"); ?>   
  <style>
      
  /*style annonce*/
      .titre{
          color: white;
      }
      
      .center {
          text-align: center;
      }
      
      #conteneur{
         display:flex;
         flex-wrap:wrap;
         justify-content: space-around;
         margin-top:10%;
      }
      
      .element{
          margin-bottom:10%;
          
      }
      
      
      table {
          color: white;
         font-weight: bold;
      }
      
      form a:hover{
          text-decoration : none;
      }
      
      
      /*table tr{
          margin-top:3%;
          margin-bottom:3%;
      }*/
     th, td {
       padding: 15px;
        text-align: left;
         border-top: 1px solid #ddd;
    }
    tr:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }
    
    form label, a{
        color:white;
    }
    
    form  label:hover,a:hover{
        color:black;
    }
    
    .send{
        margin-top:10px;
    }
    
    .element img{
        width:200px;
        height:auto;
    }
    
    .bbtn {
        border-radius:0px;
    }
  </style>
    
</head>

<body>
    <!--main-->
  <div>
    <header>
        <!--menu-->
        <?php
            include "menu2.php";
        ?>
        <!--/menu-->
    </header>
   <!--corp-->
    <div class="container body">
        <div class="center">
          <h4 class="titre">Détail de l'annonce</h4>
      </div>
      <!--conteneur-->
      <div id="conteneur">
          <!--div millieu-->
          <div class="element">
              
              
              <?php if(!$req)
                    {
                        echo "<h4>petit probleme concernant l\'affichage des données</h4>";
                    }
                    else
                        {
                            while ($resultat = $req->fetch())
                            {
                            
               ?>
              <table>
                  <tr>
                      <td>Trajet</td>
                  
                      <td><?php echo $resultat['pays_dep']; ?> <?php echo '('.$resultat['ville_dep'].')'; ?> 
                                 <span class="glyphicon glyphicon-arrow-right"></span>
                          <?php echo $resultat['pays_arr']; ?>  <?php echo '('.$resultat['ville_arr'].')'; ?></td>
                  </tr>
                  <tr>
                      <td>Type de colis : </td><td><?php echo $resultat['type']; ?></td>
                  </tr>
                  <tr>
                      <td>Poids : </td><td><?php echo $resultat['poid']; ?></td>
                  </tr>
                      
                  <tr>
                      <td>Date : </td><td><?php echo $resultat['date']; ?></td>
                  </tr>    
                      
                  <tr>
                      <td>Description</td><td><?php echo $resultat['description']; ?></td>
                  </tr>
              </table>
              
          </div>
          <!--div droit ou element 2-->
          <div class="element">
              <img src="../images/colis.png" alt="image du colis" >
          </div>
    </div>
    <div class="center" >
        
                   <button type="button" class="btn btn-success">Modifier</button>
                   <!--supprimer-->
                                 <button class="btn btn-danger" data-toggle="modal" data-target="<?php echo "#confirm_modal".$resultat['id']; ?>" >Supprimer</button>
                                 <!--confirmation modal-->
                                   <div id="<?php echo "confirm_modal".$resultat['id']; ?>" class="modal" role="dialog" style="top:30%" >
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
       
    </div>
    <!--/corp-->
    </div>
    <?php
              //fermeture du while
                            }
              //fermeture du else
                        }
              $req->closeCursor();
              ?>
    
    <!--footer-->
        <?php
            include "footer.php";
        ?>
    <!--/footer--> 
  
  </div>
  <!--/main-->
  
</body>
</html>
