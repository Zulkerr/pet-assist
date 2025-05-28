<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $location = htmlspecialchars($_POST["location"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "nael.zulkar@gmail.com";
    $subject = "Neue Tierheim-Registrierung von $name";
    $body = "Name: $name\nE-Mail: $email\nOrt: $location\n\nNachricht:\n$message";

    $headers = "From: info@deine-domain.de";

    if(mail($to, $subject, $body, $headers)){
        echo "OK";
    } else {
        echo "Fehler beim Senden.";
    }
}
?>
