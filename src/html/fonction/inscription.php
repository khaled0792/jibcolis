<?php
//connexion a la base de donnée
include("db_connexion.php");

// Vérification de la validité des informations


//recup des données de la page d'inscription
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
    
	//$pass = $_POST['pass'];


// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
	


//remplissage de la table	
	
	$req = $bdd->prepare('INSERT INTO user(EMAIL_ID,IMAGE_URL, PASSWORD,PHONE, FIRSTNAME, LASTNAME) 
						VALUES(:email,:img,:pass,:tel, :prenom, :nom)');
	$req->execute(array(
	
	'email' => $email,
	'img' => "images/profile.png",
	'pass' => $pass_hache,
	'tel' => $tel,
	'prenom' => $prenom,
	'nom' => $nom,
	));
	
	if($req){
	    
					header("Location: ../alerte.php");
				}
					else
				{
					header("Location: ../index.php");
				}
	



	//$req->closeCursor();
?>