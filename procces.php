<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and capture form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['text']));

    // Recipient email address (your email here)
    $to = "your-email@example.com";

    // Email subject
    $subject = "New Contact Form Message";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$text";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message was sent successfully!";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
}
?>
