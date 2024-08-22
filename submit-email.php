
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // L'adresse email où vous souhaitez recevoir les emails
    $to = "christophe@c-digitalagency.com"; // Votre adresse email
    
    // Sujet de l'email
    $subject = "Nouveau contact de votre site web";

    // Corps de l'email
    $message = "Nom : $name\n";
    $message .= "Email : $email\n";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Envoyer l'email
    if (mail($to, $subject, $message, $headers)) {
        // Redirection ou message de succès
        echo "Merci, votre demande a bien été envoyée.";
    } else {
        // Message d'erreur si l'envoi échoue
        echo "Désolé, une erreur s'est produite. Veuillez réessayer.";
    }
} else {
    echo "Méthode de requête invalide.";
}
?>
