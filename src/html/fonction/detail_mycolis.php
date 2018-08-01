<?php
session_start();
//connexion bdd
include ("fonction/db_connexion.php");

//recup des info depuis la bdd pour les afficher sur le formulaire avant la modif
$req = $bdd->prepare('SELECT * FROM colis1 where id = :id_colis');
$req->execute(array('id_colis' => $_POST['id_colis']));
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
  </style>
    
</head>

<body>  
    <header>
        <!--menu-->
        <?php
            include "menu2.php";
        ?>
        <!--/menu-->
    </header>
   <!--corp-->
    <div class="container body">
        
      <!--conteneur-->
      <div id="conteneur">
          <!--div gauche ou element 1-->
          <div class="element">
              <h4 class="titre">Détail de l'annonce</h4>
              
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
              <?php
              //fermeture du while
                            }
              //fermeture du else
                        }
              $req->closeCursor();
              ?>
          </div>
          <!--div droit ou element 2-->
          <div class="element">
              
          </div>
    </div>
    <!--/corp-->
    </div>
    
    <!--footer-->
        <?php
            include "footer.php";
        ?>
    <!--/footer--> 
  
</body>
</html>
