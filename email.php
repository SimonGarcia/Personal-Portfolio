<?php
    $to = "srgm116@gmail.com"; //Correo destino
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $content = "Name: " . $name . "\nEmail: " . $email . "\nSubject" . $subject . "\Message: " . $message;

    mail($to, $subject, $content);

    header("Location: index.html");

?>