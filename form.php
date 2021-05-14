<?php
$name = $_Post['name'];
$vistor_email = $_email['email'];
$subject = $_Pos['subject'];
$message = $_Post['message'];

// email from your website
$email_from = 'info@yourwebsite.com';

// 
$email_subject = 'new form subssion';

$email_body = "user name: $name.\n".
                "User Email:$vistor_email.\n".
                "Subject:$subject.\n".
                "User Message:$message.\n";
// 
$to = 'manqsibeko@gmail.com'


$header = "from: $email_from\r\n";
$header .= "Reply-to: $vistor_email\r\n";

mail($to,$email_subject,$email_body,$header);

header("location: about.html");
?> 