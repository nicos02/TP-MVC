// Attend que le document soit prêt
$(document).ready(function () {
  // Lorsque le formulaire d'inscription est soumis
  $("#registrationForm").submit(function (e) {
    e.preventDefault();// utilisée pour empêcher la soumission par défaut du formulaire lorsqu'il est soumis.
    var formData = $(this).serialize(); 
    
    // Envoie une requête AJAX
    $.ajax({
      url: "controller/register.php", // URL de la page PHP à appeler
      type: "POST", // Méthode HTTP utilisée pour la requête
      data: formData, // Données du formulaire à envoyer
      dataType: "json", // Type de données attendu en réponse 
      
    // Fonction appelée si la requête est réussie
      success: function (response) {
        if (response.success) {
          // Affiche une alerte pour indiquer que l'inscription a réussi
          alert(response.message); 
          // Redirige vers la page home.php
          window.location.href = "index.php?home";
        } else {
          // Affiche une alerte avec le message d'erreur
          alert(response.message);
        }
      }, 
      
      // Fonction appelée en cas d'erreur lors de la requête AJAX
      error: function (error) {
        // Affiche une alerte avec le message d'erreur
        alert("Erreur lors de la requête AJAX : " + error);
      },
    });
  });
});
