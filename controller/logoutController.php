<?php
require_once('model/connexion.php');
session_start();

// Vérifie si le paramètre 'logout' est présent dans la requête GET
if (isset($_GET['logout'])) {
    // Destruction de la session
    session_unset(); // Détruire toutes les variables de session
    session_destroy(); // Détruire la session actuelle
    sleep(1); // Attendre 1 secondes avant la redirection
    header("Location: index.php"); // Rediriger vers la page d'accueil
    exit;
}
?>

