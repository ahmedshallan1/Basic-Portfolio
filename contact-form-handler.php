<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'example@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
                  "User Message: $message.\n";


$to = "ahmedassemshallan@gmail.com";

$headers = "Form; $email_form \r\n";

$headers .= "Reply-to: $visitor-email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");


?>