<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$company_name = $_POST['company_number'];
$number = $_POST['number'];
$formcontent="From: $name \n Message: $message \n Company Name: $company_name \n Phone Number: $number";
$recipient = "msimmo19@lion.lmu.edu";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>