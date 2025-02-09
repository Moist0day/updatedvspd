<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "tshepi.mokgobu@icloud.com, mokgobudigital@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $username\nEmail: $email\nPhone: $phone\nMessage: \n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Message sending failed.');</script>";
    }
}
?>
