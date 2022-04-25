<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
// $massage = $_POST['massage'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$message = $_POST['message'];


$email_from = 'akash.odms@gmail.com';//

$Bcc = 'akash.odms@gmail.com';//text my email id

$email_subject = "New enquiry";

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"phone: $phone.\n".
"address: $address.\n".
"message: $message.\n";


$to = "akash.odms@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Bcc: $Bcc \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:thankyou.php");

?>
