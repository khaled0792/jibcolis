<?php
// On démarre la session
session_start ();

//unset($_SESSION['connect']);
// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('location: ../index.php');
?>