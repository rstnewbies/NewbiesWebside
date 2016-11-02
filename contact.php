<?php 
$data = $_POST;
$name = $data['name'];
$email = $data['email'];
$message = $data['message'];

$text = $email."\n".$name."\n".$message;

mail('newbies@rst.com.pl','contact',$text,null);

?>