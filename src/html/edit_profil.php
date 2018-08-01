<?php
session_start();
// if (!isset($_SESSION['token']) && !isset($_SESSION['fb_access_token'])) {
//    header("location:index.php");
//    exit;
//Connexion à une base ODBC avec l'invocation de pilote
include("fonction/db_connexion.php");
try {
    $bdd = new PDO($dsn, $user, $password);
}
	catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
//recup des info depuis la bdd pour les afficher sur le formulaire avant la modif
$req = $bdd->prepare('SELECT EMAIL_ID, PHONE, FIRSTNAME, LASTNAME FROM user WHERE id = :id');
$req->execute(array(
    'id' => $_SESSION['id']));
$resultat = $req->fetch();
?>
<!DOCTYPE html>
<!--INCLURE DE LA-->
<html>
  <head>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="../css/style.css">
    
  </head>
  <body>
<!--menu-->
<?php include("menu2.php"); ?>
<!--/menu-->
<!--JUSQUE LA-->
<div class="section1">
  <div class="row" style="padding-top: 5%;">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="padding: 20px; background-color: rgba(255,255,255,0.3);border-radius: 8px;">
      <div class="inscription_form">
        <!--<div class="media_soc">
          <p style="padding:5px;font-size:20px;text-align: left;" ><b>S'inscrire avec</b></p>
          <button type="button" name="button" class="btn-connect" id="btn-fb-connect"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</button>
          
          <button class="btn-connect" type="button" name="button" id="btn-gg-connect"><i class="fa fa-google" aria-hidden="true"></i> Google</button>
        </div>
        -->
        
        <div style="text-align: left;">
            
            <p class="fort">Formulaire de mise à jour du profil</p>
            
         </div>
        <p><br /></p>
		
<!--formulaire d'inscription-->
        <form class="inner_form" method="post" action="fonction/update.php">

          <div class="form-group" style="border: 10px white;border-radius: 15px;">
			<!-- dans un div le nom est le prenom pour etre sur la meme ligne-->
            <div class="nom_pre">
                <input id="nom" type="text" class="form-control" name="nom" placeholder="NOM" value="<?php echo $resultat['LASTNAME']; ?>">
                <input id="prenom" type="prenom" class="form-control" name="prenom" placeholder="PRENOM" value="<?php echo $resultat['FIRSTNAME']; ?>">
            </div>
            <input id="email" type="mail" class="form-control" name="email" placeholder="Email" value="<?php echo $resultat['EMAIL_ID']; ?>">
            <input id="tel" type="tel" class="form-control" name="tel" placeholder="Numero de téléphone" value="<?php echo $resultat['PHONE']; ?>">
            <!--<input id="pass" type="password" class="form-control" name="pass" placeholder="Mot de passe">-->
            <!--<button type="button" name="button" id="btn-cr-acount">Créer un compte</button>-->
			<!--<input type="submit" id="btn-cr-acount" value="Créer un compte" style="width: 100%" class="btn btn-default"/>-->
            <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
            <button type="submit" class="btn btn-default" style="width: 100%">Mettre à jour</button>
            <p></p>

          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<!--begin footer-->
<?php
	include("footer.php");
?>
<!--end footer-->
</div>
</body>
</html>