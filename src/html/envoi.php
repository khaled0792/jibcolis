<?php
session_start();
//connexion bdd
include ("fonction/db_connexion.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Jibcolis</title>
  <meta name="description" content="">
  <meta name="author" content="khaled">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!--script-->
  <script src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous">
  </script>

  <!--bootstrap-->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
  <script src="../bootstrap/js/bootstrap.js" ></script>
  <script src="../bootstrap/js/npm.js" ></script>

  <!--css-->
  <link rel="stylesheet" href="../css/body.css">
  <link rel="stylesheet" href="../css/footer.css">

  <style>

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
    <div class="container corp">

      <!--conteneur-->
      <div id="conteneur">
          <!--div gauche ou element 1-->
          <div class="element">
              

              <?php
              //recup des info depuis la bdd pour les afficher sur le formulaire avant la modif
              $req = $bdd->prepare('SELECT * FROM messages where id = :id_msg');
              $req->execute(array('id_msg' => $_POST['id_msg']));
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
          </div>
          <!--div droit ou element 2-->
          <?php
          //<!--insertion du message-->

          if(isset($_SESSION['id']) AND !empty($_SESSION['id'])) {

          if(isset($_POST['envoi_message'])) {
            if(isset($_POST['message']) AND  !empty($_POST['message'])) {

               $message = htmlspecialchars($_POST['message']);
               
                  $id_destinataire = $resultat['id_expediteur'];
                  $ins = $bdd->prepare('INSERT INTO messages(id_expediteur,id_destinataire,message) VALUES (?,?,?)');
                  $ins->execute(array($_SESSION['id'],$id_destinataire,$message));
                  
                  echo "<div class='alert alert-warning'>
                            Votre message a bien été envoyé !
                        </div>";
            

            } else {
               echo "Veuillez compléter tous les champs";
            }
            echo "<script type='text/javascript'>document.location.replace('reception.php');</script>";
          }
          }
          ?>
                 
          <div class="element">
              <h4 class="titre">Répondre au message </h4>
              <form method="post" >
                  <textarea  name="message" rows="8" cols="45">Votre réponse !</textarea>
                  <br />
                  <button type="submit" class="btn btn-success send" name="envoi_message" value="Envoyer">Envoyer</button>
                  <input type="hidden" name="id_msg" value="<?php echo $resultat['id']; ?>">
            </form>
          </div>
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
