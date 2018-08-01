<!DOCTYPE html>
<html>
<head>
   <?php include ("head.php"); ?>
</head>
<body>
    <style>
        p {
             margin-top:4%;
             margin-right:4%;
             padding-bottom:4%;
             margin-left:2%;
        }
        div.foot {
            
            margin-top:21%;
        }
        div.container-fluid{
            margin-top:2%;
        }
    </style>
<?php
    include "box.php";
    $_SESSION = 0;

?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="alert alert-success" role="alert"><p>Félicitation ! </br></br> Vous venez de vous inscrire sur notre plateforme de service <a href="index.php"> www.jibcolis.com</a> nous vous souhaitons la bienvenue chez nous. </br></br> Pour plus d'informations veuillez vous connectez.</br> </br> <a href="about_us.php">L'équipe JibColis - AwidColis. </p></a></div>
            </article>
            	<?php		if ($_SESSION['connect'] == 0)
					echo '<a name="button" data-toggle="modal" data-target="#myModal"><center><button type="submit" class="btn btn-success send"><li>Se connecter</li></button></center></a>';
			      ?>
			      
            </div>
        </div>
    </div>


    <div class="foot">
    <?php include ("footer.php"); ?>
    </div>
</body>
</html>
