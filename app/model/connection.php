<?php
//connexion à notre base de donnée
//require 'dbh';
try {//nom du PDO
  $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'user');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
?>
