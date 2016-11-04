<?php 
$data = $_POST;
$name = $data['name'];
$email = $data['email'];
$message = $data['message']."\n".$name;

$to      = 'newbies@rst.com.pl';
$subject = 'Contact from '.$email;
$headers = 'From: '. $email . "\r\n" .
           'Reply-To: '. $email . "\r\n" .
           'X-Mailer: PHP/' . phpversion();


mail($to,$subject,$message,$headers);

?>