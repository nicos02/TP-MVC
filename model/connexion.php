<?php
// CONNEXION MYSQL

$servername = "localhost"; // Nom du serveur de base de données
$username = "root"; // Nom d'utilisateur pour se connecter à la base de données
$password = ""; // Mot de passe pour se connecter à la base de données

try {
    $bdd = new PDO("mysql:host=$servername;dbname=blogsjt", $username, $password);
    // Création d'un nouvel objet PDO pour établir une connexion à la base de données
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Configuration de PDO pour qu'il lance une exception en cas d'erreur

} catch (PDOException $e) {
    echo "Erreur :".$e->getMessage();
    // Gestion des erreurs : Affichage du message d'erreur de l'exception PDOException
}
?>