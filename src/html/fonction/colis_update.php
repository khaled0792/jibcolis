<?php
//Connexion à une base ODBC avec l'invocation de pilote
include("db_connexion.php");
//recuperation des informations envyer par le formulaire
$type = $_POST['type'];
$poid = $_POST['poid'];
$pays_depart = $_POST['pays_depart'];
$ville_depart = $_POST['ville_depart'];
$pays_arrive = $_POST['pays_arrive'];
$ville_arrive = $_POST['ville_arrive'];
$date = $_POST['date'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$condition = $_POST['condition'];
$id_user = $_POST['id'];

//mise a jour de la table   
//                                          IMAGE_URL = :img,
    
    $req = $bdd->prepare('UPDATE colis1 SET poid = :poid,
                                            pays_dep = :pays_d, 
                                            ville_dep = :ville_d,
                                            pays_arr = :pays_a,
                                            ville_arr = :ville_a,
                                             date = :date,
                                              description = :description,
                                               prix = :prix,
                                                box = :box,
                                                 type = :type,
                            WHERE id = :id');
    $req->execute(array(    
    'type' => $type,
    'poid' => $poid,
    'pays_d' => $pays_depart,
    'ville_d' => $ville_depart,
    'pays_a' => $pays_arrive,
    'ville_a' => $ville_arrive,
    'date' => $date,
    'description' => $description,
    'prix' => $prix,
    'box' => $condition
    ));
    
    if($req)
                {
                    
                    header ('location: ../my_colis.php');
                }
                    else
                {
                    header ('location: ../alert.php');
                }
    //$req->closeCursor();




?>