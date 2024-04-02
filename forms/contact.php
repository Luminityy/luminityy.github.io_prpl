<?php
// Replace contact.luminityy@gmail.com with your real receiving email address
$receiving_email_address = 'contact.luminityy@gmail.com';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = $receiving_email_address;
$subject = $subject;
$message = "Name: $name\nEmail: $email\n\n$message";
$headers = "From: $email";

mail($to, $subject, $message, $headers);

header('Location: thank_you.html');
exit;
?>
