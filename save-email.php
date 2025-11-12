<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = fopen("emails.txt", "a");
        fwrite($file, $email . "\n");
        fclose($file);
        echo "Danke! Deine E-Mail wurde gespeichert.";
    } else {
        echo "Bitte gib eine gültige E-Mail-Adresse ein.";
    }
}
?>