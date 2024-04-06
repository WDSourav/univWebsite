<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$messege = $_POST['messege'];

$email_form='info@yourwebsitein.com';

$email_subject = 'New Form Submission';

$email_body = "user Name: $name.\n".
                "user Email: $visitor_email.\n".
                   "subject:  $subject.\n"
                      "user_messege: $visitor_email.\n"

$to = 'souravoff98@gmail.com';

$headers ="from: $email_from \r\n";

$headers .= "Reply-To : $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers );

header("Location: contact.html");
?>