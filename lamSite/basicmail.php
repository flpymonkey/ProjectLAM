<?php 

$to = 'bencj96@gmail.com';

$subject = 'This is our test email';

$message = '<h1>Hi there.</h1><p>Thanks for testing!</p>';

$headers = "From: sender@gmail.com";
$headers .= "Content-type: text/html\r\n";
$headers .= "Reply-To: reply@gmail.com";

mail($to, $subject, $message, $headers);

// need to validate and fight spam with captia