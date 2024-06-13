<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
    echo "All fields are required!";
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create the email content
$email_message = "Name: $name\n";
$email_message .= "Email: $email\n";
$email_message .= "Subject: $subject\n\n";
$email_message .= "Message:\n$message\n";

// Set the recipient email address (change this to your email)
$to = 'divya.kamal241@gmail.com';

// Set the email headers
$headers = "From: $email\n";
$headers .= "Reply-To: $email\n";

// Send the email
$mail_sent = mail($to, $subject, $email_message, $headers);

if($mail_sent) {
    echo "Your message has been sent. Thank you!";
} else {
    echo "Something went wrong, please try again later.";
}
?>
