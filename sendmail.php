<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "hachemisebaa@hotmail.fr";
    $subject = "Nouveau message de $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
