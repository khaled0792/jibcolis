<?php
//Connexion à une base ODBC avec l'invocation de pilote
include("db_connexion.php");
//recuperation des informations recu par le formulaire
$id = $_POST['idc_drop'];


//mise a jour de la table   
//                                          IMAGE_URL = :img,
    
    $req = $bdd->prepare('DELETE FROM colis1 WHERE id = :id');
    $req->execute(array('id' => $id));
    
    if($req)
                {
                    //echo('<center><h3 style="color:green">L\'insertion a été correctement effectuée</h3></center>') ;
                    //echo ('<center><h4">Redirection vers la page d\'acceil</h4></center>');
                    //header("Location: index.php");
                    //header("Refresh: 1;url=../profil.php");
                    header ('location: ../my_colis.php');
                    //echo('<br /><center><a href="profil.php">Aller au profile</a> </center>') ;
                }
                    else
                {
                    header('location: ../alert.php');
                    //echo('<br /><center><a href="http://localhost/jibcolis-project/src/jibcolis/html/signup.html">Reesayer</a></center>') ;
                }
   // $req->closeCursor();


?>

