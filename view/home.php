<?php
include 'controller/logoutController.php';
?>

   <main class="moncompte">
      <?php if (isset($_SESSION['email'])) { ?>
         <h1>Bienvenue <?php echo $_SESSION['email']; ?>!</h1>
         <form method="get">
            <button type="submit" name="logout" class="btn btn-danger">Déconnexion</button>
         </form>
      <?php } else { ?>
         <h1>Vous êtes déconnecté.</h1>
         <a href="index.php">Retour a l'accueil</a>
      <?php } ?>
   </main>