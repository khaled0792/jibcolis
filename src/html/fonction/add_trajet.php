<?php 

//Connexion à une base ODBC avec l'invocation de pilote
include("db_connexion.php");


//remplissage de la table	
//sans prix
$req = $bdd->prepare('INSERT INTO trajet (date , nature, colis, poid ,pays_dep , ville_dep, pays_arr, ville_arr, date_dep, description, box, user_id) 
						VALUES (:date,:nature,:colis,:poid,:pays_d,:ville_d,:pays_a,:ville_a,:date_dep,:description,:box,:id_user)');

//avec le prix
/*	$req = $bdd->prepare('INSERT INTO trajet (date , nature, colis, poid ,pays_dep , ville_dep, pays_arr, ville_arr, date_dep, description, prix, box, user_id) 
						VALUES (:date,:nature,:colis,:poid,:pays_d,:ville_d,:pays_a,:ville_a,:date_dep,:description,:prix,:box,:id_user)');
*/

//recuperation des informations envyer par le formulaire
	$req->execute(array(
	//date d'inscription
	'date' => $_POST['date'],
	'nature' => $_POST['transport'],
	'colis' => $_POST['type'],
	'poid' => $_POST['poid'],
	'pays_d' => $_POST['pays_depart'],
	'ville_d' => $_POST['ville_depart'],
	'pays_a' => $_POST['pays_arrive'],
	'ville_a' => $_POST['ville_arrive'],
	'date_dep' =>$_POST['date_dep'],
	'description' => $_POST['description'],
	//'prix' => $_POST['prix'],
	'box' => $_POST['condition'],
	'id_user' => $_POST['id'],
	));
	
	if($req)
				{
					header("Location: ../my_trajet.php");
				}
					else
				{
					header("Location: ../alert.php");
				}
	//$req->closeCursor();



?>