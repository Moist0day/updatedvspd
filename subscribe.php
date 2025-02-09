<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "mokgobudigital@gmail.com"; // Change this to your email
        $subject = "New Newsletter Subscription";
        $message = "New subscriber: " . $email;
        $headers = "From: noreply@mokgobu.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Subscribed successfully!'); window.location.href='index.html';</script>";
        } else {
            echo "<script>alert('Subscription failed.');</script>";
        }
    } else {
        echo "<script>alert('Invalid email format.');</script>";
    }
}
?>
