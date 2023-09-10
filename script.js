$(document).ready(function() {
  $("#newsletterForm").submit(function(event) {
    event.preventDefault(); // Empêche le formulaire de soumettre normalement

    var email = $("#email").val();

    // Validation de l'e-mail (vous pouvez ajouter une validation plus robuste ici)

    if (isValidEmail(email)) {
      // Envoyez l'e-mail à votre serveur ou effectuez toute autre action nécessaire ici
      $("#message").html("Merci de vous être abonné à notre newsletter!");
    } else {
      $("#message").html("Adresse e-mail invalide. Veuillez réessayer.");
    }
  });

  // Fonction de validation d'e-mail simple
  function isValidEmail(email) {
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
  }
});
