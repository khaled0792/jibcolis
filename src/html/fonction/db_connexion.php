<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
/*
$dsn = 'mysql:dbname=jibcolis;host=localhost';
$user = 'root';
$password = '';
*/

//connexion en ligne
$dsn = 'mysql:dbname=id5804543_jibcolis;host=localhost';
$user = 'root';
$password = '';

 try {
    $bdd = new PDO($dsn, $user, $password);
}   
    catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>