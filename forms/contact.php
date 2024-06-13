<?php
/**
 * Requires the "PHP Email Form" library
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace receiving email address
$receiving_email_address = 'divya.kamal241@gmail.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];<?php
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
$to = 'your-email@example.com';

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

$contact->subject = $_POST['subject'];

// Optional: Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials.
/*
$contact->smtp = array(
  'host' => 'example.com',
  'username' => 'example',
  'password' => 'pass',
  'port' => '587'
);
*/

// Adding messages from form fields
$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

// Attempt to send the email and handle response
$response = $contact->send();

// Check if the email was sent successfully
if ($response) {
    echo 'Message sent!';
} else {
    echo 'Error sending message.';
}
*/
?>
