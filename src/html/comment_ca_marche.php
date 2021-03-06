<?php
//dans le dossier html
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
<!----- menu ------------------------------------------------------------------------------------->
 <!--menu-->    
    <?php
        include "box.php";
        if ($_SESSION['connect'] == 0)
                        include "menu.php";        
                    else
                        include "menu2.php";        
    ?>    <!--/menu--> 
 <!----- fin du menu ------------------------------------------------------------------------------------>
<div class="section1" >
  <div class="main main2">
    <div>
      <p class="fort">Comment ça marche</p>
      <br />
	  <p>
        Vous voulez transporter ou expédier un colis ?
      </p>
    </div>
    <p style="font-size: 20px;">Pour en savoir un peux plus<br />
    Cliquez sur l'une des rubriques ci-dessous</p>
    <!--/main-->
    <div class="row pad">
      <div class="col-md-3"></div>
      <div class="col-md-3">
        <a href="#trans" id="anc_trans" class="btn btnjbl vertf" name="button">Trasporter</a >
        </div>
      <div class="col-md-3">
        <a href="#exped" id="anc_exped" class="btn btnjbr maronf" name="button">Expédier</a >
      </div>
      <div class="col-md-3"></div>
    </div>
</div>
</div>
<!--section1-->
    <section class="intro">
      <div class="container">
        <h2 id="trans" >Transporteur</h2>
      </div>
    </section>

    <section class="timeline">
      <ul>
        <li>
          <div>
            <time>1</time> Indiquez la date, la destination et l'horaire de votre voyage, puis la quantité et poids du colis que vous consentez à transporter.
          </div>
        </li>
        <li>
          <div>
            <time>2</time> L’expéditeur (envoyeur) réserve en ligne via la plateforme « JibColis » et vous êtes automatiquement prévenu(e) par e-mail ou par téléphone à chaque nouvelle réservation.
            Ensuite vous échangez avec votre expéditeur par téléphone pour régler les derniers détails relatifs à l’expédition de votre colis.
          </div>
        </li>
        <li>
          <div>
            <time>3</time>
            Consultez le profil qui vous correspond le mieux et vérifiez les informations concernant l’expéditeur.
Si vous voulez des précisions sur la nature de l’expédition, la plateforme «JibColis» vous offre l’opportunité de rentrer en contact avec lui par téléphone ou par e-mail.
          </div>
        </li>
        <li>
          <div>
            <time>4</time>Convenez d'un lieu et d'une heure de rendez-vous avec l'expéditeur, puis demandez à voir sa pièce d'identité et assurez-vous que les informations qui y figurent concordent avec celles apposées sur le contrat.
Vérifiez le contenu du colis et contrôlez, en compagnie de l’expéditeur, les coordonnées exactes du destinataire du colis.
Signez la déclaration de confiance (imprimable) sur le site et faites-le signer par l’expéditeur.
Vous pouvez enfin prendre en charge l’envoi du colis</div>
        </li>
        <li>
          <div>
            <time>5</time> Lorsque vous arrivez au lieu de destination contractuellement convenu : vous remettez le colis de main à main – remise en propres et sans intermédiaire(s) - accompagné de la déclaration de confiance en mentionnant votre nom et prénom.
Le destinataire doit également, à son tour, vérifier si le contenu du colis correspond à ce qui a effectivement et contractuellement été convenu entre l’expéditeur et le transporteur.
Il peut ensuite signer la déclaration de confiance et indiquer qu’il a effectivement bien réceptionné le colis – et éventuellement y formuler des réserves.
Vous recevrez votre indemnité de participation uniquement après remise en mains propres au destinataire du colis.  </div>
        </li>
        <li>
          <div>
            <time>6</time> L’indemnité de participation proposée par le transporteur-voyageur doit être moins chère que les tarifs d’usage en vigueur proposés par les services marchands proposant des expéditions par voie traditionnelle. Cette indemnité demeure cependant libre et doit être établie d’un commun accord entre les deux parties contractantes.</div>
        </li>
      </ul>
    </section>
  </div>
  <div id="exped" class="section2">
    <div class="">
      <section class="intro intro2">
        <div class="container">
          <h2 id="trans" >Expéditeur</h2>
        </div>
      </section>

      <section class="timeline timeline2">
        <ul>
          <li>
            <div>
              <time>1</time> Entrez le lieu de départ et de destination de votre colis, la date d’expédition, le type de votre colis (voir conditions) ainsi que son poids.
Choisissez ensuite parmi les transporteurs-voyageurs proposant un trajet à proximité du lieu d’expédition de votre colis, ce qui maximisera la certitude d’une remise rapide de votre colis et d’une remise en mains propres.
            </div>
          </li>
          <li>
            <div>
              <time>2</time> Consultez le profil qui vous correspond et vérifiez les informations concernant le transporteur-voyageur.
Si vous voulez des précisions sur votre transporteur-voyageur, la plateforme «JibColis» vous offre l’opportunité de rentrer en contact avec lui par téléphone et/ou par émail.
            </div>
          </li>
          <li>
            <div>
              <time>3</time>
              ndiquez sur votre colis le nom, prénom, et le numéro de téléphone de votre récepteur: celui-ci sera mis en contact avec le transporteur-voyageur, une fois la destination est atteinte.</div>
          </li>
          <li>
            <div>
              <time>4</time>La démarche proposée par notre site pour assurer la bonne expédition de votre colis consiste en un suivi d’étapes simples mais néanmoins déterminantes.
Convenez d'un lieu et d'une heure de rendez-vous avec l'expéditeur, puis demandez à voir sa pièce d'identité et assurez-vous que les informations qui y figurent concordent avec celles figurant sur la déclaration de confiance.
Assurez vous de renseigner les bonnes informations concernant le destinataire et vérifiez avec l’expéditeur le contenu du colis.
Signez la déclaration de confiance (imprimable) sur le site et faites-le signer par l’expéditeur, puis remettez votre colis.</div>
          </li>
          <li>
            <div>
              <time>5</time> L’indemnité de participation proposée par le transporteur-voyageur doit être moins chère que les tarifs d’usage en vigueur proposés par les services marchands proposant des expéditions par voie traditionnelle. Cette indemnité demeure cependant libre et doit être établie d’un commun accord entre les deux parties contractantes.</li>
        </ul>
      </section>
    </div>
  </div>
<script type="text/javascript">
(function() {

'use strict';

// define variables
var items = document.querySelectorAll(".timeline li");

// check if an element is in viewport
// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function callbackFunc() {
  for (var i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
  }
}

// listen for events
window.addEventListener("load", callbackFunc);
window.addEventListener("resize", callbackFunc);
window.addEventListener("scroll", callbackFunc);

})();
</script>

<!--begin footer-->
<?php
	include("footer.php");
?>
<!--end footer-->
</div>
</body>
</html>
