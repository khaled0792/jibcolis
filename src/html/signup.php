<!DOCTYPE html>
<!--INCLURE DE LA-->
<html>
	<head>
		<?php
        include ("head.php");
 ?>
		<link rel="stylesheet" href="../css/style.css">

	</head>

	<body>
		<!---->
		<?php
        include "box.php";
		?>
		<!----- menu ------------------------------------------------------------------------------------->
		<header>
			<nav class="navbar navbar-default">
				<div class="container">
					<!--menu gauche-->
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php"> <img height="100%" src="../images/logo.png" alt="Logo_JIBCOLIS"> </a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--menu droite-->
					<div class="navbar-right collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li>
								<a href="index.php" lass="btn btnjcm menubtn">Accueil</a>
							</li>
							<li>
								<a lass="btn btnjcm menubtn" href="comment_ca_marche.php">Comment ça marche</a>
							</li>
							<li>
								<a name="button" data-toggle="modal" data-target="#myModal">Se connecter</a>
							</li>
							<li>
								<a href="signup.php" lass="btn btnjcm menubtn">S'incrire</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!--/menu-->
		</header>
		<!----- fin du menu ------------------------------------------------------------------------------------>

		<!--JUSQUE LA-->
		<div class="container body">
			<div class="row" style="padding-top: 5%;">
				<div class="col-md-3"></div>
				<div class="col-md-6" style="padding: 20px; background-color: rgba(255,255,255,0.3);border-radius: 8px;">
					<div class="inscription_form">

						<div style="text-align: left;">

							<p class="fort">
								Formulaire d'inscription
							</p>

						</div>

						<!--formulaire d'inscription-->
						<form class="inner_form" method="post" action="fonction/inscription.php">

							<div class="form-group" style="border: 10px white;border-radius: 15px;">
								<!-- dans un div le nom est le prenom pour etre sur la meme ligne-->
								<div class="nom_pre">
									<input id="nom" type="text" class="form-control" name="nom" placeholder="NOM">
									<input id="prenom" type="prenom" class="form-control" name="prenom" placeholder="PRENOM">
								</div>
								<input id="email" type="mail" class="form-control" name="email" placeholder="Email">
								<input id="tel" type="tel" class="form-control" name="tel" placeholder="Numero de téléphone">
								<input id="pass" type="password" class="form-control" name="pass" placeholder="Mot de passe">
								<!--<button type="button" name="button" id="btn-cr-acount">Créer un compte</button>-->
								<!--<input type="submit" id="btn-cr-acount" value="Créer un compte" style="width: 100%" class="btn btn-default"/>-->
								<a href="alerte.php">
								<button type="submit" class="btn btn-default" style="width: 100%">
									Créer un compte
								</button></a>
								<p></p>

							</div>

						</form>
					</div>
				</div>
			</div>
		</div>

		<!--begin footer-->
		<?php
        include ("footer.php");
		?>
		<!--end footer-->
	</body>
</html>
