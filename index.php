<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="assets/lib/jquery-3.7.1.min.js"></script>
   <link rel="stylesheet" href="assets/lib/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/styles.css">
   <title>Document</title>
</head>

<body>

<?php  
include 'view/home/header.php'; // Inclut le fichier header.php qui contient le code HTML pour l'en-tête de la page

if (isset($_GET['logout'])) { // Vérifie si la variable GET 'logout' est définie
    include 'controller/logoutController.php'; // Inclut le fichier logoutController.php qui contient le code pour la déconnexion de l'utilisateur
}

if (isset($_GET['home'])) { // Vérifie si la variable GET 'home' est définie
    include 'view/home.php'; // Inclut le fichier home.php 
} else {
    include 'view/home/homepage.php'; // Inclut le fichier homepage.php qui contient le code HTML pour la page d'accueil principale
    include 'view/register/register.php'; // Inclut le fichier register.php qui contient le code HTML pour le formulaire d'inscription
}

include 'view/home/footer.php'; // Inclut le fichier footer.php qui contient le code HTML pour le pied de page de la page
?>

   <script src="assets/js/traitement.js"></script>
   <script src="assets/lib/bootstrap.min.js"></script>
</body>
<!-- Copyright © 2023 Muller Nicolas  -->
</html>