<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address.";
    } else {
        // Send the email
        $to = "hafizahmed112@outlook.com";
        $subject = "New Contact Form Submission";
        $body = "Name: " . htmlspecialchars($name) . "\n";
        $body .= "Email: " . htmlspecialchars($email) . "\n";
        $body .= "Message: " . htmlspecialchars($message) . "\n";

        if (mail($to, $subject, $body)) {
            echo "Thank you for contacting us. We will get back to you soon!";
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
?>