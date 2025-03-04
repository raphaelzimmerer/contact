<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Empfange die Formulardaten
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $nachricht = htmlspecialchars($_POST['nachricht']);

    // Definiere die E-Mail-Adresse, an die die Nachricht gesendet werden soll
    $empfaenger = "raphael.zimmerer@bemondis.de"; // Ersetze mit deiner tatsächlichen E-Mail-Adresse
    $betreff = "Neue Nachricht von $name";
    $inhalt = "Name: $name\nE-Mail: $email\n\nNachricht:\n$nachricht";

    // Zusätzliche Header
    $headers = "From: $email";

    // Versenden der E-Mail
    if (mail($empfaenger, $betreff, $inhalt, $headers)) {
        echo "Danke, Ihre Nachricht wurde gesendet.";
    } else {
        echo "Es gab ein Problem beim Senden der Nachricht. Bitte versuchen Sie es später noch einmal.";
    }
}
?>
