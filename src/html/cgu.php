<?php
session_start();

/*function seConnecterGOOGLE()
{
    include "gpCallback.php"; 
}

if (isset($_GET['connecte'])) {
    if (isset($_SESSION['fb_access_token'])) {
        unset($_SESSION['fb_access_token']);
    }
    seConnecterGOOGLE();
}

if (isset($_GET['decc'])) {
    unset($_SESSION['token']);
    unset($_SESSION['fb_access_token']);
    header("location:index.php");
    exit;
}*/

?>

<!DOCTYPE html>
<!--INCLURE DE LA-->
<html>
<head>
    <?php include("head.php"); ?>
    <!--<link rel="stylesheet" href="../css/standard_style.css">
    <link rel="stylesheet" href="../css/style.css">-->
    
    </head>

<!--**********************************************************************************************************-->
<!--corp de la page-->
<body>
<!--inclure le menu-->

<?php
    include "box.php";
        if ($_SESSION['connect'] == 0)
                        include "menu.php";        
                    else
                        include "menu2.php";        
    ?>
<!--fin du menu-->
<div class="container body">
<!-- banner -->
	<div class="banner-bottom">
		<div class="container">
			<h4>Préambule</h4>
			<p class="quia">Les conditions et différentes stipulations
				contenues dans ce Préambule font partie intégrante des conditions
				générales d’utilisation du site JibColis.</p>
			<p class="quia">
				<strong>A. Exonération de responsabilité du site</strong><br>
				Le site « JibColis » se décharge de toute responsabilité concernant
				l’utilisation de sa plateforme gratuite pour le transport de colis.
				La responsabilité du site ne peut en aucun cas être retenue, pour
				quelconque raison que ce soit, relativement, d’une part, à la mise
				en relation entre l’expéditeur et le transporteur-voyageur, et
				d’autre part, entre le transporteur-voyageur et le destinataire du
				colis.<br> Le site « JibColis » décline toute responsabilité
				quant à la nature et/ou relativement au contenu illicite du colis
				dont il est question dans la Déclaration de confiance.<br> Le
				site « JibColis » ne saurait également être tenu pour responsable de
				colis non livrés ou livrés en retard et/ou endommagés. Il est
				également exonéré de toute responsabilité civile et pénale pouvant
				naître d’un différend causé directement ou indirectement par le fait
				des parties contractantes : le site n’est pas responsable des
				agissements de l’expéditeur, du transporteur-voyageur et du
				destinataire et des faits d’une quelconque nature qui seraient
				amenés à naitre entre eux ou entre l’une de ces trois entités et le
				site JibColis.<br> Le site JibColis n’est pas responsable de la
				perte, de la détérioration ou du vol de colis qui pourrait naitre à
				l’occasion de l’utilisation du site et de la mise en relation entre
				les différentes parties prenantes au transport.<br> Le site
				JibColis ne peut d’aucune façon, de manière directe ou indirecte,
				être tenu pour responsable auprès des services des douanes des
				divers Etats relativement aux colis transportés.<br> Nous
				conseillons fortement à tous les expéditeurs de bien s’assurer que
				la nature de l’objet à envoyer ne figure pas dans la liste des
				objets interdits et au transporteur-voyageur de vérifier
				scrupuleusement le contenus du colis. <br> <br> <strong>B.
					Les articles interdits et réglementés</strong><br> Les utilisateurs du
				site déclarent sur l’honneur s’interdire, de manière directe ou
				indirecte, personnellement ou par personne interposée, l’envoi, le
				transport et la réception de colis dont la nature ou le contenu
				s’avérerait illicite et/ou illégale.<br> Voici une liste non
				exhaustive de quelques objets dont l’envoi et le transport sont
				interdits : <br> <br>
			</p>
			<div
				style="line-height: 1.8em; margin-left: 2em; font-size: 14px;">
				<ul>
					<li>Armes à feu (dont répliques et armes à feu
						désactivées)-répliques ou jouets ayant l’apparence d’une arme
						authentique,</li>
					<li>Munitions (tous calibres, toutes quantités),</li>
					<li>Tout type d’explosif : obus (dont souvenirs et reliques
						historiques), détonateurs, cartouches de fumée, grenades, mines,
						explosifs militaires, répliques de bombes, feux d’artifice, fusées
						éclairantes, articles de pyrotechnie,</li>
					<li>Articles contenant des substances incapacitantes comme les
						armes à gaz,pulvérisateurs de gaz lacrymogène, gaz CS, phosphore,
						acide et autres produits chimiques dangereux pouvant être utilisés
						pour mutiler ou rendre infirme,</li>
					<li>Quantités importantes de substances inflammables (par
						exemple : essence, alcool à brûler, diluants pour peinture),</li>
					<li>Batterie à électrolyte ou au lithium (consulter la <a
						target="_blanck"
						href="http://www.ma-valise-voyage.fr/wp-content/uploads/2014/12/restriction-batteries-avion.pdf">réglementation
							pour batterie</a> > 160 Wh), Cartouches d'imprimante,
					</li>
					<li>Feux d'artifice, pétards, fusées de détresse, briques
						allume feu, gaz lacrymogène,</li>
					<li>Toute bouteille de gaz, et bouteille de plongée à oxygène,</li>
					<li>Laque industrielle, vernis ou peinture (extrêmement
						inflammable),</li>
					<li>Engrais, pesticides et désherbants,</li>
					<li>Tout liquide décapant, eau de javel et chlore, ainsi que
						les carburants, solvants, acétone et diluants,</li>
					<li>Tous les couteaux à cran d’arrêt, couteaux à gravité et
						poignards,</li>
					<li>Les canifs avec une lame dépassant 75 mm sont également
						interdits (les petits canifs ayant une lame inférieure à 75 mm
						représentent une exception et sont autorisés),</li>
					<li>Tout autre article destiné, adapté ou ayant pour objectif
						d'être utilisé comme une arme offensive</li>
					<li>Alcool en quantité excédant notre réglementation,</li>
					<li>Les stupéfiants et les matières psychotropes,</li>
					<li>Les produits de contrefaçon,</li>
					<li>Les animaux vivants ou morts,</li>
					<li>Les matières biologiques périssables, infectieuses ou non
						infectieuses,</li>
					<li>Les organes et dépouilles humaines,</li>
					<li>Les objets obscènes ou immoraux,</li>
				</ul>
				<br>
				<p>Pour le transport par voie aérienne, est également interdit :</p>
				<br>
				<ul>

					<li>Tout produit liquide, parfum, gel douche, shampoing,
						lotion, dentifrice au-delà d'un flacon de 100ml chacun,</li>
					<li>Aérosol et cosmétiques, dont la capacité dépasserait 100
						ml par flacon,</li>
					<li>Les sommes d’argent dépassant un certain montant fixé par
						la loi.</li>
				</ul>
			</div>
			<p class="quia">Cette liste est non exhaustive et nous vous
				invitons à consulter la liste sur le site des aéroports ou des gares
				de départ. Nous vous invitons à consulter la liste sur le site des
				aéroports ou des gares de départ.</p>
			<p class="quia">Nous vous rappelons qu’embarquer avec soi des
				produits interdits en cabine ou en soute revient à enfreindre les
				codes de l'aviation civile et vous expose à des poursuites et
				sanctions en cas de problèmes dus à votre bagage.</p>
			<p class="quia">Dans le cas où vous souhaiteriez expédier
				certaines de ces marchandises, vous devrez recourir à d’autres
				moyens de transports sans l’utilisation de notre plateforme. Vous
				devez également et obligatoirement vous rapprocher de
				l’administration des douanes de votre pays de départ mais aussi du
				pays destinataires de l’envoi.</p>
			<br> <br>
			<p class="quia text-center text-uppercase">
				<strong>A. Conditions utilisateur </strong>
			</p>
			<br>
			<p class="quia">
				L'utilisateur doit se conformer à toutes les restrictions et aux
				lois nationales et internationales applicables.<br>
				L’utilisateur ne pas proposer des marchandises dangereuses ou
				illicites. <br> L'utilisateur doit se conformer aux droits des
				tiers et aux conditions générales d’utilisation du site. <br>
				L'utilisateur ne doit pas publier de contenus trompeurs,
				diffamatoires ou calomnieux sur le site. <br> L'utilisateur ne
				doit pas diffuser de spams, de virus ou tout autre code malveillant
				qui pourrait endommager le site, ainsi que les intérêts ou
				propriétés des utilisateurs.<br> Il est interdit d'utiliser les
				documents d'identification ou des informations financières sensibles
				de toute autre personne sur le site. <br> Aucun organisme,
				affiliation, association ou lien n’existe entre « JibColis » et ses
				utilisateurs. <br> <br> « JibColis » se réserve le droit
				de supprimer toute information ou contenu malveillant qui serait
				contraire aux valeurs du site. <br> <br>
			</p>
			<br>
			<h4>CONDITIONS GENERALES D’UTILISATION</h4>
			<p class="quia text-uppercase">
				<strong> I – Conditions générales d'utilisation</strong>
			</p>
			<p class="quia text-uppercase">
				<em> I.1 Champ d'application et définitions</em>
			</p>
			<br> <br>
			<p class="quia">
				Les présentes conditions générales s'appliquent aux services
				proposés par le site <a href="www.jibcolis.com">www.jibcolis.com</a>
				.<br> L'hébergement du site est assuré par : <br> La
				société : JavaPipe LLC <br> Adresse : 12180 South 300 East #502
				<br> Draper, Utah 84020<br> Pays : Etats-Unis d’Amérique
			</p>

			<p class="quia">
				Dans les présentes, <br> <strong>« Site »</strong> : désigne le
				site www.jibcolis.com<br> <strong>« Administrateur»</strong> :
				personne en charge de l’édition et du fonctionnement du Site.<br>
				<strong>« Service »</strong> : désigne tout service rendu au moyen
				du Site à un Membre, étant précisé que l’Administrateur n'est jamais
				partie à un contrat de d’envoi de colis. <br> <strong>«
					Compte Utilisateur »</strong> : désigne le compte qui doit être créé pour
				pouvoir devenir Membre et accéder aux services proposés par le Site.
				<br> <strong>« Expéditeur »</strong> : désigne la personne qui
				charge un <strong>« Transporteur-voyageur »</strong> de lui
				transporter un colis et de le remettre à un <strong>«
					Destinataire »</strong>.<br> « <strong>Transporteur-voyageur »</strong>
				: désigne la personne qui voyage et qui s’engage à transporter le
				colis d’un <strong>« Expéditeur »</strong> et à le remettre à un <strong>«
					Destinataire »</strong>.<br> <strong>« Le Destinataire »</strong> :
				désigne la personne en charge de la réception du colis expédié pas <strong>
					« l’Expéditeur »</strong> et acheminé par le <strong>«
					Transporteur-voyageur »</strong>.<br> <strong>« Voyage »</strong> :
				désigne l'opération pour laquelle un voyageur a accepté de
				transporter le colis d’un expéditeur en contrepartie de la
				Participation aux Frais fixée à l'avance et à une date définie. <br>
				<strong>« Annonce »</strong>: désigne toute publication d’un voyage,
				visant à proposer un service de co-valisage. <br> <strong>«
					Participation aux Frais »</strong> : Somme d'argent demandée par le Voyageur
				précisée et visible dans l’annonce et acceptée par le client pour le
				Voyage au titre de sa participation aux frais du voyage. Cette
				participation est fixée par le Voyageur sous sa seule responsabilité
				et doit être strictement limitée à l’amortissement du prix du
				transport et le Voyageur ne peut en aucun cas tirer un quelconque
				bénéfice de cette opération. A défaut, le Voyageur supportera seul
				les risques de requalification de sa prestation non autorisée par le
				site.<br> <strong>« Membre »</strong> : désigne indistinctement
				le Voyageur ou le Client ayant accepté les présentes Conditions
				Générales d'Utilisation et utilisant le site en tant que Voyageur ou
				Expéditeur de colis. <br> <strong>« Compte Utilisateur
					»</strong> : désigne le compte qui doit être créé pour pouvoir devenir
				Membre et accéder aux services proposés par le Site. <br> <strong>«
					CGU »</strong> : désigne les présentes Conditions Générales d'Utilisation
				comprenant la Déclaration de Confiance.
			</p>
			<br> <br>

			<p class="quia text-uppercase">
				<em> I.2 Acceptation en ligne des Conditions Générales
					d'Utilisation</em>
			</p>
			<br> <br>
			<p class="quia">
				L'utilisation du Site est subordonnée à l'acceptation des présentes
				CGU. Au moment de la création du Compte Utilisateur, les Membres
				doivent cocher la case « J'accepte les Conditions Générales
				d'utilisation du site ».<br> Seule l'acceptation de ces CGU
				permet aux Membres d'accéder aux services proposés par le Site.
				L'acceptation des présentes CGU est entière et forme un tout
				indivisible, et les Membres ne peuvent choisir de voir appliquer une
				partie des CGU seulement ou encore formuler des réserves.<br>
				En acceptant les CGU, le Membre accepte notamment les dispositions
				contenues dans le Déclaration de confiance ainsi que l'article VII
				des CGU concernant le « Traitement des données personnelles des
				utilisateurs ». En cas de manquement à l'une des obligations prévues
				par les présentes, l’administrateur du site se réserve la
				possibilité de supprimer le Compte Utilisateur concerné. <br>
			</p>
			<br>
			<p class="quia text-uppercase">
				<em> I.3 Modification des Conditions Générales d'Utilisation </em>
			</p>
			<br> <br>
			<p class="quia">
				L’Administrateur se réserve le droit de modifier à tout moment les
				CGU, les fonctionnalités offertes sur le site ou les règles de
				fonctionnement du Service. La modification prendra effet
				immédiatement dès la mise en ligne des CGU que tout utilisateur
				reconnait avoir préalablement consultées.<br>La proposition
				d’un voyage par le biais du site est totalement gratuite. La
				consultation d’une annonce proposant le service et la mise en
				relation avec le Transporteur-voyageur en est de même.<br>
			</p>
			<br>
			<p class="quia text-uppercase">
				<strong> II – UTILISATION DU SERVICE</strong>
			</p>
			<p class="quia text-uppercase">
				<em> II.1 Compte Utilisateur </em>
			</p>
			<br> <br>
			<p class="quia">
				Pour s'inscrire et bénéficier de la possibilité de publier ou
				consulter une annonce sur le site, chaque Membre doit au préalable
				créer un Compte Utilisateur, en fournissant des données personnelles
				le concernant, indispensables au bon fonctionnement du service de
				mise en relation de personnes (notamment civilité, nom, prénom,
				numéro de téléphone et adresse e-mail valides). Les Membres
				certifient être âgés de plus de 18 ans au moment de leur
				inscription. L’Administrateur ne pourra en aucun cas être tenue
				responsable des informations qui pourraient être erronées ou
				frauduleuses communiquées par les Membres.<br> Le Membre
				s'engage à ne pas créer ou utiliser d'autres comptes que celui
				initialement créé, que ce soit sous sa propre identité ou celle de
				tiers. Toute dérogation à cette règle devra faire l'objet d'une
				demande explicite de la part du Membre et d'une autorisation
				expresse et spécifique de L’Administrateur. Le fait de créer ou
				utiliser de nouveaux comptes sous sa propre identité ou celle de
				tiers sans avoir demandé et obtenu l'autorisation de
				L’administrateur pourra entraîner la suspension immédiate des
				comptes du Membre et de tous les services associés.<br>
			</p>
			<br> <br>
			<p class="quia text-uppercase">
				<em> II.2 Utilisation du Service à titre non professionnel et
					non commercial pour les particuliers </em>
			</p>
			<br> <br>
			<p class="quia">
				Les particuliers n'étant pas affiliés à une entreprise, encadrée par
				la législation en vigueur du pays concerné, et spécialisée dans le
				transport et la distribution de colis, s'engagent à n'utiliser le
				site que pour la mise en relation, entre voyageur et expéditeur de
				colis, plis, document pour les mêmes destinations. L’administrateur
				ne pourra en aucun cas être tenue responsable d'une utilisation à
				titre professionnel ou commercial du Site pour ces particuliers. <br>
				Pourra être considérée comme activité professionnelle toute activité
				sur le site qui, par la nature des services de co-valisage proposés,
				leur fréquence ou le nombre de colis transportés, entrainerait la
				réalisation d’actes de commerce pour le Voyageur La Participation
				aux Frais demandée par le Transporteur-voyageur à l’Expéditeur ne
				doit en effet rester qu'une participation aux frais de voyage, et le
				Transporteur-voyageur ne doit en aucun cas réaliser de bénéfice.
				Ainsi, le Transporteur-voyageur s'engage à demander à l’Expéditeur
				une somme forfaitaire ou au kilo qui ne lui fasse réaliser aucun
				bénéfice par rapport au prix d’achat de son ticket de transport.
				L’activité du Site se limitant à une mise en relation de
				particuliers proposant un service de co-valisage, le Voyageur ne
				peut être considéré comme exerçant une activité de transport de
				colis. Le Site constitue en effet une simple plateforme de mise en
				relation, et à aucun moment, l’administrateur n’interfère dans les
				envois effectués, les destinations, les horaires. Le
				Transporteur-voyageur ne peut s’engager à assurer les obligations
				qui sont celles d’un organisme d’envois de colis Tout envoi effectué
				doit préalablement faire l’objet d’un accord préalable sur le Site.
				L’Expéditeur doit se rendre à la destination convenue, et informer
				la personne qui doit recevoir le colis dans le délai de 24 heures.<br>
				L’administrateur du site se réserve le droit d'exclure sans préavis
				tout Membre qui méconnaitrait notamment les présentes dispositions.
				<br> Il est rappelé que L’Administrateur est un tiers à la
				relation entre les Membres et ne saurait être responsable d’une
				obligation de la bonne exécution de la prestation entre
				l’Expéditeur, le Voyageur et le Réceptionnaire.
			</p>
			<br> <br>
			<p class="quia text-uppercase">
				<em>II.3 Le Service d’Expédition </em>
			</p>
			<br> <br>
			<p class="quia">Le site propose un service gratuit d’expédition
				de colis par lequel L’Expéditeur souhaitant effectuer un envoi
				contacte le Transporteur-voyageur pour fixer un lieu de rencontre
				pour la remise du colis et fixer les conditions d’envoi.
				L’Expéditeur et le Transporteur-voyageur assument alors entièrement
				les risques concernant notamment les annulations de dernière minute,
				le contenu du colis à transporter, la perte du colis, le
				non-paiement de la Participation aux Frais.</p>
			<br> <br>
			<p class="quia text-uppercase">
				<em>II.4 Engagement du Transporteur-voyageur </em>
			</p>
			<br> <br>
			<p class="quia">Le Transporteur-voyageur s'engage à être en
				possession d'un passeport valide à son nom et d’un ticket de
				transport en conformité avec les informations fournies dans
				l’annonce. Il s’engage à fournir les informations justifiant son
				identité et prouvant le voyage pour la destination proposée dans
				notre site, sur demande du Transporteur-voyageur. Il s’engage aussi
				à dédommager en nature et en équivalent les éléments composant le
				colis ou le montant équivalent en valeur du colis en cas de perte.</p>

			<br> <br>
			<p class="quia text-uppercase">
				<em>II.5 Engagement de l’Expéditeur </em>
			</p>
			<br> <br>
			<p class="quia">L’Expéditeur s'engage à présenter le contenu de
				son colis au Transporteur-voyageur à ne donner que des objets
				respectant la réglementation nationale et internationale en matière
				d’objets prohibés et qui ne compromettront pas la sécurité du
				Transporteur-voyageur et des tiers. Il s’engage aussi à justifier
				son identité auprès du Transporteur-voyageur et de fournir un
				document matérialisant le contenu intégral de son colis, son nom et
				sa signature, justifiant qu’il est bel et bien propriétaire du colis
				et des éléments le composant et emportant par la même la décharge de
				responsabilité du Transporteur-voyageur lors du passage en douanes.</p>

			<br>
			<p class="quia text-uppercase">
				<strong> III - Exonération de Responsabilité</strong>
			</p>
			<br> <br>
			<p class="quia">
				Le Site se décharge de toute responsabilité concernant l’utilisation
				de sa plateforme gratuite pour le transport de colis. La
				responsabilité du site ne peut en aucun cas être retenue, pour
				quelconque raison que ce soit, relativement, d’une part, à la mise
				en relation entre l’expéditeur et le voyageur, et d’autre part,
				entre le transporteur et le destinataire du colis.<br> Le Site
				décline toute responsabilité quant à la nature et relativement au
				contenu illicite(s) du colis dont il est question dans la
				Déclaration de confiance.<br> Le Site ne saurait également être
				tenu pour responsable de colis non livrés ou livrés en retard et/ou
				endommagés.<br> Nous conseillons fortement à tous les
				expéditeurs de bien s’assurer que la nature de l’objet à envoyer ne
				figure pas dans la liste des objets interdits et aux
				transporteurs-voyageurs de vérifier scrupuleusement les contenus des
				colis. <br> Le service résultant exclusivement de l'accord
				intervenu entre l’Expéditeur et le Transporteur-voyageur, les
				utilisateurs du service agissent sous leur seule et entière
				responsabilité. A ce titre, la réalisation effective du service de
				co-valisage proposé par le Transporteur-voyageur et accepté par
				l’Expéditeur ne saurait entrainer de responsabilité imputable à
				l’administrateur, sur quelque fondement que ce soit, le service
				proposé par le site étant un service d'intermédiation gratuit. <br>
				La responsabilité de l’administrateur ne peut notamment pas être
				engagée en raison d'un sinistre qui serait survenu pour des raisons
				telles que : <br> <br>
			</p>
			<div
				style="line-height: 1.8em; margin-left: 2em; font-size: 14px;">
				<ul>
					<li>la communication par le Voyageur d'informations erronées
						concernant son voyage et ses modalités ;</li>
					<li>l'annulation du voyage par le Transporteur-voyageur ou
						l’annulation de l’envoi du colis par l’Expéditeur ;</li>
					<li>le comportement frauduleux ou la faute du
						Transporteur-voyageur ou de l’Expéditeur au moment de la remise du
						colis par le client, pendant l’acheminement du colis durant le
						voyage, ou après la récupération du colis par le Destinataire.</li>
				</ul>
			</div>
			<p class="quia">
				L’Administrateur s'efforce d'assurer la disponibilité du site et du
				service 24 heures sur 24, et 7 jours sur 7. Cependant, il peut
				arriver que l'accès au site ou au service soit interrompu dans le
				cadre d'opérations de maintenance, de mises à niveau matérielle ou
				logicielle, de réparations d'urgence du site, ou par suite de
				circonstances indépendantes de la volonté de L’administrateur (comme
				par exemple, défaillance des liaisons et équipements de
				télécommunications). L’Administrateur s'engage à prendre toutes les
				mesures raisonnables pour limiter ces perturbations, pour autant
				qu'elles lui soient imputables.<br> Les Membres reconnaissent
				et acceptent que L’administrateur n'assume envers eux aucune
				responsabilité pour toute indisponibilité, suspension ou
				interruption du site ou du service et ne peut être tenue responsable
				des préjudices directs et indirects de toute nature résultant de ce
				fait.<br>Dans tous les cas, et sans préjudice de ce qui vient
				d'être exposé ci-dessus et dans les autres clauses concernant
				l'absence de responsabilité de l’Administrateur, toute cause de
				responsabilité qui pourrait être retenue à l'encontre de
				l’Administrateur ne pourra donner lieu à quelconque versement de
				dommages et intérêts.
			</p>
			<br>
			<p class="quia text-uppercase">
				<strong> IV- Interruption et suspension d'accès au service
					et/ou au site</strong>
			</p>
			<br> <br>
			<p class="quia">En cas de non respect de votre part de tout ou
				partie des CGU, vous reconnaissez et acceptez que l’Administrateur
				peut à tout moment, sans notification préalable, interrompre ou
				suspendre, de manière temporaire ou définitive, tout ou partie du
				Service ou votre accès au site (y compris notamment votre Compte
				Utilisateur) en cas de non-respect des CGU ou pour toute raison
				objective.</p>
			<br>
			<p class="quia text-uppercase">
				<strong> V - Traitement des données personnelles des
					utilisateurs et contenu du site</strong>
			</p>
			<p class="quia text-uppercase">
				<em> V.1 Dispositions générales</em>
			</p>
			<br> <br>
			<p class="quia">
				Le responsable du traitement des données vous concernant est
				l’Administrateur du site. Conformément aux dispositions de la norme
				simplifiée n°48, ont seuls accès à vos données personnelles les
				développeurs, dont la tâche consiste à faire fonctionner le site ou
				à rendre le service.<br>Les données indiquées comme
				obligatoires dans le formulaire permettant de devenir utilisateur du
				site et du service nécessitent une réponse exacte de votre part.
				Tout défaut de réponse ou toute réponse jugée anormale par
				L’administrateur est susceptible d'entrainer le refus de celui ci de
				prendre en compte votre demande d'inscription au service.<br>
				Les données collectées par L’administrateur dans le cadre des
				services rendus sur le Site sont traitées conformément aux
				dispositions de la norme simplifiée n°48 et de la loi « Informatique
				et Libertés » du 6 août 2004.
			</p>
			<br>
			<p class="quia text-uppercase">
				<em> V.2 Transmission de vos données personnelles à des tiers</em>
			</p>
			<br> <br>
			<p class="quia">
				Conformément aux dispositions de la norme simplifiée n°48,
				L’administrateur se réserve le droit de transmettre tout ou partie
				des données personnelles concernant les Membres dans le strict
				respect de la norme simplifiée n°48 et de la loi « Informatique et
				Libertés » du 6 Août 2004. Tout usage de données personnelles autre
				que celui indiqué ci-dessus devra faire l'objet d'un consentement
				individuel, préalable et explicite de la part des Membres.<br>Conformément
				à la loi n°78-17 du 6 janvier 1978, l’Administrateur recueillera
				l'accord du Membre pour toute transmission de ses données à des
				partenaires commerciaux pour des opérations de marketing direct au
				moyen d'une case à cocher.
			</p>
			<br>
			<p class="quia text-uppercase">
				<em> V.3 Droit d'accès, de rectification et d'opposition</em>
			</p>
			<br> <br>
			<p class="quia">
				Conformément à la loi n°78-17 du 6 janvier 1978, vous disposez d'un
				droit d'accès et de rectification sur les données personnelles vous
				concernant, en vous adressant à l’Administrateur du Site, sauf pour
				certaines données personnelles qu'il vous appartient seul de
				modifier et de mettre à jour, ainsi qu'il est dit à l'article VII.4
				« Mise à jour des données personnelles ».<br>Conformément à la
				loi n°78-17 du 6 janvier 1978, vous disposez du droit de vous
				opposer sans frais et gratuitement, à ce que les données
				personnelles vous concernant soient utilisées à des fins de
				prospection, notamment commerciale, par l’Administrateur ou par ses
				partenaires commerciaux. Si votre droit d'opposition est exercé pour
				ce motif directement auprès de L’Administrateur, cette dernière
				s'engage à répercuter votre opposition auprès de ses partenaires
				contractuels auxquels elle aurait éventuellement transmis vos
				données personnelles.<br>Conformément à la loi n°78-17 du 6
				janvier 1978, l’Administrateur se réserve le droit de transmettre
				les données personnelles vous concernant, soit pour respecter une
				obligation légale, soit en application d'une décision judiciaire,
				administrative, ou d'une autorité administrative indépendante (comme
				par exemple la Commission Nationale de l'Informatique et des
				Libertés).
			</p>
			<br>
			<p class="quia text-uppercase">
				<em> V.4 Mise à jour des données personnelles</em>
			</p>
			<br> <br>
			<p class="quia">Vous vous engagez à assurer, en tant que de
				besoin, la mise à jour des données personnelles vous concernant.
				Vous vous engagez en outre à ce que les données personnelles vous
				concernant soient exactes, complètes et non équivoques. Vous pouvez
				à tout moment accéder, en utilisant sur le site votre mot de passe
				et votre login, à votre Compte Utilisateur contenant l'ensemble des
				données personnelles que vous avez renseignées lors de votre
				inscription.</p>
			<br>
			<p class="quia text-uppercase">
				<em> V.5 Sécurité des données personnelles</em>
			</p>
			<br> <br>
			<p class="quia">Conformément à la loi n°78-17 du 6 janvier 1978,
				l’Administrateur s'engage à prendre toute précaution utile, au
				regard de la nature des données et des risques présentés par le
				traitement, pour préserver la sécurité des données personnelles vous
				concernant et, notamment, empêcher que vos données personnelles ne
				soient déformées, endommagées, ou que des tiers non autorisés y
				aient accès.</p>
			<br>
			<p class="quia text-uppercase">
				<em> V.6 Propriété intellectuelle</em>
			</p>
			<br> <br>
			<p class="quia">
				Le site www.jibcolis.com est la propriété de son créateur. La marque
				JibColis est uen marque déposée auprès de l’Inpi. Toute reproduction
				même partielle est subordonnée à l'autorisation préalable et écrite
				de son créateur.<br>Le visiteur du Site s'engage à ne
				reproduire aucun des éléments du Site. Toute utilisation contraire
				de tout ou partie du Site ou de l'un quelconque de ses éléments
				constituerait une contrefaçon susceptible d'entraîner des poursuites
				civiles et/ou pénales et d'exposer le visiteur contrevenant aux
				peines rappelées.
			</p>
			<br>
			<p class="quia text-uppercase">
				<em> V.7 Contenu du site saisi par les Membres</em>
			</p>
			<br> <br>
			<p class="quia">L’Administrateur n'est pas responsable du contenu
				saisi sur le Site par les Membres. Cependant dès qu'il aura été
				porté à la connaissance de l’Administrateur qu'un contenu porterait
				atteinte aux droits de tiers, l’Administrateur mettra tout en œuvre,
				dans le cadre de son obligation de moyens, pour supprimer sans délai
				du Site le contenu litigieux.</p>
			<br>
			<p class="quia text-uppercase">
				<em> V.8 Sites partenaires</em>
			</p>
			<br> <br>
			<p class="quia">
				L’Administrateur se réserve le droit de reproduire toute information
				figurant sur le Site ou sur des sites partenaires.<br>En
				particulier, les annonces publiées sur l'un des sites édités ou
				coédités par l’administrateur peuvent être reproduites sur d'autres
				sites édités ou coédités par l’administrateur ou des tiers.
			</p>
		</div>
	</div>
</div>
<!-- begin footer-->
<?php
	include("footer.php");
?>
<!--end footer-->
</body>
</html>
