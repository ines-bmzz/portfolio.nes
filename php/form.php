<?php
// form.php - Traitement du formulaire contact

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // Validation
    if (!$name || !$email || !$message) {
        $_SESSION['error'] = 'Veuillez remplir tous les champs obligatoires.';
        header('Location: ../contact.php');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Email invalide.';
        header('Location: ../contact.php');
        exit;
    }

    // Envoi email (à adapter avec votre email)
    $to = 'ines.boumaiza04@gmail.com';
    $headers = "From: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $email_subject = $subject ? $subject : 'Message de contact';
    $email_body = "De: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $email_subject, $email_body, $headers)) {
        $_SESSION['success'] = 'Message envoyé avec succès !';
    } else {
        $_SESSION['error'] = 'Erreur lors de l\'envoi du message.';
    }

    header('Location: ../contact.php');
    exit;
}
?>