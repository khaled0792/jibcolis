<?php

//connexion bdd
include ("fonction/db_connexion.php");

//recuperation des informations recu par le formulaire
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$tel = $_POST['tel'];

//mise a jour de la table   
//                                          IMAGE_URL = :img,
    
    $req = $bdd->prepare('UPDATE user SET   LASTNAME = :nom
                                            FIRSTNAME = :prenom,
                                            PHONE = :tel,
                                            EMAIL_ID =:email
                            WHERE id = :id');
    $req->execute(array(    
    'email' => $email,
    //'img' => "images/profile.png",
    'nom' => $nom,
    'tel' => $tel,
    'prenom' => $prenom,
    'nom' => $nom,
    'id' => $id
    ));
    
    if($req)
                {
                    //echo('<center><h3 style="color:green">L\'insertion a été correctement effectuée</h3></center>') ;
                    //echo ('<center><h4">Redirection vers la page d\'acceil</h4></center>');
                    //header("Location: index.php");
                    //header("Refresh: 1;url=../profil.php");
                    header ('location: ../index.php');
                    //echo('<br /><center><a href="profil.php">Aller au profile</a> </center>') ;
                }
                    else
                {
                    include("../alert.php");
                    //echo('<br /><center><a href="http://localhost/jibcolis-project/src/jibcolis/html/signup.html">Reesayer</a></center>') ;
                }
    //$req->closeCursor();




?>




?>