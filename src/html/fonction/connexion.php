<?php 
//Connexion à une base ODBC avec l'invocation de pilote
include("db_connexion.php");

//recuperation des identifiant depuis la boite d'inscription
$email = $_POST['email'];
$pass = $_POST['password'];

//recup des donnée depuis la bdd
$req = $bdd->prepare('SELECT id, EMAIL_ID, IMAGE_URL ,PASSWORD, FIRSTNAME, LASTNAME FROM user WHERE EMAIL_ID = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($pass, $resultat['PASSWORD']);
if ($resultat)
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['mail'] = $email;
        $_SESSION['img'] = $resultat['IMAGE_URL'];
        $_SESSION['nom'] = $resultat['LASTNAME'];
        $_SESSION['prenom'] = $resultat['FIRSTNAME'];
		$_SESSION['connect'] = 1;
        header('Location:../index.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
else
{
	//i devrais y'avoir une boite de dialogue c mieux
    echo 'Mauvais identifiant ou mot de passe !';
}

?>