<?php
session_start();
include ("fonction/db_connexion.php");
if(isset($_SESSION['id']) AND !empty($_SESSION['id'])) {
   if(isset($_GET['id']) AND !empty($_GET['id'])) {
      $id_message = intval($_GET['id']);
      $msg = $bdd->prepare('SELECT * FROM messages WHERE id = ? AND id_destinataire = ?');
      $msg->execute(array($_GET['id'],$_SESSION['id']));
      $msg_nbr = $msg->rowCount();
      $resultat = $msg->fetch();
      $p_exp = $bdd->prepare('SELECT PHONE FROM user WHERE id = ?');
      $p_exp->execute(array($resultat['id_expediteur']));
      $p_exp = $p_exp->fetch();
      $p_exp = $p_exp['PHONE'];
?>
<!DOCTYPE html>
<html>
<head>
  <?php include ("head.php"); ?>
</head>
<body>
    <?php include ("menu2.php");?>
    <div class="container body">   
    <br/><br/>
    <a href="reception.php"><button class="btn btn-success send" >Boîte de réception</button></a>
    <br/>
    <form method="post" action="envoi.php" >
    <input type="hidden" name="id_msg" value="<?php echo $resultat['id']; ?>">
    <br/>
    <a href="envoi.php?r=<?= $p_exp ?>"><button type="submit" class="btn btn-success send" >Répondre</button></a>
    </form><br/>
    <a href="supprimer.php?id=<?= $resultat['id'] ?>"><button class="btn btn-success send" >Supprimer</button></a>
       <a ></a>    <a href=""></a>
   <h3 align="center">Message du "<?= $p_exp ?>"</h3>
   <div align="center">
      <?php if($msg_nbr == 0) { echo "Erreur"; } else { ?>
      
      <br /><br />
      <?= nl2br($resultat['message']) ?><br />
      <?php } ?>
    </div>
  </div>
  <?php include ("footer.php"); ?>
</body>
</html>
<?php
      $lu = $bdd->prepare('UPDATE messages SET lu = 1 WHERE id = ?');
      $lu->execute(array($resultat['id']));
   }
}
?>
