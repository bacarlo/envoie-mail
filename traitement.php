<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Validez l'adresse e-mail (vous pouvez ajouter une validation plus robuste)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Envoyez un e-mail de confirmation
        $to = $email;
        $subject = "Confirmation d'abonnement à la newsletter";
        $message = 'Merci de vous être abonné à notre newsletter!';
        $headers = 'From: bacarlo.bml@gmail.com';

        if (mail($to, $subject, $message, $headers)) {
            echo 'Merci de vous être abonné à notre newsletter! Un e-mail de confirmation a été envoyé à votre adresse.';
        } else {
            echo "Une erreur s'est produite lors de l'envoi de l'e-mail de confirmation. Veuillez réessayer.";
        }
    } else {
        echo 'Adresse e-mail invalide. Veuillez réessayer.';
    }
}
?>
