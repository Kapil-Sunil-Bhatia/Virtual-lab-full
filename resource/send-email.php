<?php
require 'class.phpmailer.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port = 587;
$mail->Host = 'smtp.gmail.com';
$mail->IsHTML(true);
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;
$mail->Username = "vlos.tech@somaiya.edu";
$mail->Password = "kwdwhjlzdzfawpwo";

//Sender Info
$mail->From = "sgbcell@gmail.com";
$mail->FromName = "K.J. Somaiya Institute of Engineering and Information Technology";
