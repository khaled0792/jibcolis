<?php
session_start();
?>

<!DOCTYPE html>
<!--INCLURE DE LA-->
<html>
	<head>
		<?php include ("head.php"); ?>
		<!--
		<link rel="stylesheet" href="../css/style_profil.css">
		
		<link rel="stylesheet" href="../css/style.css">
		-->		
		<link rel="stylesheet" href="../css/transporteur.css">
	</head>
	
	<body>
		
			<?php
				include "menu2.php";
			?>
		

		<div class="container body form">
			<h3 class="txt_center">Expéditeur</h3>
			<br>
			<br>

			<form class="center_form" method="post" action="fonction/add_colis.php">

				<div class="form-group">
					<label for="type">Type</label>
					<select class="form-control" name="type" required>
						<option selected disabled>Choisir dans la liste</option>
						<option value="doc"> Courriels, Livres et documents</option>
						<option value="vet"> Vetements et accessoires</option>
						<option value="med"> Médicaments</option>
						<option value="autre"> Objets et autres</option>
					</select>
				</div>
				<br>

				<div class="form-group">
					<label for="poid">Poids</label>
					<select class="form-control" name="poid" required>
						<option value="Inférrieur à 1kg"> Inférrieur à 1kg</option>
                        <option value="Entre 1Kg et 3kg"> Entre 1Kg et 3kg</option>
                        <option value="Entre 3Kg et 5Kg"> Entre 3Kg et 5Kg</option>
                        <option value="Suppérrieur à 5Kg"> Suppérrieur à 5Kg</option>
					</select>
				</div>
				<br>
				<label for="email"> Trajet </label>
				<div class="form-group flex">
					<select class="form-control w25" name="pays_depart" required>
						<option value="">Pays de depart</option>
						<?php include "liste_pays.php" ?>
					</select>
					<div class="form-group">
						<input type="text"  class="form-control" name="ville_depart" placeholder="Ville de depart" required/>
					</div>
					<!--<i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i>-->
					<select class="form-control w25" name="pays_arrive" required>
						<option value="">Pays d'arrivé</option>
						<?php include "liste_pays.php" ?>
					</select>
					<div class="form-group">
						<input type="text"  class="form-control" name="ville_arrive" placeholder="Ville d'arrivé" required/>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="date">Envoyer avant</label>
					<input type="date" name="date" class="form-control" required>
				</div>
				<br>
				<div class="form-group">
					<label for="desc">Description</label>
					<textarea name="description" class="form-control" rows="3" cols="80" placeholder="Description du colis ou de son contenu"></textarea>
				</div>
				<!--prix-->
				<!--
				<div class="form-group">
					<label for="prix">Prix</label>
					<input type="number" class="form-control" name="prix">
				</div>
				-->
				<!--check box-->
				<div class="checkbox">
                    <label>
                        <input type="checkbox" name="condition" required value="1">
                        <a style="color:black;" href="../docs/DECLARATION-DE-CONFIANCE.pdf" target = "_blank">Oui, j'imrpimme et je signe Le contrat de confiance</a></label>
                </div>
				<input type="hidden" id="id" name="id" value="<?php echo $_SESSION['id']; ?>" />
				<button type="submit" class="btn btnjcv">
					Publier
				</button>
				<br>
				<br>
			</form>
		</div>
<!-- begin footer-->
<?php
	include("footer.php");
?>
<!--end footer-->
</body>
</html>
