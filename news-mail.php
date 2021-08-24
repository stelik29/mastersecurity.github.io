<?php
$email = $_POST['email'];

$formcontent="Email: $email";
$recipient = "stelik29@yahoo.com";
$subject = "Newslater Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
require_once "thank-you.html";
?>
