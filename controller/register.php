<?php
require_once('../model/connexion.php');

// Démarrer une session pour gérer les sessions utilisateur
session_start();

// Vérifier si la requête HTTP est de type POST (envoi de formulaire)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $username = $_POST['username']; // Récupère le nom d'utilisateur depuis le formulaire
    $email = $_POST['email']; // Récupère l'adresse e-mail depuis le formulaire
    $password = $_POST['password']; // Récupère le mot de passe depuis le formulaire

    // Vérifier si le nom d'utilisateur existe déjà dans la base de données
    $request = $bdd->prepare("SELECT * FROM user WHERE username = :username"); // Prépare une requête SQL pour vérifier si le nom d'utilisateur existe déjà
    $request->execute([':username' => $username]); // Exécute la requête avec le nom d'utilisateur récupéré
    $user = $request->fetch(); // Récupère la ligne correspondante de la base de données

    // Si un utilisateur avec le même nom d'utilisateur est trouvé, renvoyer une réponse d'échec
    if ($user) {
        $response = array('success' => false, 'message' => 'Le nom d\'utilisateur existe déjà.'); // Crée une réponse JSON indiquant que l'inscription a échoué
        echo json_encode($response); // Envoie la réponse JSON au client
        exit; // Termine l'exécution du script
    }

    // Hasher le mot de passe pour des raisons de sécurité
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Utilise la fonction password_hash() pour sécuriser le mot de passe

    // Préparation et exécution de la requête SQL INSERT pour ajouter l'utilisateur à la base de données
    $request = $bdd->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)"); // Prépare une requête SQL pour insérer un nouvel utilisateur
    $request->execute([
        ':username' => $username, // Lie le nom d'utilisateur
        ':email' => $email, // Lie l'adresse e-mail
        ':password' => $hashedPassword // Lie le mot de passe haché
    ]);

    // Vérifier si l'insertion a réussi en vérifiant si une ligne a été insérée
    if ($request->rowCount() > 0) {
        // Si l'inscription a réussi, enregistrer l'adresse e-mail de l'utilisateur dans la session
        $_SESSION['email'] = $email; // Stocke l'adresse e-mail dans la session de l'utilisateur
        $response = array('success' => true, 'message' => 'Inscription réussie!'); // Crée une réponse JSON indiquant que l'inscription a réussi
        echo json_encode($response); // Envoie la réponse JSON au client
    } else {
        // Si l'inscription a échoué, renvoyer une réponse d'échec
        $response = array('success' => false, 'message' => 'Erreur lors de l\'inscription.'); // Crée une réponse JSON indiquant une erreur d'inscription
        echo json_encode($response); // Envoie la réponse JSON au client
    }
}
?>
