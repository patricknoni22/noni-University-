<?php
$name = $_POST['name']
$visitor_email = $_POST['email']

$subject = $_POST['subject']

$message= $_POST['message']


$email_from = 'info@yourwebsite.com';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n".
                " User Name: $visitor_email.\n".
                " Subject: $subject.\n".
                " User Message: $message.\n";


$to = 'okoloigwepatrick@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "REPLY-TO: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers  )

header("Location: contact.html")

?>